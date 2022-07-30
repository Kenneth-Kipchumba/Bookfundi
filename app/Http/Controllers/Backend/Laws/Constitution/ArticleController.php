<?php

namespace App\Http\Controllers\Backend\Laws\Constitution;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\SubArticle;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['articles'] = Article::paginate(10);

        return view('backend.laws.constitution.articles.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //$data['article'] = Article::find($id);

        return view('backend.laws.constitution.articles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request);
        $validated_data = $request->validate([
            'article_number' => 'required',
            'article_body' => 'required'
        ]);
        
        if ($validated_data)
        {
            Article::create([
            'chapter_id' => $request->chapter_id,
            'part_id' => $request->part_id,
            'article_number' => $request->article_number,
            'article_body' => $request->article_body,
            'created_by' => auth()->user()->first_name . ' ' . auth()->user()->last_name
            ]);

            return redirect()->back()->with('success','Article successfully added to the constitution');
        }
        else
        {
            return redirect()->back()->with('warning','Article was not added to the constitution');
        }
        
    }

    /**
     * Display Article.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show(int $id)
    {
        $data['article'] = Article::find($id);

        if ( ! $data['article'])
        {

            //$sub_article = new SubArticle;
            $data['sub_article'] = SubArticle::where('article_id', $id)->get();

            //print_r($data['sub_article']);die();

            return view('backend.laws.constitution.articles.show', $data);
        }
        else
        {
            return redirect()->route('backend.articles.index')->with('warning', 'Article was not found');
        }
    }

    /**
     * Show the form for editing Article.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit(int $id)
    {
        $data['article'] = Article::find($id);

        return view('backend.laws.constitution.articles.edit', $data);
    }

    /**
     * Update Article in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validated_data = $request->validate([
            'article_number' => 'required',
            'article_body' => 'required'
        ]);
        //dd($validated_data);
        $article = Article::find($id);

        $article->update([
            'article_number' => $request->article_number,
            /*'chapter_id' => $request->chapter_id,
            'part_id' => $request->part_id,*/
            'article_body' => $request->article_body,
            'updated_by' => auth()->user()->first_name . ' ' . auth()->user()->last_name
        ]);

        return redirect()->back()->with('info','Article successfully Updated');
    }

    /**
     * Remove Article from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy ($id)
    {
        Article::destroy($id);

        return redirect()->back()->with('danger','Article successfully removed from this chapter');
    }
}
