<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('user.home');
    }

    public function profile()
    {
        $profile=User::find(auth()->user()->id);
        return view('user.profile',compact('profile'));
    }


    public function chat()
    {
        return view('user.chat');
    }

    public function ordersum()
    {
        return view('user.ordersummary');
    }

    public function contactsupport()
    {
        return view('user.contactsupport');
    }

    public function updateprofile(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'address' => 'required',
            'phonenumber' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif' // Validation rule for the image
        ]);
    
        $userId = auth()->user()->id;
        $user = User::findOrFail($userId);
    
        // Update profile data
        $user->update([
            'name' => $data['name'],
            'email' => $data['email'],
            'address' => $data['address'],
            'phonenumber' => $data['phonenumber'],
        ]);
    
        // Handle image upload
        if ($request->hasFile('image')) {
            // Delete the previous image if it exists
            if ($user->image) {
                // Hapus gambar menggunakan jalur penyimpanan lama
                Storage::delete('public/' . $user->image);
            }
            
    
            $imagePath = $request->file('image')->store('images', 'public');
            $user->image = $imagePath; // Simpan jalur gambar di database
            $user->save();
            
        }

        $user->save();
    
        return redirect()->back()->with('success', 'Profile updated successfully.');
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
