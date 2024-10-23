<?php

use App\Http\Controllers\Auth\GetSubscriptionPolicyController;
use App\Http\Controllers\Auth\UserLoginController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\UserRegisterController;


Route::post('/register',UserRegisterController::class);
Route::post('/login',UserLoginController ::class);
Route::get('/Policy',GetSubscriptionPolicyController::class);

