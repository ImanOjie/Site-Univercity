<?php

use Illuminate\Support\Facades\Route;

                // HOME //

//home
Route::get('/',[App\Http\Controllers\HomeController::class,'home'])->name('home');



                // USER //

//register user
Route::get('/registering',[App\Http\Controllers\UserController::class,'registering'])->name('registering');
Route::post('/finish_registering',[App\Http\Controllers\UserController::class,'finish_registering'])->name('finish_registering');

//login user
Route::get('/login_user',[App\Http\Controllers\UserController::class,'login_user'])->name('login_user');
Route::post('/finishlogin_user',[App\Http\Controllers\UserController::class,'finishlogin_user'])->name('finishlogin_user');

//list course user
Route::middleware('auth')->get('/List_course',[App\Http\Controllers\CourseController::class,'List_course'])->name('List_course');
Route::get('/get_course/{id}',[App\Http\Controllers\CourseController::class,'get_course'])->name('get_course');
Route::get('/delete_getting_course/{id}',[App\Http\Controllers\CourseController::class,'delete_getting_course'])->name('delete_getting_course');



                // MANAGE //

//login Manage
Route::get('/login_manager',[App\Http\Controllers\ManageController::class,'login_manager'])->name('login_manager');
Route::post('/finishlogin_manager',[App\Http\Controllers\ManageController::class,'finishlogin_manager'])->name('finishlogin_manager');

//manage pages
Route::get('/Manage',[App\Http\Controllers\ManageController::class,'Manage'])->name('Manage');

//list users
Route::get('/Manage_list_users',[App\Http\Controllers\ManageController::class,'Manage_list_users'])->name('Manage_list_users');

//add user
Route::get('/Manage_add_user',[App\Http\Controllers\ManageController::class,'Manage_add_user'])->name('Manage_add_user');
Route::post('/Manage_save_add_user',[App\Http\Controllers\ManageController::class,'Manage_save_add_user'])->name('Manage_save_add_user');

//delete user
Route::get('/Manage_delete_user',[App\Http\Controllers\ManageController::class,'Manage_delete_user'])->name('Manage_delete_user');
Route::post('/Manage_save_delete_user',[App\Http\Controllers\ManageController::class,'Manage_save_delete_user'])->name('Manage_save_delete_user');

//update user
Route::get('/Manage_update_user',[App\Http\Controllers\ManageController::class,'Manage_update_user'])->name('Manage_update_user');
Route::post('/Manage_save_update_user',[App\Http\Controllers\ManageController::class,'Manage_save_update_user'])->name('Manage_save_update_user');

//change role of user
Route::get('/Manage_role_user',[App\Http\Controllers\ManageController::class,'Manage_role_user'])->name('Manage_role_user');
Route::post('/Manage_save_role_user',[App\Http\Controllers\ManageController::class,'Manage_save_role_user'])->name('Manage_save_role_user');

//change permission of user
Route::get('/Manage_permission_user',[App\Http\Controllers\ManageController::class,'Manage_permission_user'])->name('Manage_permission_user');
Route::post('/Manage_save_permission_user',[App\Http\Controllers\ManageController::class,'Manage_save_permission_user'])->name('Manage_save_permission_user');

//list courses
Route::get('/Manage_list_courses',[App\Http\Controllers\ManageController::class,'Manage_list_courses'])->name('Manage_list_courses');












Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('pages.New_login');
    })->name('dashboard');
});
