<?php

namespace App\Http\Controllers\Backend\Laws;

use App\Http\Controllers\Controller;
use App\Models\Constitution;
use Illuminate\Http\Request;

class ConstitutionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['constitutions'] = Constitution::paginate(10);

        return view('backend.constitutions.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.constitutions.create');
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
            'chapters' => 'required',
            'parts' => 'required',
            'articles' => 'required'
        ]);
        //dd($validated_data);

        Constitution::create([
            'chapters' => $request->chapters,
            'parts' => $request->parts,
            'articles' => $request->articles
        ]);

        return redirect()->back()->with('success','Constitution successfully added to the system');
    }

    /**
     * Display Constitution.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show(int $id)
    {
        $data['constitution'] = Constitution::find($id);

        return view('backend.constitutions.show', $data);
    }

    /**
     * Show the form for editing Constitution.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit(int $id)
    {
        $data['constitution'] = Constitution::find($id);

        return view('backend.constitutions.edit', $data);
    }

    /**
     * Update Constitution in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validated_data = $request->validate([
            'chapters' => 'required',
            'parts' => 'required',
            'articles' => 'required',
            'schedules' => 'required',
        ]);
        //dd($validated_data);
        $constitution = Constitution::find($id);

        $constitution->update([
            'chapters' => $request->chapters,
            'parts' => $request->parts,
            'articles' => $request->articles,
            'schedules' => $request->schedules,
        ]);

        return redirect()->back()->with('success','Constitution details successfully Updated');
    }

    /**
     * Remove Constitution from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy ($id)
    {
        Constitution::destroy($id);

        return redirect()->back()->with('success','Constitution successfully removed from the system');
    }
}
