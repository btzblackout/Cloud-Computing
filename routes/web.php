<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\CustomDBController;


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

Route::get('login', [CustomAuthController::class, 'index'])->name('login'); //landing page.
Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom');
Route::get('registration', [CustomAuthController::class, 'registration'])->name('register-user');
Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom');
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');
Route::get('home', [CustomDBController::class, 'index'])->name('load.home');
Route::post('home/action', [CustomDBController::class, 'action'])->name('tabledit.action');
Route::get('addsong', [CustomDBController::class, 'AddSong'])->name('addsong');
Route::post('custom-addsong', [CustomDBController::class, 'customAddSong'])->name('addsong.custom');
