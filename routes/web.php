<?php

use Illuminate\Support\Facades\Route;

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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\LeaveController::class, 'index'])->name('home');
Route::get('/create', [App\Http\Controllers\LeaveController::class, 'create'])->name('leave.create');
Route::post('/store', [App\Http\Controllers\LeaveController::class, 'store'])->name('leave.store');
Route::get('/edit/{id}', [App\Http\Controllers\LeaveController::class, 'edit'])->name('leave.edit');
Route::put('/update/{id}', [App\Http\Controllers\LeaveController::class, 'update'])->name('leave.update');
Route::get('/show/{id}', [App\Http\Controllers\LeaveController::class, 'show'])->name('leave.show');
Route::get('/delete/{id}', [App\Http\Controllers\LeaveController::class, 'distroy'])->name('leave.delete');



