<?php

namespace App\Http\Controllers;

use App\Models\Occurrency;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class OccurrencyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $occurrency = Occurrency::paginate(2);
        return view('occurrences.index', ['occurrency' => $occurrency]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $occurrency = Occurrency::all();
        
        return view('occurrences.create', ['occurrency' => $occurrency]);
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
            'occurrency' => ''
        ]);

        if ($validator->fails()) {
            return back()
                        ->withErrors($validator)
                        ->withInput();
        }

        Occurrency::create($data);

        return redirect()->route('occurrences.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $occurrency = Occurrency::find($id);

        return view('occurrences.show', ['occurrency' => $occurrency]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $occurrency = Occurrency::findOrFail($id);

        return view('occurrences.edit', ['occurrency' => $occurrency]);
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
        $occurrency = Occurrency::findOrFail($id)->update($request->all());

        return redirect()->route('occurrences.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Occurrency::findOrFail($id)->delete();

        return redirect()->route('occurrences.index');
    }
}
