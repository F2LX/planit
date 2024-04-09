<?php

namespace App\Http\Controllers;

use App\Models\Ads;
use Illuminate\Http\Request;
use App\Models\Vendor;

class AdsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $userId = auth()->user()->id;
        $data=$request->validate([
            'title' => 'required',
            'description' => 'required',
            'category' => 'required',
            'price' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif'
        ]);
        $vendor=Vendor::where('userid',$userId)->first();
        // dd($vendor);

        if (!$vendor) {
            return redirect('/vendor/create');
        }
        $data['idvendor']=$vendor['id'];

        $data['vendorname']=$vendor['name'];
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
            $data['image']= $imagePath;
        }
        
        Ads::create($data);
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Ads $ads)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Ads $ads)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ads $ads)
    {
        //
    }
}
