<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
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

Route::get('/', [LoginController::class, 'index'])->name('login.index');
Route::post('/', [LoginController::class, 'verify'])->name('login.verify');

Route::group(['middleware'=>['SessionVerify']], function(){
    Route::get('/admin',[LoginController::class,'superAdminDashboard'])->name('superadmin.dashboard');
    Route::get('/logout', [LogoutController::class, 'logout']);
});



// Route::get('/customer',[LoginController::class,'customerDashboard'])->name('admin.dashboard');
// Route::get('/accountant',[LoginController::class,'accountantDashboard'])->name('author.dashboard');
// Route::get('/vendor',[LoginController::class,'vendorDashboard'])->name('user.dashboard');


