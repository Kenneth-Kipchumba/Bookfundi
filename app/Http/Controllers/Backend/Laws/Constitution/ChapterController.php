<?php

namespace App\Http\Controllers\Backend\Laws\Constitution;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Chapter;
use Illuminate\Http\Request;

class ChapterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['chapters'] = Chapter::paginate(10);

        return view('backend.laws.constitution.chapters.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //$data['chapter'] = Chapter::find($id);

        return view('backend.laws.constitution.chapters.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreChapterRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request);
        $validated_data = $request->validate([
            'chapter_name' => 'required',
            'chapter_body' => 'required',
        ]);
        
        if ($validated_data)
        {
            Chapter::create([
            'chapter_name' => $request->chapter_name,
            'chapter_body' => $request->chapter_body,
            'created_by' => auth()->user()->first_name . ' ' . auth()->user()->last_name
            ]);

            return redirect()->back()->with('success','Chapter successfully added to the constitution');
        }
        else
        {
            return redirect()->back()->with('warning','Chapter was not added to the constitution');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Chapter  $chapter
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data['chapter'] = Chapter::find($id);
        $data['articles'] = Article::paginate(10);
        $data['article'] = Article::find($id);

        return view('backend.laws.constitution.chapters.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Chapter  $chapter
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['chapter'] = Chapter::find($id);

        return view('backend.laws.constitution.chapters.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateChapterRequest  $request
     * @param  \App\Models\Chapter  $chapter
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validated_data = $request->validate([
            'chapter_name' => 'required',
            'chapter_body' => 'required'
        ]);
        //dd($validated_data);
        $chapter = Chapter::find($id);

        $chapter->update([
            'chapter_name' => $request->chapter_name,
            'chapter_body' => $request->chapter_body,
            'created_by' => auth()->user()->first_name . ' ' . auth()->user()->last_name
        ]);

        return redirect()->back()->with('info','Chapter successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Chapter  $chapter
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Chapter::destroy($id);

        return redirect()->back()->with('danger','Chapter successfully removed from the constitution');
    }
}
