<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\signupController;

Route::post('signUp',[signupController::class,'SaveInfo']);
Route::get('email/pass/{id}/{password}',[signupController::class,'Auth']);
Route::get('email/password/{mail}/{pass}',[signupController::class,'ResetPass']);