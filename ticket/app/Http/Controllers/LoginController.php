<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            return redirect()->route('home.index');
        } else {
            return view('login.lpage');
        }
    }
    public function check(Request $request)
    {
        $credentials = $request->validate([
            'semail' => ['required', 'email'],
            'password' => 'required',
        ]);
        if (Auth::attempt($credentials)) {
            return redirect()->route('home.index');
        } else {
            return redirect()->back()->with('error', 'Invalid login')->withInput();
        }
    }
    public function notcheck()
    {
        http_response_code(403);
        exit;
    }

    public function password1()
    {
        if (Auth::check()) {
            return redirect()->route('home.index');
        } else {
            return view('login.password1');
        }
    }
    public function password2()
    {
        return view('login.password2');
    }
}
