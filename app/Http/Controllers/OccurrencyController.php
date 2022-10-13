<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Department;
use App\Models\Occurrency;
use App\Models\OccurrencyRecord;
use App\Models\OccurrencyStatus;
use App\Models\Priority;
use App\Models\Sla;
use App\Models\User;
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
        $ocurrency_record = OccurrencyRecord::all();
        $category = Category::all();
        $department = Department::all();
        $priority = Priority::all();
        $occurrency_status = OccurrencyStatus::all();
        $sla = Sla::all();
        $user = User::all();
        
        return view('occurrences.create', [
            'occurrency' => $occurrency, 
            'occurrency_record' => $ocurrency_record,
            'category' => $category,
            'department' => $department,
            'priority' => $priority,
            'occurrency_status' => $occurrency_status,
            'sla' => $sla,
            'user' => $user
        ]);
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
            'occurrency' => '',
            'attach_photos' => 'file',
            'occurrency_record_id' => '',
            'category_id' => '',
            'department_id' => '',
            'priorities_id' => '',
            'occurrency_status_id' => '',
            'sla_id' => '',
            'user_client_id' => ''
        ]);

        if ($validator->fails()) {
            return back()
                        ->withErrors($validator)
                        ->withInput();
        }

        if ($request->has('attach_photos')) {
            $path = $request['attach_photos']->store('attach_photos', 'public'); //attach_photos/NOME.jpg

            $data['attach_photos'] = $path; 
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
