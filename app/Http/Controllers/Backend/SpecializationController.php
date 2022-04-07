<?php

namespace App\Http\Controllers\Backend;

use App\Models\Specialization;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SpecializationController extends Controller
{
    /**
     * Display a listing of  specializations.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['specializations'] = Specialization::paginate(10);

        return view('backend.specializations.index', $data);
    }

    /**
     * Show the form for creating a new specialization.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.specializations.create');
    }

    /**
     * Store a newly created specialization in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated_data = $request->validate([
            'specialization_name' => 'required'
        ]);
        //dd($validated_data);

        Specialization::create([
            'specialization_name' => $request->specialization_name
        ]);

        return redirect()->back()->with('success','Specialization successfully added to the system');
    }

    /**
     * Display the specified specializations.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show(int $id)
    {
        $data['specialization'] = Specialization::find($id);

        if ($data['specialization'])
        {
            return view('backend.specializations.show', $data);
        }
        else
        {
            return redirect()->back()->with('error', 'Ooops! Specialization not found');
        }
    }

    /**
     * Show the form for editing the specified specializations.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit(int $id)
    {
        $data['specialization'] = Specialization::find($id);

        if ($data['specialization'])
        {
            return view('backend.specializations.edit', $data);
        }
        else
        {
            return redirect()->back()->with('error', 'Ooops! Specialization not found');
        }
    }

    /**
     * Update the specified specializations in storage.
     *
     * @param  \App\Http\Requests\UpdateSpecializationRequest  $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, int $id)
    {
        $validated_data = $request->validate([
            'specialization_name' => 'required'
        ]);
        //dd($validated_data);
        $specialization = Specialization::find($id);

        if ($specialization)
        {
            $specialization->update([
            'specialization_name' => $request->specialization_name
            ]);

            return redirect()->back()->with('success','Specialization details successfully Updated');
        }
        else
        {
            return redirect()->back()->with('warning','Oops! Something was amiss and the Specialization details was not successfully Updated');
        }
    }

    /**
     * Remove the specified specializations from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $id)
    {
        $data['specialization'] = Specialization::find($id);

        if ($data['specialization'])
        {
            Specialization::destroy($id);

            return redirect()->back()->with('success','Specialization successfully removed from the system');
        }
        else
        {
            return redirect()->back()->with('error', 'Ooops! Specialization not found');
        }
    }
}
