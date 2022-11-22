<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CompanyController;
use App\Models\Company;

Route::resource('users', UserController::class);

// Route::get('/test/cartof', [UserController::class, 'cartof']);
Route::resource('/companies', CompanyController::class);

