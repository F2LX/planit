<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("admin.home");
    }

    public function order()
    {
        return view("admin.ordersummary");
    }

    public function category()
    {
        return view("admin.categorypage");
    }


    public function advertisement()
    {
        return view("admin.list-advertisement");
    }

    public function profile()
    {
        $profile=auth()->user();
        return view('admin.profile',compact('profile'));
    }
    public function supportdesk()
    {
        return view("admin.home");
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
