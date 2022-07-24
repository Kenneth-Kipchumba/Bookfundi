<?php

namespace App\Http\Controllers\Backend\Laws\Constitution;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Part;
use Illuminate\Http\Request;

class PartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['parts'] = Part::paginate(10);

        return view('backend.laws.constitution.parts.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //$data['part'] = Part::find($id);

        return view('backend.laws.constitution.parts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePartRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request);
        $validated_data = $request->validate([
            'part_name' => 'required',
            'part_body' => 'required',
        ]);
        
        if ($validated_data)
        {
            Part::create([
            'chapter_id' => $request->chapter_id,
            'part_name' => $request->part_name,
            'part_body' => $request->part_body,
            'created_by' => auth()->user()->first_name . ' ' . auth()->user()->last_name
            ]);

            return redirect()->back()->with('success','Part successfully added to this chapter');
        }
        else
        {
            return redirect()->back()->with('warning','Part was not added to that chapter');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Part  $part
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data['part'] = Part::find($id);
        $data['articles'] = Article::paginate(10);
        $data['article'] = Article::find($id);

        return view('backend.laws.constitution.parts.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Part  $part
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['part'] = Part::find($id);

        return view('backend.laws.constitution.parts.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePartRequest  $request
     * @param  \App\Models\Part  $part
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validated_data = $request->validate([
            'part_name' => 'required',
            'part_body' => 'required'
        ]);
        //dd($validated_data);
        $part = Part::find($id);

        $part->update([
            'part_name' => $request->part_name,
            'part_body' => $request->part_body,
            'created_by' => auth()->user()->first_name . ' ' . auth()->user()->last_name
        ]);

        return redirect()->back()->with('info','Part successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Part  $part
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Part::destroy($id);

        return redirect()->back()->with('danger','Part successfully removed from this chapter');
    }
}
