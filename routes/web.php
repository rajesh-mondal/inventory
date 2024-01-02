<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardController;
use App\Http\Middleware\TokenVerificationMiddleware;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
 */

// Web API Routes
Route::post( '/user-registration', [UserController::class, 'UserRegistration'] );
Route::post( '/user-login', [UserController::class, 'UserLogin'] );
Route::post( '/send-otp', [UserController::class, 'SendOtpCode'] );
Route::post( '/verify-otp', [UserController::class, 'VerifyOTP'] );
Route::post( '/reset-password', [UserController::class, 'ResetPassword'] )->middleware( [TokenVerificationMiddleware::class] );

// Page routes
Route::get( '/userLogin', [UserController::class, 'LoginPage'] );
Route::get( '/userRegistration', [UserController::class, 'RegistrationPage'] );
Route::get( '/sendOtp', [UserController::class, 'SendOtpPage'] );
Route::get( '/verifyOtp', [UserController::class, 'VerifyOTPPage'] );
Route::get( '/resetPassword', [UserController::class, 'ResetPasswordPage'] );
Route::get( '/dashboard', [DashboardController::class, 'DashboardPage'] );