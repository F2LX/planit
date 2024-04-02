<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;

// TO BE ADDED: Middleware Grouping

Route::get('/ads', function () {
    return view('vendor.advertisement');
});

Route::get('/vHome', function () {
    return view('vendor.homeVendor');
});

Route::get('/vDetails', function () {
    return view('vendor.vendorDetails');
});

// WIP Chat

Route::get('/user/chat', function () {
    return view('user.chat');
});


Route::get('/user', [UserController::class, 'index']);
Route::get('/user/profile', [UserController::class, 'profile']);
Route::get('/user/order', [UserController::class, 'ordersum']);
Route::get('/user/profile', [UserController::class, 'profile']);
Route::get('/user/support', [UserController::class, 'contactsupport']);


Route::post('/user/profile/post', [UserController::class, 'updateprofile']);


// Admin Routes WIP
Route::get('/admin', function () {
    return view('admin.home');
});

Route::get('/admin/order', function () {
    return view('admin.ordersummary');
});

Route::get('/admin/profile', function () {
// dummy
    $profile=auth()->user();
    return view('admin.profile',compact('profile'));
})->middleware('admin');

Route::get('/admin/profile', function () {
    // dummy
    $profile=auth()->user();
    return view('admin.profile',compact('profile'));
});

Route::get('/admin/advertisement', function() {
    return view('admin.list-advertisement');
});
// Route::get('/contoh2', function() {
//     return view('home');
// });

Route::get('/', [AuthController::class, 'index']);

Route::get('/login', [AuthController::class, 'login']);

Route::get('/register', [AuthController::class, 'register']);

Route::post('/register/create', [AuthController::class, 'store']);
Route::post('/login/validate', [AuthController::class, 'validate']);


// TESTING PURPOSES
Route::get('/chat',[ChatController::class,'index']);
Route::get('/get-messages',[ChatController::class,'show']);
Route::post('/send-messages',[ChatController::class,'store']);


