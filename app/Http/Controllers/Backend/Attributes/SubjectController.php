<?php

namespace App\Http\Controllers\Backend\Attributes;

use App\Http\Controllers\Controller;
use App\Models\Subject;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['subjects'] = Subject::paginate(10);

        return view('backend.subjects.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.subjects.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated_data = $request->validate([
            'subject_name' => 'required'
        ]);
        //dd($validated_data);

        Subject::create([
            'subject_name' => $request->subject_name,
            'created_by' => auth()->user()->first_name . ' ' . auth()->user()->last_name
        ]);

        return redirect()->back()->with('success','Subject successfully added to the system');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show(int $id)
    {
        $data['subject'] = Subject::find($id);

        if ($data['subject'])
        {
            return view('backend.subjects.show', $data);
        }
        else
        {
            return redirect()->back()->with('error', 'Ooops! Subject not found');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit(int $id)
    {
        $data['subject'] = Subject::find($id);

        if ($data['subject'])
        {
            return view('backend.subjects.edit', $data);
        }
        else
        {
            return redirect()->back()->with('error', 'Ooops! Subject not found');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Illuminate\Http\Request  $request
     * @param  \App\Models\Subject  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, int $id)
    {
        $validated_data = $request->validate([
            'subject_name' => 'required'
        ]);
        //dd($validated_data);
        $subject = Subject::find($id);

        if ($subject)
        {
            $subject->update([
            'subject_name' => $request->subject_name
            ]);

            return redirect()->back()->with('success','Subject details successfully Updated');
        }
        else
        {
            return redirect()->back()->with('warning','Oops! Something was amiss and the Subject details was not successfully Updated');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $id)
    {
        $data['subject'] = Subject::find($id);

        if ($data['subject'])
        {
            Subject::destroy($id);

            return redirect()->back()->with('success','Subject successfully removed from the system');
        }
        else
        {
            return redirect()->back()->with('error', 'Ooops! Subject not found');
        }
    }
}
