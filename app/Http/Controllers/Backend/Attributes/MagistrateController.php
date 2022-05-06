<?php

namespace App\Http\Controllers\Backend\Attributes;

use App\Helpers\SelectFormData;
use App\Http\Controllers\Controller;
use App\Models\Magistrate;
use Illuminate\Http\Request;

class MagistrateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['magistrates'] = Magistrate::paginate(10);

        return view('backend.magistrates.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['countries'] = SelectFormData::country();
        $data['counties'] = SelectFormData::county();
        $data['towns'] = SelectFormData::town();

        return view('backend.magistrates.create', $data);
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
            'magistrate_name' => 'required',
            'magistrate_current_court_level' => 'required',
            'magistrate_current_country' => 'required',
            'magistrate_current_county' => 'required',
            'magistrate_current_town' => 'required',
            'magistrate_previous_court_level' => 'required',
            'magistrate_previous_country' => 'required',
            'magistrate_previous_county' => 'required',
            'magistrate_previous_town' => 'required'
        ]);
        //dd($validated_data);

        Magistrate::create([
            'magistrate_name' => $request->magistrate_name,
            'magistrate_current_court_level' => $request->magistrate_current_court_level,
            'magistrate_current_country' => $request->magistrate_current_country,
            'magistrate_current_county' => $request->magistrate_current_county,
            'magistrate_current_town' => $request->magistrate_current_town,
            'magistrate_previous_court_level' => $request->magistrate_previous_court_level,
            'magistrate_previous_country' => $request->magistrate_previous_country,
            'magistrate_previous_county' => $request->magistrate_previous_county,
            'magistrate_previous_town' => $request->magistrate_previous_town
        ]);

        return redirect()->back()->with('success','Magistrate successfully added to the system');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(int $id)
    {
        $data['magistrate'] = Magistrate::find($id);

        if ($data['magistrate'])
        {
            $data['countries'] = SelectFormData::country();

            return view('backend.magistrates.show', $data);
        }
        else
        {
            return redirect()->back()->with('error', 'Ooops! Magistrate not found');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(int $id)
    {
        $data['magistrate'] = Magistrate::find($id);

        if ($data['magistrate'])
        {
            $data['countries'] = SelectFormData::country();
            $data['counties'] = SelectFormData::county();
            $data['towns'] = SelectFormData::town();

            return view('backend.magistrates.edit', $data);
        }
        else
        {
            return redirect()->back()->with('error', 'Ooops! Magistrate not found');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, int $id)
    {
        $validated_data = $request->validate([
            'magistrate_name' => 'required',
            'magistrate_current_court_level' => 'required',
            'magistrate_current_country' => 'required',
            'magistrate_current_county' => 'required',
            'magistrate_current_town' => 'required',
            'magistrate_previous_court_level' => 'required',
            'magistrate_previous_country' => 'required',
            'magistrate_previous_county' => 'required',
            'magistrate_previous_town' => 'required'
        ]);
        //dd($validated_data);
        $magistrate = Magistrate::find($id);

        $magistrate->update([
            'magistrate_name' => $request->magistrate_name,
            'magistrate_current_court_level' => $request->magistrate_current_court_level,
            'magistrate_current_country' => $request->magistrate_current_country,
            'magistrate_current_county' => $request->magistrate_current_county,
            'magistrate_current_town' => $request->magistrate_current_town,
            'magistrate_previous_court_level' => $request->magistrate_previous_court_level,
            'magistrate_previous_country' => $request->magistrate_previous_country,
            'magistrate_previous_county' => $request->magistrate_previous_county,
            'magistrate_previous_town' => $request->magistrate_previous_town
        ]);

        return redirect()->back()->with('success','Magistrate details successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $id)
    {
        $data['magistrate'] = Magistrate::find($id);

        if ($data['magistrate'])
        {
            Magistrate::destroy($id);

            return redirect()->back()->with('success','Magistrate successfully removed from the system');
        }
        else
        {
            return redirect()->back()->with('error', 'Ooops! Magistrate not found');
        }
    }
}
