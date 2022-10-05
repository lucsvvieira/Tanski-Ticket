<?php

namespace App\Http\Controllers;

use App\Models\Sla;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SlaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sla = Sla::paginate(2);
        return view('sla.index', ['sla' => $sla]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sla = Sla::all();
        
        return view('sla.create', ['sla' => $sla]);
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
            'sla' => ''
        ]);

        if ($validator->fails()) {
            return back()
                        ->withErrors($validator)
                        ->withInput();
        }

        Sla::create($data);

        return redirect()->route('sla.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $sla = Sla::find($id);

        return view('sla.show', ['sla' => $sla]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sla = Sla::findOrFail($id);

        return view('sla.edit', ['sla' => $sla]);
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
        $sla = Sla::findOrFail($id)->update($request->all());

        return redirect()->route('sla.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Sla::findOrFail($id)->delete();

        return redirect()->route('sla.index');
    }
}
