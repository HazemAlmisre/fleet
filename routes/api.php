<?php

use App\Http\Controllers\Auth\GetSubscriptionPolicyController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\UserLoginController;
use App\Http\Controllers\Auth\UserRegisterController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:api');

