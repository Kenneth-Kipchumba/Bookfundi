<?php

namespace App\Http\Controllers\Backend\Laws\Constitution;

use App\Http\Controllers\Controller;
use App\Models\Schedule;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['schedules'] = Schedule::paginate(10);

        return view('backend.laws.constitution.schedules.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.laws.constitution.schedules.create');
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
            'number' => 'required',
            'name' => 'required',
            'body' => 'required',
            'legal_notice' => 'required',
            'legal_notice_date' => ''
        ]);
        
        if ($validated_data)
        {
            Schedule::create([
            'number' => $request->number,
            'name' => $request->name,
            'body' => $request->body,
            'legal_notice' => $request->legal_notice,
            'legal_notice_date' => $request->legal_notice_date
            ]);

            return redirect()->back()->with('success','Schedule successfully added to the constitution');
        }
        else
        {
            return redirect()->back()->with('warning','Schedule was not successfully added to the constitution');
        }
        
    }

    /**
     * Display Schedule.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show(int $id)
    {
        $data['schedule'] = Schedule::find($id);

        return view('backend.laws.constitution.schedules.show', $data);
    }

    /**
     * Show the form for editing Schedule.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit(int $id)
    {
        $data['schedule'] = Schedule::find($id);

        return view('backend.laws.constitution.schedules.edit', $data);
    }

    /**
     * Update Schedule in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validated_data = $request->validate([
            'number' => 'required',
            'name' => 'required',
            'body' => 'required',
            'legal_notice' => 'required',
            'legal_notice_date' => 'required'
        ]);
        //dd($validated_data);
        $schedule = Schedule::find($id);

        $schedule->update([
            'number' => $request->number,
            'name' => $request->name,
            'body' => $request->body,
            'legal_notice' => $request->legal_notice,
            'legal_notice_date' => $request->legal_notice_date
        ]);

        return redirect()->back()->with('info','Schedule details successfully Updated');
    }

    /**
     * Remove Schedule from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy ($id)
    {
        Schedule::destroy($id);

        return redirect()->back()->with('danger','Schedule successfully removed from the constitution');
    }
}
