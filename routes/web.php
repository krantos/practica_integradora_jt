<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Authentication\AuthController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\OfferController;

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

Route::resource('/offers', OfferController::class)->middleware('auth');
Route::resource('/companies', CompanyController::class)->middleware('auth');
Route::delete('/offers/{id}/unlink', [OfferController::class, 'unlikeCompany']);

Route::get('/', function () {
    return view('landing');
});
