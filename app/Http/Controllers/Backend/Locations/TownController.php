<?php

namespace App\Http\Controllers\Backend\Locations;

use App\Helpers\SelectFormData;
use App\Http\Controllers\Controller;
use App\Models\Country;
use App\Models\Town;
use Illuminate\Http\Request;

class TownController extends Controller
{
    /**
     * Display a listing of the Town.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['towns'] = Town::paginate(10);

        return view('backend.towns.index', $data);
    }

    /**
     * Show the form for creating a new Town.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['counties'] = SelectFormData::county();
        $data['provinces'] = SelectFormData::province();
        //dd($data['counties']);
        $data['countries'] = SelectFormData::country();

        return view('backend.towns.create', $data);
    }

    /**
     * Store a newly created Town in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated_data = $request->validate([
            'town_name' => 'required',
            'town_country' => 'required',
            'town_county' => 'required',
        ]);
        //dd($validated_data);

        Town::create([
            'town_name' => $request->town_name,
            'town_country' => $request->town_country,
            'town_county' => $request->town_county
        ]);

        return redirect()->back()->with('success','Town successfully added to the system');
    }

    /**
     * Display Town.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show(int $id)
    {
        $data['town'] = Town::find($id);

        if ($data['town'])
        {
            return view('backend.towns.show', $data);
        }
        else
        {
            return redirect()->back()->with('error', 'Ooops! Town not found');
        }
        
    }

    /**
     * Show the form for editing Town.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit(int $id)
    {
        $data['town'] = Town::find($id);

        if ($data['town'])
        {
            $data['countries'] = SelectFormData::country();
            $data['counties'] = SelectFormData::county();
            $data['provinces'] = SelectFormData::province();
            //dd(($data['counties']));

            return view('backend.towns.edit', $data);
        }
        else
        {
            return redirect()->back()->with('error', 'Ooops! Town not found');
        }
    }

    /**
     * Update Town in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validated_data = $request->validate([
            'town_name' => 'required',
            'town_country' => 'required',
            'town_county' => 'required',
        ]);
        //dd($validated_data);
        $town = Town::find($id);

        $town->update([
            'town_name' => $request->town_name,
            'town_country' => $request->town_country,
            'town_county' => $request->town_county
        ]);

        return redirect()->back()->with('success','Town details successfully Updated');
    }

    /**
     * Remove Town from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy ($id)
    {
        Town::destroy($id);

        return redirect()->back()->with('success','Town successfully removed from the system');
    }
}
