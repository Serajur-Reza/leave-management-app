<?php

namespace App\Http\Controllers;

// use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;

class LoginController extends Controller
{
    //
    public function index()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('dashboard')
                ->withSuccess('Signed in');
        }

        return redirect("login")->withSuccess('Login details are not valid');
    }

    public function dashboard()
    {
        if (Auth::check()) {
            return view('dashboard');
        }
    }

    public function signOut()
    {
        Session::flush();
        Auth::logout();
        return Redirect('login');
    }
}