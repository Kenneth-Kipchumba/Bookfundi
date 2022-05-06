<?php

namespace App\Http\Controllers\Backend\Attributes;

use App\Helpers\SelectFormData;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCourtRequest;
use App\Http\Requests\UpdateCourtRequest;
use App\Models\Court;
use Illuminate\Http\Request;

class CourtController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['courts'] = Court::paginate(10);

        return view('backend.courts.index', $data);
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

        return view('backend.courts.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCourtRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated_data = $request->validate([
            'court_name' => 'required',
            'court_level' => 'required',
            'court_country' => 'required',
            'court_county' => 'required',
            'court_town' => 'required'
        ]);
        //dd($validated_data);

        Court::create([
            'court_name' => $request->court_name,
            'court_level' => $request->court_level,
            'court_country' => $request->court_country,
            'court_county' => $request->court_county,
            'court_town' => $request->court_town,
        ]);

        return redirect()->back()->with('success','Court successfully added to the system');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data['court'] = Court::find($id);

        return view('backend.courts.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['court'] = Court::find($id);

        return view('backend.courts.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCourtRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validated_data = $request->validate([
            'court_name' => 'required',
            'court_level' => 'required',
            'court_country' => 'required',
            'court_county' => 'required',
            'court_town' => 'required'
        ]);
        //dd($validated_data);
        $court = Court::find($id);

        $court->update([
            'court_name' => $request->court_name,
            'court_level' => $request->court_level,
            'court_country' => $request->court_country,
            'court_county' => $request->court_county,
            'court_town' => $request->court_town,
        ]);

        return redirect()->back()->with('success','Court details successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Court::destroy($id);

        return redirect()->back()->with('success','Court successfully removed from the system');
    }
}
