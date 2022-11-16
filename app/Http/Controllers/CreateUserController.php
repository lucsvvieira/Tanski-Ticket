<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class CreateUserController extends Controller
{
    
    public function create() {
        return view('users.create_user');
    }

    public function store(Request $request)
    {
        $data = $request->all();

        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users,email',
            'cnpj' => 'required|digits:14',
            'business_name' => 'required',
            'password' => 'required|min:6'
        ]);

        if ($validator->fails()) {
            return back()
                ->withErrors($validator)
                ->withInput();
        }

        $client = Client::where('cnpj', $request->get('cnpj'))->first();

        if($client) {
            $data['client_id'] = $client->id;
        } else {
            $client = Client::create($request->all());
            $data['client_id'] = $client->id;
        }

        // dd($data);

        $password = Hash::make($request->get('password'));

        $data['password'] = $password;        

        User::create($data);

        return redirect()->route('login.page');
    }
}
