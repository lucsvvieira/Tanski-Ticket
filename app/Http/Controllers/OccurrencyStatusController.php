<?php

namespace App\Http\Controllers;

use App\Models\OccurrencyStatus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class OccurrencyStatusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $occurrences = OccurrencyStatus::paginate(50);
        return view('occurrency_status.index', ['occurrences' => $occurrences]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $occurrences = OccurrencyStatus::all();
        
        return view('occurrency_status.create', ['occurrences' => $occurrences]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $validator = Validator::make($request->all(), [
            'occurrency_status' => ''
        ]);

        if ($validator->fails()) {
            return back()
                        ->withErrors($validator)
                        ->withInput();
        }

        OccurrencyStatus::create($data);

        return redirect()->route('occurrency_status.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $occurrences = OccurrencyStatus::find($id);

        return view('occurrency_status.show', ['occurrences' => $occurrences]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $occurrences = OccurrencyStatus::findOrFail($id);

        return view('occurrency_status.edit', ['occurrences' => $occurrences]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $occurrences = OccurrencyStatus::findOrFail($id)->update($request->all());

        return redirect()->route('occurrency_status.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        OccurrencyStatus::findOrFail($id)->delete();

        return redirect()->route('occurrency_status.index');
    }
}
