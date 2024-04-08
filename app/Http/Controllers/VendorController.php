<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ads;
use App\Models\Vendor;

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
        $vendor = Vendor::find(auth()->user()->id);
        return view('vendor.create',compact('vendor'));
    }

    public function adslist()
    {
        $vendorid = Vendor::where('userid',auth()->user()->id)->first();
        $ads = Ads::where('idvendor',$vendorid->id)->get();
        return view('vendor.adslist',compact('ads'));
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data=$request->validate([
            'name' => 'required',
            'description' => 'required',
            'img1' => 'image|mimes:jpeg,png,jpg,gif',
            'img2' => 'image|mimes:jpeg,png,jpg,gif',
            'img3' => 'image|mimes:jpeg,png,jpg,gif'
        ]);
        $data['userid']=auth()->user()->id;

        $imagePath = $request->file('img1')->store('images', 'public');
        $data['img1']= $imagePath;

        $imagePath = $request->file('img2')->store('images', 'public');
        $data['img2']= $imagePath;
        
        $imagePath = $request->file('img3')->store('images', 'public');
        $data['img3']= $imagePath;

        Vendor::create($data);
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
