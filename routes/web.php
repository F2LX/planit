<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdsController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VendorController;

// TO BE ADDED: Middleware Grouping

// Vendor Routes Removed to VendorController

Route::get('/list', function () {
    return view('list');
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

// User
Route::get('/user', [UserController::class, 'index']);
Route::post('/user/profile/post', [UserController::class, 'updateprofile']);
Route::get('/user/profile', [UserController::class, 'profile']);
Route::get('/user/order', [UserController::class, 'ordersum']);
Route::get('/user/profile', [UserController::class, 'profile']);
Route::get('/user/support', [UserController::class, 'contactsupport']);

// Vendor
Route::get('/vendor/profile', [VendorController::class, 'profile'])->middleware('vendor');
Route::get('/vendor', [VendorController::class, 'index'])->middleware('vendor');
Route::get('/vendor/ordersummary', [VendorController::class, 'ordersummary'])->middleware('vendor');
Route::get('/vendor/support', [VendorController::class, 'contactsupport'])->middleware('vendor');
Route::get('/vendor/create-ads', [VendorController::class, 'ads'])->middleware('vendor');
Route::get('/vendor/ads-list', [VendorController::class, 'adslist'])->middleware('vendor');
Route::get('/vendor/create', [VendorController::class, 'details'])->middleware('vendor');
Route::post('/vendor/create/post', [VendorController::class, 'store']);
Route::get('/vendor/update', [VendorController::class, 'idxupdate']);
Route::get('/details/{id}', [VendorController::class, 'details'])->middleware('vendor');
Route::put('/vendor/update/put', [VendorController::class, 'updateVendor']);

// Vendor: Ads
Route::post('/vendor/ads/add', [AdsController::class, 'store']);
Route::put('/vendor/ads/update/{id}', [AdsController::class, 'update']);
Route::delete('/vendor/ads/delete/{id}', [AdsController::class, 'destory']);


// Admin
Route::get('/admin', [AdminController::class, 'index'])->middleware('admin');
Route::get('/admin/order', [AdminController::class, 'order'])->middleware('admin');
Route::get('/admin/category', [AdminController::class, 'category'])->middleware('admin');
Route::get('/admin/advertisement', [AdminController::class, 'advertisement'])->middleware('admin');
Route::get('/admin/profile', [AdminController::class, 'profile'])->middleware('admin');
Route::get('/admin/support-desk', [AdminController::class, 'supportdesk'])->middleware('admin');

Route::get('/', [AuthController::class, 'index']);

Route::get('/login', [AuthController::class, 'login']);
Route::get('/logout',[AuthController::class,'logout']);
Route::get('/register', [AuthController::class, 'register']);

Route::post('/register/create', [AuthController::class, 'store']);
Route::post('/login/validate', [AuthController::class, 'validate']);


// TESTING PURPOSES
Route::get('/chat',[ChatController::class,'index']);
Route::get('/get-messages',[ChatController::class,'show']);
Route::post('/send-messages',[ChatController::class,'store']);


