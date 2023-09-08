<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/',[App\Http\Controllers\HomeController::class,'Home'])->name('Home');
Route::middleware('auth')->get('/List_course',[App\Http\Controllers\CourseController::class,'List_course'])->name('List_course');
Route::middleware('auth')->get('/Manage',[App\Http\Controllers\HomeController::class,'Manage'])->name('Manage');

//login or register
Route::get('/New_Login',[App\Http\Controllers\HomeController::class,'New_Login'])->name('New_Login');
Route::post('/finish_login',[App\Http\Controllers\UserController::class,'finish_login'])->name('finish_login');
Route::post('/register',[App\Http\Controllers\UserController::class,'register'])->name('register');


Route::get('/get_course/{id}',[App\Http\Controllers\CourseController::class,'get_course'])->name('get_course');
Route::get('/delete_getting_course/{id}',[App\Http\Controllers\CourseController::class,'delete_getting_course'])->name('delete_getting_course');












Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('Pages.New_login');
    })->name('dashboard');
});
