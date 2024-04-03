<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VendorController;

// Temporary Add Storage to Routes
use Illuminate\Support\Facades\Storage;

// TO BE ADDED: Middleware Grouping

Route::post('/vendor/ads/add', [VendorController::class, 'store']);
//Nper

Route::get('/ads', function () {
    return view('vendor.advertisement');
});

Route::get('/vContact', function () {
    return view('vendor.vendorcontactsupport');
});

Route::get('/addDetails', function () {
    return view('vendor.addDetails');
});

Route::get('/vHome', function () {
    return view('vendor.homeVendor');
});

Route::get('/vProfile', function () {
    $profile=auth()->user();
    return view('vendor.profileVendor',compact('profile'));
});

Route::get('/vDetails', function () {
    return view('vendor.vendorDetails');
});

// WIP Chat

Route::get('/user/chat', function () {
    return view('user.chat');
});

//jess
Route::get('/user/add-order', function () {
    return view('user.order');
});
Route::get('/user/pay', function () {
    return view('user.pay');
});
Route::get('/vPostSchedule', function () {
    return view('vendor.posting-schedule');
});
Route::get('/vUpdateSchedule', function () {
    return view('vendor.update-schedule');
});
Route::get('/vManagementSchedule', function () {
    return view('vendor.management-schedule');
});


Route::get('/user', [UserController::class, 'index']);
Route::post('/user/profile/post', [UserController::class, 'updateprofile']);
Route::get('/user/profile', [UserController::class, 'profile']);
Route::get('/user/order', [UserController::class, 'ordersum']);
Route::get('/user/profile', [UserController::class, 'profile']);
Route::get('/user/support', [UserController::class, 'contactsupport']);
// Route::get('/user/add-order', [UserController::class, 'order']);


// Admin Routes WIP
Route::get('/admin', function () {
    return view('admin.home');
});

Route::get('/admin/order', function () {
    return view('admin.ordersummary');
});

Route::get('/admin/category', function () {
    return view('admin.categorypage');
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
Route::group(['middleware' => 'web'], function () {
    Route::get('/logout',[AuthController::class,'logout']);
});
Route::get('/register', [AuthController::class, 'register']);

Route::post('/register/create', [AuthController::class, 'store']);
Route::post('/login/validate', [AuthController::class, 'validate']);


// TESTING PURPOSES
Route::get('/chat',[ChatController::class,'index']);
Route::get('/get-messages',[ChatController::class,'show']);
Route::post('/send-messages',[ChatController::class,'store']);


