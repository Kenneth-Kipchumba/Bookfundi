<?php

namespace App\Http\Controllers\Backend\Locations;

use App\Http\Controllers\Controller;
use App\Models\Country;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['countries'] = Country::paginate(10);

        return view('backend.countries.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.countries.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated_data = $request->validate([
            'country_name' => 'required',
            'country_code' => 'required',
        ]);
        //dd($validated_data);

        Country::create([
            'country_name' => $request->country_name,
            'country_code' => $request->country_code,
            'created_by' => auth()->user()->first_name . ' ' . auth()->user()->last_name
        ]);

        return redirect()->back()->with('success','Country successfully added to the system');
    }

    /**
     * Display Country.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show(int $id)
    {
        $data['country'] = Country::find($id);

        return view('backend.countries.show', $data);
    }

    /**
     * Show the form for editing Country.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit(int $id)
    {
        $data['country'] = Country::find($id);

        return view('backend.countries.edit', $data);
    }

    /**
     * Update Country in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validated_data = $request->validate([
            'country_name' => 'required',
            'country_code' => 'required',
        ]);
        //dd($validated_data);
        $country = Country::find($id);

        $country->update([
            'country_name' => $request->country_name,
            'country_code' => $request->country_code,
        ]);

        return redirect()->back()->with('success','Country details successfully Updated');
    }

    /**
     * Remove Country from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy ($id)
    {
        Country::destroy($id);

        return redirect()->back()->with('success','Country successfully removed from the system');
    }
}
