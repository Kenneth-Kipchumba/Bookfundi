<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Decision;

class DecisionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['decisions'] = Decision::paginate(10);
        //dd($data);

        return view('backend.decisions.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.decisions.create');
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
            'decision_name' => 'required'
        ]);
        //dd($validated_data);

        Decision::create([
            'decision_name' => $request->decision_name,
        ]);

        return redirect()->back()->with('success','Decision successfully added to the system');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show(int $id)
    {
        $data['decision'] = Decision::find($id);

        if ($data['decision'])
        {
            return view('backend.decisions.show', $data);
        }
        else
        {
            return redirect()->back()->with('error', 'Ooops! Decision not found');
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
        $data['decision'] = Decision::find($id);

        if ($data['decision'])
        {
            return view('backend.decisions.edit', $data);
        }
        else
        {
            return redirect()->back()->with('error', 'Ooops! Decision not found');
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
            'decision_name' => 'required'
        ]);
        //dd($validated_data);
        $decision = Decision::find($id);

        if ($decision)
        {
            $decision->update([
                'decision_name' => $request->decision_name
            ]);

            return redirect()->back()->with('success','Decision details successfully Updated');
        }
        else
        {
            return redirect()->back()->with('warning','Oops! Something was amiss and the Decision details was not successfully Updated');
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
        $data['decision'] = Decision::find($id);

        if ($data['decision'])
        {
            Decision::destroy($id);

            return redirect()->back()->with('success','Decision successfully removed from the system');
        }
        else
        {
            return redirect()->back()->with('error', 'Ooops! Decision not found');
        }

    }
}
