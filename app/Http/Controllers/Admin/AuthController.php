<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminLoginRequest;

class AuthController extends Controller
{
    public function login()
    {
        return view('adminpanel.login');
    }   
    public function authenticate(AdminLoginRequest $request)
    {
        if (auth()->attempt($request->validated())) {
            return to_route('dashboard');
        }

        return back()->with('error', 'Login yoki parol xato!');
    }
 
    public function logout()
    {
        auth()->logout();

        return to_route('login');
    }
}
