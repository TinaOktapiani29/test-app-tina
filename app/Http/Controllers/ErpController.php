<?php

namespace App\Http\Controllers;

use App\Models\ERPsystem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ErpController extends Controller
{
    public function index()
    {
        // $companies = ERPsystem::orderBy('id','desc')->paginate(5);
        return view('auth.login-view');
    }

    public function login_action(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $request->session()->regenerate();
            return redirect()->intended('/');
        }

        return back()->withErrors([
            'password' => 'Wrong email or password',
        ]);
    }
}
