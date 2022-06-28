<?php

namespace App\Http\Controllers\Backend\Laws\Constitution;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SubSubArticle;

class SubSubArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['sub_sub_articles'] = SubSubArticle::paginate(10);

        return view('backend.laws.constitution.sub_sub_articles.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.laws.constitution.sub_sub_articles.create');
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
            'title' => 'required',
            'description' => 'required'
        ]);
        
        if ($validated_data)
        {
            SubSubArticle::create([
            'title' => $request->title,
            'description' => $request->description,
            'created_by' => auth()->user()->first_name . ' ' . auth()->user()->last_name
            ]);

            return redirect()->back()->with('success','Sub Sub Article successfully added to the Sub Article');
        }
        else
        {
            return redirect()->back()->with('warning','Sub Sub Article was not added to the Sub Article');
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
        $data['sub_sub_article'] = SubSubArticle::find($id);

        return view('backend.laws.constitution.sub_sub_articles.show', $data);
    }

    /**
     * Show the form for editing Article.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit(int $id)
    {
        $data['sub_sub_article'] = SubSubArticle::find($id);

        return view('backend.laws.constitution.sub_sub_articles.edit', $data);
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
            'title' => 'required',
            'description' => 'required'
        ]);
        //dd($validated_data);
        $article = SubSubArticle::find($id);

        $article->update([
            'title' => $request->title,
            'description' => $request->description
        ]);

        return redirect()->back()->with('info','Sub Sub Article details successfully Updated');
    }

    /**
     * Remove Article from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy ($id)
    {
        SubSubArticle::destroy($id);

        return redirect()->back()->with('danger','Sub Sub Article successfully removed from the Sub Article');
    }
}
