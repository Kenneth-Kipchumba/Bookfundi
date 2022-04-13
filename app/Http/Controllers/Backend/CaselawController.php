<?php

namespace App\Http\Controllers\Backend;

use App\Helpers\SelectFormData;
use App\Http\Controllers\Controller;
use App\Models\Caselaw;
use Illuminate\Http\Request;

class CaselawController extends Controller
{
    /**
     * Display a listing of Caselaws
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['caselaws'] = Caselaw::paginate(10);

        return view('backend.caselaws.index', $data);
    }

    /**
     * Show the form for creating a new Caselaw.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['countries'] = SelectFormData::country();
        $data['counties'] = SelectFormData::county();
        $data['towns'] = SelectFormData::town();
        $data['outcomes'] = SelectFormData::outcome();
        $data['decisions'] = SelectFormData::decision();
        $data['parties'] = SelectFormData::party();
        $data['advocates'] = SelectFormData::advocate();
        $data['judges'] = SelectFormData::judge();
        $data['courts'] = SelectFormData::court();
        $data['magistrates'] = SelectFormData::magistrate();

        return view('backend.caselaws.create', $data);
    }

    /**
     * Store a newly created Caselaw in storage.
     *
     * @param  \App\Http\Requests\StoreCaselawRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->case_body);
        //print_r($request->case_body);die();
        $validated_data = $request->validate([
            'case_number' => 'required',
            'case_title' => 'required',
            'case_plaintiff' => '',
            'case_respondent' => '',
            'case_defendant' => '',
            'case_appellant' => '',
            'case_judges' => '',
            'plaintiffs_advocate' => '',
            'respondents_advocate' => '',
            'defendants_advocate' => '',
            'appellants_advocate' => '',
            'case_decision' => 'required',
            'case_outcome' => 'required',
            'case_date' => 'required',
            'case_country' => 'required',
            'case_county' => 'required',
            'case_town' => 'required',
            'case_court' => 'required',
            'case_body' => 'required',
        ]);
        //dd($validated_data);

        Caselaw::create([
            'case_number' => $request->case_number,
            'case_title' => $request->case_title,
            'case_plaintiff' => $request->case_plaintiff,
            'case_respondent' => $request->case_respondent,
            'case_defendant' => $request->case_defendant,
            'case_appellant' => $request->case_appellant,
            'case_judges' => $request->case_judges,
            'plaintiffs_advocate' => $request->plaintiffs_advocate,
            'respondents_advocate' => $request->respondents_advocate,
            'defendants_advocate' => $request->defendants_advocate,
            'appellants_advocate' => $request->appellants_advocate,
            'case_decision' => $request->case_decision,
            'case_outcome' => $request->case_outcome,
            'case_date' => $request->date('case_date'),
            'case_country' => $request->case_country,
            'case_county' => $request->case_county,
            'case_town' => $request->case_town,
            'case_court' => $request->case_court,
            'case_body' => $request->case_body,
        ]);

        return redirect()->back()->with('success','Caselaw successfully added to the system');
    }

    /**
     * Display the specified Caselaw.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show(int $id)
    {
        $data['caselaw'] = Caselaw::find($id);

        if ($data['caselaw'])
        {
            $data['countries'] = SelectFormData::country();

            return view('backend.caselaws.show', $data);
        }
        else
        {
            return redirect()->back()->with('error', 'Ooops! Caselaw not found');
        }
    }

    /**
     * Show the form for editing the specified Caselaw.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit(int $id)
    {
        $data['caselaw'] = Caselaw::find($id);

        if ($data['caselaw'])
        {
            $data['countries'] = SelectFormData::country();
            $data['counties'] = SelectFormData::county();
            $data['towns'] = SelectFormData::town();

            return view('backend.caselaws.edit', $data);
        }
        else
        {
            return redirect()->back()->with('error', 'Ooops! Caselaw not found');
        }
    }

    /**
     * Update the specified Caselaw in storage.
     *
     * @param  \App\Http\Requests\UpdateCaselawRequest  $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, int $id)
    {
        $validated_data = $request->validate([
            'caselaw_name' => 'required',
            'caselaw_current_court_level' => 'required',
            'caselaw_current_country' => 'required',
            'caselaw_current_county' => 'required',
            'caselaw_current_town' => 'required',
            'caselaw_previous_court_level' => 'required',
            'caselaw_previous_country' => 'required',
            'caselaw_previous_county' => 'required',
            'caselaw_previous_town' => 'required'
        ]);
        //dd($validated_data);
        $caselaw = Caselaw::find($id);

        $caselaw->update([
            'caselaw_name' => $request->caselaw_name,
            'caselaw_current_court_level' => $request->caselaw_current_court_level,
            'caselaw_current_country' => $request->caselaw_current_country,
            'caselaw_current_county' => $request->caselaw_current_county,
            'caselaw_current_town' => $request->caselaw_current_town,
            'caselaw_previous_court_level' => $request->caselaw_previous_court_level,
            'caselaw_previous_country' => $request->caselaw_previous_country,
            'caselaw_previous_county' => $request->caselaw_previous_county,
            'caselaw_previous_town' => $request->caselaw_previous_town
        ]);

        return redirect()->back()->with('success','Caselaw details successfully Updated');
    }

    /**
     * Remove the specified Caselaw from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $id)
    {
        $data['caselaw'] = Caselaw::find($id);

        if ($data['caselaw'])
        {
            Caselaw::destroy($id);

            return redirect()->back()->with('success','Caselaw successfully removed from the system');
        }
        else
        {
            return redirect()->back()->with('error', 'Ooops! Caselaw not found');
        }
    }
}
