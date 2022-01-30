<?php

use App\Http\Controllers\Api\Auth\AuthController;
use App\Http\Controllers\Api\Auth\ForgotPasswordController;
use App\Http\Controllers\Api\Auth\ResetPasswordController;
use App\Http\Controllers\Api\Management\ManagementTeacherController;
use App\Http\Controllers\Api\Student\EditProfileController;
use App\Http\Controllers\Api\Student\StudentController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('v1')->group(function(){
    Route::post('/login',[AuthController::class,'login']);
    Route::post('/registration',[AuthController::class,'registration']);
    Route::post('/forgot',[ForgotPasswordController::class,'forgotPassword']);
    Route::post('/reset',[ResetPasswordController::class,'passwordReset']);

    Route::post('/management/add/teacher',[ManagementTeacherController::class,'addteacher']);
    
    Route::get('/login',function(){
        return response()->json([
            'message' => 'Unauthenticated'
         ],401);
    })->name('login');

    Route::middleware('auth:api','verified')->group(function(){
        Route::post('/logout',[AuthController::class,'logout']);
    });

    //FOR MANAGEMENT
    Route::middleware('auth:api','verified','authmanagement')->group(function(){
        /* Route::post('/management/add/teacher',[ManagementTeacherController::class,'addteacher']); */
    });

    //FOR TEACHER
    Route::middleware('auth:api','verified','authteacher')->group(function(){

    });

    //FOR STUDENT
    Route::middleware('auth:api','verified','authstudent')->group(function(){
        Route::put('/student/profile/update',[EditProfileController::class,'update']);
        Route::get('/student/profile/{id}',[StudentController::class,'getStudent']);
    });
});

