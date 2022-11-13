<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductMasterController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', function () {
    if (Auth::check())
    {
        return redirect()->route('product.index');
    }else{
        return view('auth.login');
    }
});

Auth::routes();

Route::resource('product',ProductController::class);
Route::resource('productMaster',ProductMasterController::class);

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
