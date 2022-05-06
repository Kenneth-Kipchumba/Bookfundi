<?php

namespace App\Http\Controllers\Backend\Attributes;

use App\Helpers\SelectFormData;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Outcome;

class OutcomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['outcomes'] = Outcome::paginate(10);

        return view('backend.outcomes.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.outcomes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated_data = $request->validate([
            'outcome_name' => 'required'
        ]);
        //dd($validated_data);

        Outcome::create([
            'outcome_name' => $request->outcome_name
        ]);

        return redirect()->back()->with('success','Outcome successfully added to the system');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show(int $id)
    {
        $data['outcome'] = Outcome::find($id);

        if ($data['outcome'])
        {
            return view('backend.outcomes.show', $data);
        }
        else
        {
            return redirect()->back()->with('error', 'Ooops! Outcome not found');
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
        $data['outcome'] = Outcome::find($id);

        if ($data['outcome'])
        {
            return view('backend.outcomes.edit', $data);
        }
        else
        {
            return redirect()->back()->with('error', 'Ooops! Outcome not found');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Illuminate\Http\Request  $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, int $id)
    {
        $validated_data = $request->validate([
            'outcome_name' => 'required'
        ]);
        //dd($validated_data);
        $outcome = Outcome::find($id);

        if ($outcome)
        {
            $outcome->update([
            'outcome_name' => $request->outcome_name
            ]);

            return redirect()->back()->with('success','Outcome details successfully Updated');
        }
        else
        {
            return redirect()->back()->with('warning','Oops! Something was amiss and the Outcome details was not successfully Updated');
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
        $data['outcome'] = Outcome::find($id);

        if ($data['outcome'])
        {
            Outcome::destroy($id);

            return redirect()->back()->with('success','Outcome successfully removed from the system');
        }
        else
        {
            return redirect()->back()->with('error', 'Ooops! Outcome not found');
        }

    }
}
