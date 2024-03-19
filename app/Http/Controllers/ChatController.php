<?php

namespace App\Http\Controllers;

use App\Models\chat;
use Illuminate\Http\Request;

class ChatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Ambil pesan dari database atau sumber lain
        $messages = Chat::orderBy('created_at', 'desc')->get();

        return view('chat', compact('messages'));
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $message = new Chat();
        $message->message = $request->input('message');
        $message->receiverid = $request->input('receiverid');
        $message->senderid = $request->input('senderid');
        $message->save();
    
        // Mengembalikan pesan yang baru saja disimpan dalam respons JSON
        return response()->json([
            'status' => 'success',
            'message' => $message // Mengirim pesan yang baru saja disimpan
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(chat $chat)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, chat $chat)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(chat $chat)
    {
        //
    }
}
