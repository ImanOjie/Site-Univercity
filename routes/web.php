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
Route::middleware('auth')->get('/List_course',[App\Http\Controllers\CourseController::class,'List_course'])->name('List_course');
Route::get('/Manage',[App\Http\Controllers\UserController::class,'Manage'])->name('Manage');

//register
Route::get('/registering',[App\Http\Controllers\UserController::class,'registering'])->name('registering');
Route::post('/finish_registering',[App\Http\Controllers\UserController::class,'finish_registering'])->name('finish_registering');

//login user
Route::get('/login_user',[App\Http\Controllers\UserController::class,'login_user'])->name('login_user');
Route::post('/finishlogin_user',[App\Http\Controllers\UserController::class,'finishlogin_user'])->name('finishlogin_user');

//login Manage
Route::get('/login_manager',[App\Http\Controllers\ManageController::class,'login_manager'])->name('login_manager');
Route::post('/finishlogin_manager',[App\Http\Controllers\ManageController::class,'finishlogin_manager'])->name('finishlogin_manager');


Route::get('/get_course/{id}',[App\Http\Controllers\CourseController::class,'get_course'])->name('get_course');
Route::get('/delete_getting_course/{id}',[App\Http\Controllers\CourseController::class,'delete_getting_course'])->name('delete_getting_course');

//manage pages
Route::get('/Manage_list_users',[App\Http\Controllers\ManageController::class,'Manage_list_users'])->name('Manage_list_users');













Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('pages.New_login');
    })->name('dashboard');
});
