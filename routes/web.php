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
//home
Route::get('/',[App\Http\Controllers\HomeController::class,'home'])->name('home');
//
Route::middleware('auth')->get('/List_course',[App\Http\Controllers\CourseController::class,'List_course'])->name('List_course');
Route::middleware('auth')->get('/Manage',[App\Http\Controllers\HomeController::class,'Manage'])->name('Manage');

//login
Route::get('/logging',[App\Http\Controllers\UserController::class,'logging'])->name('logging');
Route::post('/finishlogging',[App\Http\Controllers\UserController::class,'finishlogging'])->name('finishlogging');
//register
Route::get('/registering',[App\Http\Controllers\UserController::class,'registering'])->name('registering');
Route::post('/finish_registering',[App\Http\Controllers\UserController::class,'finish_registering'])->name('finish_registering');

Route::get('/get_course/{id}',[App\Http\Controllers\CourseController::class,'get_course'])->name('get_course');
Route::get('/delete_getting_course/{id}',[App\Http\Controllers\CourseController::class,'delete_getting_course'])->name('delete_getting_course');

Route::get('/fullscreen_schedule_table',[App\Http\Controllers\HomeController::class,'fullscreen_schedule_table'])->name('fullscreen_schedule_table');












Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('pages.New_login');
    })->name('dashboard');
});
