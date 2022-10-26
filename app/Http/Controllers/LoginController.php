<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    
    public function login() {
        return view('welcome');
    }

    public function auth(Request $request) 
    {   
        $this->validate($request, [
            'email' => 'required',
            'password' => 'required'
        ], [
            'email.required' => 'E-mail precisa ser obrigatório',
            'password.required' => 'Senha precisa ser obrigatória'
        ]);

        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->route('clients.index');
        } else {
            return redirect()->back()->with('danger', 'E-mail e/ou Senha incorretos');
        }
    }

}
