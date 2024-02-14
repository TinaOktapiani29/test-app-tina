<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\RegisterModel;

class RegisterController extends Controller
{
    public function index()
    {
        // $companies = ERPsystem::orderBy('id','desc')->paginate(5);
        return view('pages.register');
    }

    public function create()
    {
        return view('auth.login-view');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);
        
        RegisterModel::create($request->post());

        return redirect()->route('login.index')->with('success','Company has been created successfully.');
    }
}
