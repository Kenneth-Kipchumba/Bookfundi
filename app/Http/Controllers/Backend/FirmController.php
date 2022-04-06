<?php

namespace App\Http\Controllers\Backend;

use App\Helpers\SelectFormData;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Firm;

class FirmController extends Controller
{
    /**
     * Display a listing of the firm.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['firms'] = Firm::paginate(10);

        return view('backend.firms.index', $data);
    }

    /**
     * Show the form for creating a new firm.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['countries'] = SelectFormData::country();
        $data['counties'] = SelectFormData::county();
        $data['towns'] = SelectFormData::town();

        return view('backend.firms.create', $data);
    }

    /**
     * Store a newly created firm in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request);
        $validated_data = $request->validate([
            'firm_name' => 'required',
            'firm_country' => 'required',
            'firm_county' => 'required',
            'firm_town' => 'required',
            'firm_address' => '',
        ]);
        //dd($validated_data);

        if ($validated_data)
        {
            Firm::create([
                'firm_name' => $request->firm_name,
                'firm_country' => $request->firm_country,
                'firm_county' => $request->firm_county,
                'firm_town' => $request->firm_town,
                'firm_address' => $request->firm_address,
            ]);

            return redirect()->back()->with('success','Firm successfully added to the system');
        }
    }

    /**
     * Display the specified firm.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(int $id)
    {
        $data['firm'] = Firm::find($id);

        if ($data['firm'])
        {

            return view('backend.firms.show', $data);
        }
        else
        {
            return redirect()->back()->with('error', 'Ooops! Firm not found');
        }
    }

    /**
     * Show the form for editing the specified firm.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit(int $id)
    {
        $data['firm'] = Firm::find($id);

        if ($data['firm'])
        {
            $data['countries'] = SelectFormData::country();
            $data['counties'] = SelectFormData::county();
            $data['towns'] = SelectFormData::town();

            return view('backend.firms.edit', $data);
        }
        else
        {
            return redirect()->back()->with('error', 'Ooops! Firm not found');
        }
    }

    /**
     * Update the specified firm in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Firm  $firm
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, int $id)
    {
        $validated_data = $request->validate([
            'firm_name' => 'required',
            'firm_country' => 'required',
            'firm_county' => 'required',
            'firm_town' => 'required',
            'firm_address' => '',
        ]);
        //dd($validated_data);
        $firm = Firm::find($id);

        $firm->update([
            'firm_name' => $request->firm_name,
            'firm_country' => $request->firm_country,
            'firm_county' => $request->firm_county,
            'firm_town' => $request->firm_town,
            'firm_address' => $request->firm_address,
        ]);

        return redirect()->back()->with('success','Firm details successfully Updated');
    }

    /**
     * Remove the specified firm from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $id)
    {
        $data['firm'] = Firm::find($id);

        if ($data['firm'])
        {
            Firm::destroy($id);

            return redirect()->back()->with('success','Firm successfully removed from the system');
        }
        else
        {
            return redirect()->back()->with('error', 'Ooops! Firm not found');
        }
    }
}
