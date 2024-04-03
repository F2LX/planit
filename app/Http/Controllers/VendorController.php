<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class VendorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('vendor.home');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function contactsupport()
    {
        return view('vendor.contactsupport');
    }

    public function profile()
    {
        $profile=auth()->user();
        return view('vendor.profile',compact('profile'));
    }

    public function ads()
    {
        return view('vendor.advertisement');
    }

    public function ordersummary()
    {
        return view('vendor.ordersummary');
    }


    public function details()
    {
        return view('vendor.create');
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        // This will update vendor account
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
