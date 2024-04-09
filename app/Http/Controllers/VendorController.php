<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ads;
use App\Models\Vendor;
use Illuminate\Support\Facades\Storage;

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
        if ($vendor) {
            return redirect('/vendor/update');
        }
        return view('vendor.create');
    }

    public function adslist()
    {
        $vendorid = Vendor::where('userid',auth()->user()->id)->first();
        if ($vendorid) {
            $ads = Ads::where('idvendor',$vendorid->id)->get();
            return view('vendor.adslist',compact('ads'));
        }
        $ads=null;
        return view('vendor.adslist',compact('ads'));
    }

    public function idxupdate()
    {
        $vendor = Vendor::find(auth()->user()->id);
        return view('vendor.update',compact('vendor'));
    }

    public function updateVendor(Request $request)
    {
        $vendor=Vendor::where('userid',auth()->user()->id)->first();
        $data = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'img1' => 'image|mimes:jpeg,png,jpg,gif',
            'img2' => 'image|mimes:jpeg,png,jpg,gif',
            'img3' => 'image|mimes:jpeg,png,jpg,gif'
        ]);

        // Menghapus gambar lama jika ada gambar baru yang diunggah
        if ($request->hasFile('img1')) {
            Storage::disk('public')->delete($vendor->img1);
        }

        if ($request->hasFile('img2')) {
            Storage::disk('public')->delete($vendor->img2);
        }

        if ($request->hasFile('img3')) {
            Storage::disk('public')->delete($vendor->img3);
        }

        // Mengunggah gambar baru dan menyimpan jalur gambar yang baru
        if ($request->hasFile('img1')) {
            $imagePath = $request->file('img1')->store('images', 'public');
            $data['img1'] = $imagePath;
        }

        if ($request->hasFile('img2')) {
            $imagePath = $request->file('img2')->store('images', 'public');
            $data['img2'] = $imagePath;
        }
        
        if ($request->hasFile('img3')) {
            $imagePath = $request->file('img3')->store('images', 'public');
            $data['img3'] = $imagePath;
        }

        // Update data vendor dengan data baru
        $vendor->update($data);

        return redirect('/vendor/profile')->with('success', 'Vendor updated successfully');
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
}
