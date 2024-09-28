<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Authentication\AuthController;
use App\Http\Controllers\Admin\ProfileController;

Route::get('/login', function() {
	if(Auth::check()) 
		return redirect('/profile');
	
	return view('login.login');
})->name('login');
Route::post('/login', [AuthController::class, 'authentication']);
Route::get('/logout', [AuthController::class, 'logout']);

Route::get('/clean', function() {
	return view('layout.clean');
});

Route::get('/profile', [ProfileController::class, 'profile'])->middleware('auth');

Route::get('/', function () {
    return view('landing');
});
