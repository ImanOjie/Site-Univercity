<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ManageController extends Controller
{
    /*public function __construct()
    {
        $this->middleware('auth');
    }*/

    public function login_manager(){
        $page_title='سامانه پرسنلی';
        return view('/pages/Login_manage',compact('page_title'));
    }

    public function finishlogin_manager(Request $request){
        $user=User::where('name',$request->get('name'))->first();
        $pass=$request->get('password');
        if (Hash::check($pass,$user->password)) {
            Auth::login($user);
            return redirect()->route('Manage');
        }else {
            return ('نام کاربری یا رمز اشتباه است');
        }
    }

    public function Manage(){
        $page_title='بخش مدیریت';
        return view('/pages/Manage',compact('page_title'));
    }

    public function Manage_list_users(){
        $page_title='لیست کاربران';
        $users = User::all();
        return view('/pages/Manage_list_users',compact('users' , 'page_title'));
    }




}
