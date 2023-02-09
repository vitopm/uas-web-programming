<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SavedController;
use App\Http\Controllers\LogOutController;
use App\Http\Controllers\SuccessController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UpdateRoleController;
use App\Http\Controllers\ShowProfileController;
use App\Http\Controllers\AccountMaintenanceController;
use Illuminate\Support\Facades\App;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// localization
Route::get('/', function () {
    App::setLocale('id');
    return view('index');
});

// yang bisa buat guest
Route::middleware(['guest'])->group(function(){
    Route::get('/Login',[LoginController::class, 'index'])->middleware('guest');
    Route::post('/Login',[LoginController::class, 'authenticate']);
    Route::get('/Register',[RegisterController::class, 'index'])->middleware('guest');
    Route::post('/Register',[RegisterController::class, 'store']);
});

Route::middleware(['user'])->group(function(){
    // home yang ada sayurnya
    Route::get('/Home',[HomeController::class, 'ShowProduct']);
    // logout
    Route::post('/logout',[LoginController::class, 'logout']);
    Route::get('/LogOut', [LogOutController::class, 'Index']);

    // profile
    Route::get('/Profile',[ShowProfileController::class, 'showProfile']);
    // update profile
    Route::patch('action/Profile',[ShowProfileController::class, 'updateProfile']);
    Route::get('/Saved',[SavedController::class, 'index']);

    // detail produk
    Route::get('/ProductDetail',[HomeController::class, 'ShowDetailCustomer']);
    Route::get('/ProductDetail/{Number}',[HomeController::class, 'ShowDetailCustomer']);

    // cart
    Route::get('/CartPage',[CartController::class, 'CartShow']);
    Route::post('/addToCart',[CartController::class, 'addToCart']);
    Route::delete('/deleteProduct/{id}', [CartController::class, 'DeleteProduct']);
    Route::post('/orderAll', [CartController::class, 'deleteAll']);
    Route::get('/Success',[SuccessController::class, 'index']);

    Route::middleware(['admin'])->group(function(){
        // maintain account
        Route::get('/AccountMaintenance',[AccountMaintenanceController::class, 'showProfile']);
        Route::get('action/DeleteRole/{id}',[AccountMaintenanceController::class, 'destroy']);
        Route::get('/UpdateRole/{id}', [UpdateRoleController::class, 'showRole']);
        Route::patch('action/UpdateRole/{id}',[UpdateRoleController::class, 'update']);
    });
});




