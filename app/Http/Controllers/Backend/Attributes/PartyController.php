<?php

namespace App\Http\Controllers\Backend\Attributes;

use App\Helpers\SelectFormData;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Party;

class PartyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['parties'] = Party::paginate(10);

        return view('backend.parties.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.parties.create');
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
            'party_name' => 'required'
        ]);
        //dd($validated_data);

        Party::create([
            'party_name' => $request->party_name,
            'created_by' => auth()->user()->first_name . ' ' . auth()->user()->last_name
        ]);

        return redirect()->back()->with('success','Party successfully added to the system');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show(int $id)
    {
        $data['party'] = Party::find($id);

        if ($data['party'])
        {
            return view('backend.parties.show', $data);
        }
        else
        {
            return redirect()->back()->with('error', 'Ooops! Party not found');
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
        $data['party'] = Party::find($id);

        if ($data['party'])
        {
            return view('backend.parties.edit', $data);
        }
        else
        {
            return redirect()->back()->with('error', 'Ooops! Party not found');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, int $id)
    {
        $validated_data = $request->validate([
            'party_name' => 'required'
        ]);
        //dd($validated_data);
        $party = Party::find($id);

        if ($party)
        {
            $party->update([
            'party_name' => $request->party_name
            ]);

            return redirect()->back()->with('success','Party details successfully Updated');
        }
        else
        {
            return redirect()->back()->with('warning','Oops! Something was amiss and the Party details was not successfully Updated');
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
        $data['party'] = Party::find($id);

        if ($data['party'])
        {
            Party::destroy($id);

            return redirect()->back()->with('success','Party successfully removed from the system');
        }
        else
        {
            return redirect()->back()->with('error', 'Ooops! Party not found');
        }

    }
}
