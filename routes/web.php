<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/profile', [App\Http\Controllers\profileController::class, 'profile'])->name('profile');
Route::get('/struk', [App\Http\Controllers\strukController::class, 'struk'])->name('struk');
Route::get('/edit', [App\Http\Controllers\editcontroller::class, 'edit'])->name('edit');
Route::post('/update', [App\Http\Controllers\editcontroller::class, 'update']);
Route::get('pesan/{id}', [App\Http\Controllers\PesanController::class,'index']);
 Route::post('pesan/{id}', [App\Http\Controllers\PesanController::class,'pesan']);
 Route::get('check-out', [App\Http\Controllers\PesanController::class,'check_out']);
Route::delete('check-out/{id}', [App\Http\Controllers\PesanController::class,'delete']);

// Route::get('/profile', 'profileController@profile');
