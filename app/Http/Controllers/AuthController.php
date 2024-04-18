<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\Ads;


class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ads=Ads::all();
        return view("home",compact('ads'));
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
        } else if (auth()->user()->role==="vendor") {
            return redirect()->intended('/vendor');
        } else if (auth()->user()->role==="admin") {
            return redirect()->intended('/admin');
        }
        // TO BE ADDED: Middleware validation if auth()->user()->role === 'admin','user','vendor'
    } else {
        return redirect()->back()->with('error','Email atau password salah!');
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
                'email' => 'required|email|unique:users,email',
                'password' => 'required',
                'role' => 'required'
            ];
        $data=$request->validate($rules);
        
        // Encrypt using BCRYPT
        $data['password']=bcrypt($data['password']);
        User::create($data); 
        
        return redirect()->intended("/login")->with('success','Account Registered Successfully');
    }
    public function logout() {
        Auth::logout();
        return redirect('/login');
    }
}
