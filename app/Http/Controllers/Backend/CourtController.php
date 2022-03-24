<?php

namespace App\Http\Controllers\Backend;

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
        return view('backend.courts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCourtRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request);
        $validated_data = $request->validate([
            'court_name' => 'required',
            'court_level' => 'required',
            'court_location' => 'required',
            'court_country' => 'required',
        ]);

        Court::create([
            'court_name' => $request->court_name,
            'court_level' => $request->court_level,
            'court_location' => $request->court_location,
            'court_country' => $request->court_country,
        ]);

        return redirect()->back()->with('success','Court successfully added to the system');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Court  $court
     * @return \Illuminate\Http\Response
     */
    public function show(Court $court)
    {
        return view('backend.courts.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Court  $court
     * @return \Illuminate\Http\Response
     */
    public function edit(Court $court)
    {
        return view('backend.courts.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCourtRequest  $request
     * @param  \App\Models\Court  $court
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCourtRequest $request, Court $court)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Court  $court
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Court::destroy($id);

        return redirect()->back()->with('success','Court successfully removed from the system');
    }
}
