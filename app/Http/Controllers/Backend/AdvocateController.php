<?php

namespace App\Http\Controllers\Backend;

use App\Models\Advocate;
use App\Helpers\SelectFormData;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdvocateController extends Controller
{
    /**
     * Display a listing of advocates.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['advocates'] = Advocate::paginate(10);

        return view('backend.advocates.index', $data);
    }

    /**
     * Show the form for creating a new advocate.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['law_firms'] = SelectFormData::law_firm();
        $data['specializations'] = SelectFormData::specialization();

        return view('backend.advocates.create', $data);
    }

    /**
     * Store a newly created advocate in storage.
     *
     * @param  Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated_data = $request->validate([
            'advocate_name' => 'required',
            'advocate_law_firm' => 'required',
            'advocate_specialization' => 'required'
        ]);
        //dd($validated_data);

        Advocate::create([
            'advocate_name' => $request->advocate_name,
            'advocate_law_firm' => $request->advocate_law_firm,
            'advocate_specialization' => $request->advocate_specialization,
        ]);

        return redirect()->back()->with('success','Advocate successfully added to the system');
    }

    /**
     * Display the specified advocate.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show(int $id)
    {
        $data['advocate'] = Advocate::find($id);

        if ($data['advocate'])
        {
            $data['countries'] = SelectFormData::country();

            return view('backend.advocates.show', $data);
        }
        else
        {
            return redirect()->back()->with('error', 'Ooops! Advocate not found');
        }
    }

    /**
     * Show the form for editing the specified advocate.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit(int $id)
    {
        $data['advocate'] = Advocate::find($id);

        if ($data['advocate'])
        {
            $data['law_firm'] = SelectFormData::law_firm();

            return view('backend.advocates.edit', $data);
        }
        else
        {
            return redirect()->back()->with('error', 'Ooops! Advocate not found');
        }
    }

    /**
     * Update the specified advocate in storage.
     *
     * @param  Illuminate\Http\Request\rReques  $request
     * @param  \App\Models\Advocate  $advocate
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, int $id)
    {
        $validated_data = $request->validate([
            'advocate_name' => 'required',
            'advocate_law_firm' => 'required',
            'advocate_specialization' => 'required'
        ]);
        //dd($validated_data);
        $advocate = Advocate::find($id);

        $advocate->update([
            'advocate_name' => $request->advocate_name,
            'advocate_law_firm' => $request->advocate_law_firm,
            'advocate_specialization' => $request->advocate_specialization,
        ]);

        return redirect()->back()->with('success','Advocate details successfully Updated');
    }

    /**
     * Remove the specified advocate from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $id)
    {
        $data['advocate'] = Advocate::find($id);

        if ($data['advocate'])
        {
            Advocate::destroy($id);

            return redirect()->back()->with('success','Advocate successfully removed from the system');
        }
        else
        {
            return redirect()->back()->with('error', 'Ooops! Advocate not found');
        }
    }
}
