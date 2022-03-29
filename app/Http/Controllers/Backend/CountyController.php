<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\County;
use Illuminate\Http\Request;

class CountyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['counties'] = County::paginate(10);

        return view('backend.counties.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.counties.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCountyRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated_data = $request->validate([
            'county_name' => 'required',
            'county_code' => 'required',
            'county_country' => 'required'
        ]);
        //dd($validated_data);

        County::create([
            'county_name' => $request->county_name,
            'county_code' => $request->county_code,
            'county_country' => $request->county_country
        ]);

        return redirect()->back()->with('success','County successfully added to the system');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show(int $id)
    {
        $data['county'] = County::find($id);

        return view('backend.counties.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit(int $id)
    {
        $data['county'] = County::find($id);

        return view('backend.counties.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCountyRequest  $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, int $id)
    {
        $validated_data = $request->validate([
            'county_name' => 'required',
            'county_code' => 'required',
            'county_country' => 'required'
        ]);
        //dd($validated_data);
        $county = County::find($id);

        $county->update([
            'county_name' => $request->county_name,
            'county_code' => $request->county_code,
            'county_country' => $request->county_country
        ]);

        return redirect()->back()->with('success','County details successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $id)
    {
        County::destroy($id);

        return redirect()->back()->with('success','County successfully removed from the system');
    }
}
