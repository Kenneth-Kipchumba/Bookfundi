<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Judge;

class JudgeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        dd('Judges');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreJudgeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreJudgeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Judge  $judge
     * @return \Illuminate\Http\Response
     */
    public function show(Judge $judge)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Judge  $judge
     * @return \Illuminate\Http\Response
     */
    public function edit(Judge $judge)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateJudgeRequest  $request
     * @param  \App\Models\Judge  $judge
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateJudgeRequest $request, Judge $judge)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Judge  $judge
     * @return \Illuminate\Http\Response
     */
    public function destroy(Judge $judge)
    {
        //
    }
}
