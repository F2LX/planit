<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\AdminController;

// TO BE ADDED: Middleware Grouping

Route::get('/profileUser', function() {
    return view('user.profileUser');
});
Route::get('/home', function() {
    return view('user.home');
});
Route::get('/orderSummary', function() {
    return view('user.orderSummary');
});

Route::get('/orderSummaryView', function() {
    return view('user.orderSummaryView');
});
Route::get('/chatUser', function() {
    return view('user.chatUser');
});

// Route::get('/contoh2', function() {
//     return view('home');
// });



Route::get('/dashboard', [AdminController::class, 'index']);

Route::get('/', [AuthController::class, 'index']);

Route::get('/login', [AuthController::class, 'login']);

Route::get('/register', [AuthController::class, 'register']);

Route::post('/register/post', [AuthController::class, 'store']);
Route::post('/login/post', [AuthController::class, 'validate']);


// TESTING PURPOSES
Route::get('/chat',[ChatController::class,'index']);
Route::get('/get-messages',[ChatController::class,'show']);
Route::post('/send-messages',[ChatController::class,'store']);


