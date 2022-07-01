<?php

namespace App\Http\Controllers\Backend\Attributes;

use App\Helpers\SelectFormData;
use App\Http\Controllers\Controller;
use App\Models\Judge;
use Illuminate\Http\Request;

class JudgeController extends Controller
{
    /**
     * Display a listing of Judges
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['judges'] = Judge::paginate(10);

        return view('backend.judges.index', $data);
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

        return view('backend.judges.create', $data);
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
            'judge_name' => 'required',
            'judge_current_court_level' => 'required',
            'judge_current_country' => 'required',
            'judge_current_county' => 'required',
            'judge_current_town' => 'required',
            'judge_previous_court_level' => 'required',
            'judge_previous_country' => 'required',
            'judge_previous_county' => 'required',
            'judge_previous_town' => 'required'
        ]);
        //dd($validated_data);

        Judge::create([
            'judge_name' => $request->judge_name,
            'judge_current_court_level' => $request->judge_current_court_level,
            'judge_current_country' => $request->judge_current_country,
            'judge_current_county' => $request->judge_current_county,
            'judge_current_town' => $request->judge_current_town,
            'judge_previous_court_level' => $request->judge_previous_court_level,
            'judge_previous_country' => $request->judge_previous_country,
            'judge_previous_county' => $request->judge_previous_county,
            'judge_previous_town' => $request->judge_previous_town,
            'created_by' => auth()->user()->first_name . ' ' . auth()->user()->last_name
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
        $data['judge'] = Judge::find($id);

        if ($data['judge'])
        {
            $data['countries'] = SelectFormData::country();

            return view('backend.judges.show', $data);
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
        $data['judge'] = Judge::find($id);

        if ($data['judge'])
        {
            $data['countries'] = SelectFormData::country();
            $data['counties'] = SelectFormData::county();
            $data['towns'] = SelectFormData::town();

            return view('backend.judges.edit', $data);
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
            'judge_name' => 'required',
            'judge_current_court_level' => 'required',
            'judge_current_country' => 'required',
            'judge_current_county' => 'required',
            'judge_current_town' => 'required',
            'judge_previous_court_level' => 'required',
            'judge_previous_country' => 'required',
            'judge_previous_county' => 'required',
            'judge_previous_town' => 'required'
        ]);
        //dd($validated_data);
        $judge = Judge::find($id);

        $judge->update([
            'judge_name' => $request->judge_name,
            'judge_current_court_level' => $request->judge_current_court_level,
            'judge_current_country' => $request->judge_current_country,
            'judge_current_county' => $request->judge_current_county,
            'judge_current_town' => $request->judge_current_town,
            'judge_previous_court_level' => $request->judge_previous_court_level,
            'judge_previous_country' => $request->judge_previous_country,
            'judge_previous_county' => $request->judge_previous_county,
            'judge_previous_town' => $request->judge_previous_town
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
        $data['judge'] = Judge::find($id);

        if ($data['judge'])
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
