<?php

namespace App\Http\Controllers;

use App\Models\OccurrencyAttachment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class OccurrencyAttachmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $occurrency_attachment = OccurrencyAttachment::paginate(2);
        return view('occurrency_attachments.index', ['occurrency_attachments' => $occurrency_attachment]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $occurrency_attachment = OccurrencyAttachment::all();
        
        return view('occurrency_attachments.create', ['occurrency_attachments' => $occurrency_attachment]);
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
            'occurrency_attachment' => ''
        ]);

        if ($validator->fails()) {
            return back()
                        ->withErrors($validator)
                        ->withInput();
        }

        OccurrencyAttachment::create($data);

        return redirect()->route('occurrency_attachments.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $occurrency_attachment = OccurrencyAttachment::find($id);

        return view('occurrency_attachments.show', ['occurrency_attachments' => $occurrency_attachment]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        OccurrencyAttachment::findOrFail($id)->delete();

        return redirect()->route('occurrency_attachments.index');
    }
}
