<?php

use App\Http\Controllers\Api\Auth\AuthController;
use App\Http\Controllers\Api\Auth\ForgotPasswordController;
use App\Http\Controllers\Api\Auth\ResetPasswordController;
use App\Http\Controllers\Api\Management\HomeController;
use App\Http\Controllers\Api\Management\ManagementStudentController;
use App\Http\Controllers\Api\Management\ManagementTeacherController;
use App\Http\Controllers\Api\Management\ManagementUsersController;
use App\Http\Controllers\Api\Setup\StudentClassController;
use App\Http\Controllers\Api\Student\EditProfileController;
use App\Http\Controllers\Api\Student\StudentController;
use App\Models\HomeSlider;
use App\Models\Student;
use App\Models\Teacher;
use App\Models\User;
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
    Route::get('/login',function(){
        return response()->json([
            'message' => 'Unauthenticated'
         ],401);
    })->name('login');

    
    

    Route::middleware('auth:api','verified')->group(function(){
        Route::post('/logout',[AuthController::class,'logout']);
        
        Route::get('/homeslider', function () {
            return HomeSlider::all();
            });
    });

    
    //FOR MANAGEMENT
    Route::middleware('auth:api','verified','authmanagement')->group(function(){
        //Teacher
        Route::post('/management/add/teacher',[ManagementTeacherController::class,'addteacher']);
        Route::get('/management/show/teachers', function () {
            return Teacher::all();
        });
        Route::get('/management/teacher_info/{id}',[ManagementTeacherController::class,'getTeacher']);
        Route::put('/management/edit/teacher',[ManagementTeacherController::class,'editteacher']);
        Route::delete('/management/delete_teacher_info/{id}',[ManagementTeacherController::class,'delete']);

        //User
        Route::put('/management/update_utype',[ManagementUsersController::class,'updateUtype']);
        Route::put('/management/update_user_info',[ManagementUsersController::class,'updateUser']);
        Route::get('/management/user_info/{id}',[ManagementUsersController::class,'getUser']);
        Route::delete('/management/delete_user_info/{id}',[ManagementUsersController::class,'delete']);
        Route::get('/management/users', function () {
            return User::all();
            });

        //Student
        Route::get('/management/student_info/{id}',[ManagementStudentController::class,'getStudent']);
        Route::put('/management/edit/student',[ManagementStudentController::class,'editStudent']);
        Route::delete('/management/delete_student_info/{id}',[ManagementStudentController::class,'delete']);
        Route::get('/management/show/students', function () {
            return Student::all();
            });

        //Settings
        Route::post('/management/settings',[HomeController::class,'AddSettings']);
        Route::put('/management/edit/settings',[HomeController::class,'EditSettings']);
        Route::get('/management/settings_info',[HomeController::class,'getSettings']);

        //Home Slider
        Route::post('/management/add_homeslider',[HomeController::class,'AddHomeSlider']);
        Route::get('/management/slider_info/{id}',[HomeController::class,'getSlider']);
        Route::put('/management/edit_homeslider',[HomeController::class,'EditHomeSlider']);
        Route::delete('/management/delete_home_slider/{id}',[HomeController::class,'deleteHomeSlider']);

        //Classes
        Route::post('/management/add_class',[StudentClassController::class,'addclass']);
        Route::put('/management/edit_class',[StudentClassController::class,'editclass']);
        Route::delete('/management/delete_class/{id}',[StudentClassController::class,'delete']);

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
