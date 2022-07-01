<?php

namespace App\Http\Controllers\Backend\Attributes;

use App\Models\Citation;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CitationController extends Controller
{
    /**
     * Display a listing of citations.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['citations'] = Citation::paginate(10);

        return view('backend.citations.index', $data);
    }

    /**
     * Show the form for creating a new citation.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.citations.create');
    }

    /**
     * Store a newly created citation in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated_data = $request->validate([
            'citation_name' => 'required'
        ]);
        //dd($validated_data);

        Citation::create([
            'citation_name' => $request->citation_name,
            'created_by' => auth()->user()->first_name . ' ' . auth()->user()->last_name
        ]);

        return redirect()->back()->with('success','Citation successfully added to the system');
    }

    /**
     * Display the specified citations.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show(int $id)
    {
        $data['citation'] = Citation::find($id);

        if ($data['citation'])
        {
            return view('backend.citations.show', $data);
        }
        else
        {
            return redirect()->back()->with('error', 'Ooops! Citation not found');
        }
    }

    /**
     * Show the form for editing the specified citations.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit(int $id)
    {
        $data['citation'] = Citation::find($id);

        if ($data['citation'])
        {
            return view('backend.citations.edit', $data);
        }
        else
        {
            return redirect()->back()->with('error', 'Ooops! Citation not found');
        }
    }

    /**
     * Update the specified citations in storage.
     *
     * @param  \App\Http\Requests\UpdateCitationRequest  $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, int $id)
    {
        $validated_data = $request->validate([
            'citation_name' => 'required'
        ]);
        //dd($validated_data);
        $citation = Citation::find($id);

        if ($citation)
        {
            $citation->update([
            'citation_name' => $request->citation_name
            ]);

            return redirect()->back()->with('success','Citation details successfully Updated');
        }
        else
        {
            return redirect()->back()->with('warning','Oops! Something was amiss and the Citation details was not successfully Updated');
        }
    }

    /**
     * Remove the specified citations from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $id)
    {
        $data['citation'] = Citation::find($id);

        if ($data['citation'])
        {
            Citation::destroy($id);

            return redirect()->back()->with('success','Citation successfully removed from the system');
        }
        else
        {
            return redirect()->back()->with('error', 'Ooops! Citation not found');
        }
    }
}
