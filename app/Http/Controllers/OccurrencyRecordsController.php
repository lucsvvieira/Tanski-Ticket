<?php

namespace App\Http\Controllers;

use App\Models\OccurrencyRecord;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class OccurrencyRecordsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $occurrency_records = OccurrencyRecord::paginate(2);
        return view('occurrency_records.index', ['occurrency_records' => $occurrency_records]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $occurrency_records = OccurrencyRecord::all();
        
        return view('occurrency_records.create', ['occurrency_records' => $occurrency_records]);
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
            'occurrency_records' => ''
        ]);

        if ($validator->fails()) {
            return back()
                        ->withErrors($validator)
                        ->withInput();
        }

        OccurrencyRecord::create($data);

        return redirect()->route('occurrency_records.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $occurrency_records = OccurrencyRecord::find($id);

        return view('occurrency_records.show', ['occurrency_records' => $occurrency_records]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $occurrency_records = OccurrencyRecord::findOrFail($id);

        return view('occurrency_records.edit', ['occurrency_records' => $occurrency_records]);
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
        $occurrency_records = OccurrencyRecord::findOrFail($id)->update($request->all());

        return redirect()->route('occurrency_records.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        OccurrencyRecord::findOrFail($id)->delete();

        return redirect()->route('occurrency_records.index');
    }
}
