<?php

namespace App\Http\Controllers\Backend;

use App\Helpers\SelectFormData;
use App\Http\Controllers\Controller;
use App\Models\Judge;
use Illuminate\Http\Request;

class CaselawController extends Controller
{
    /**
     * Display a listing of Judges
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['caselaws'] = Judge::paginate(10);

        return view('backend.caselaws.index', $data);
    }

    /**
     * Show the form for creating a new Judge.
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
        $data['magistrates'] = SelectFormData::magistrate();

        return view('backend.caselaws.create', $data);
    }

    /**
     * Store a newly created Judge in storage.
     *
     * @param  \App\Http\Requests\StoreJudgeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated_data = $request->validate([
            'case_number' => 'required',
            'case_title' => 'required',
            'case_plaintiff' => '',
            'case_respondent' => '',
            'case_defendant' => '',
            'case_appellant' => '',
            'case_caselaws' => 'required',
            'plaintiffs_advocate' => '',
            'respondents_advocate' => '',
            'defendants_advocate' => '',
            'appellants_advocate' => '',
            'decision' => 'required',
            'outcome' => 'required',
            'year' => 'required',
            'location' => 'required'
        ]);
        //dd($validated_data);

        Judge::create([
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

        return redirect()->back()->with('success','Judge successfully added to the system');
    }

    /**
     * Display the specified Judge.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show(int $id)
    {
        $data['caselaw'] = Judge::find($id);

        if ($data['caselaw'])
        {
            $data['countries'] = SelectFormData::country();

            return view('backend.caselaws.show', $data);
        }
        else
        {
            return redirect()->back()->with('error', 'Ooops! Judge not found');
        }
    }

    /**
     * Show the form for editing the specified Judge.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit(int $id)
    {
        $data['caselaw'] = Judge::find($id);

        if ($data['caselaw'])
        {
            $data['countries'] = SelectFormData::country();
            $data['counties'] = SelectFormData::county();
            $data['towns'] = SelectFormData::town();

            return view('backend.caselaws.edit', $data);
        }
        else
        {
            return redirect()->back()->with('error', 'Ooops! Judge not found');
        }
    }

    /**
     * Update the specified Judge in storage.
     *
     * @param  \App\Http\Requests\UpdateJudgeRequest  $request
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
        $caselaw = Judge::find($id);

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

        return redirect()->back()->with('success','Judge details successfully Updated');
    }

    /**
     * Remove the specified Judge from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $id)
    {
        $data['caselaw'] = Judge::find($id);

        if ($data['caselaw'])
        {
            Judge::destroy($id);

            return redirect()->back()->with('success','Judge successfully removed from the system');
        }
        else
        {
            return redirect()->back()->with('error', 'Ooops! Judge not found');
        }
    }
}
