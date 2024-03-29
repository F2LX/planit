<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("home");
    }

    public function login()
    {
        return view("login");
    }

    public function register()
    {
        return view("register");
    }

    public function validate(Request $request)
{
    $request->validate([
        'email' => 'required|email',
        'password' => 'required'
    ]);
    if (auth()->attempt($request->only('email', 'password'))) {

        if (auth()->user()->role==="user") {
            return redirect()->intended('/user');
        }
        

        // TO BE ADDED: Middleware validation if auth()->user()->role === 'admin','user','vendor'
    } else {
        return redirect()->back()->withErrors(['email' => 'Email atau password tidak valid.']);
    }
}

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $rules =
            [
                'name' => 'required',
                'phonenumber' => 'required',
                'email' => 'required|email',
                'password' => 'required'
            ];
        $data=$request->validate($rules);
        
        // Set role to User by Default
        $data['role'] = "user";

        // Encrypt using BCRYPT
        $data['password']=bcrypt($data['password']);
        User::create($data); 
        
        return redirect()->intended("/login");
    }
}
