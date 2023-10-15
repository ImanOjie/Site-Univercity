<?php

namespace App\Http\Controllers;

use App\Models\User;
use http\Env\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function login_user(){
        $page_title='سامانه دانشجویی';
        return view('/pages/Login_user',compact('page_title'));
    }

    public function finishlogin_user(Request $request){
        $user=User::where('name',$request->get('name'))->first();
        $pass=$request->get('password');
        if (Hash::check($pass,$user->password)) {
            Auth::login($user);
            return redirect()->route('List_course');
        }else {
            return ('نام کاربری یا رمز اشتباه است');
        }
    }

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


    public function registering(){
        $page_title='ثبت نام';
        return view('/pages/Registering',compact('page_title'));
    }

    public function finish_registering(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'family' => 'required',
            'password' => 'required|min:4',
        ]);

        $name = $request->input('name');
        $family = $request->input('family');
        $users = User::where('name',$request->get('name'))-> where('family',$request->get('family'))->first();

        if ((!$users == $name) && (!$users == $family) ) {
            $users = new User();
            $users->name=$request->get('name');
            $users->family=$request->get('family');
            $users->password=Hash::make($request->get('password'));
            $users->save();
            return redirect()->route('home')/*->with(['save_ok_shod'=>'ثبت با موفقیت انجام شد'])*/;
        }else{
            return ('شما قبلا ثبت نام کردید');
        }

    }


    public function List_course(){
        $course=Course::all();
        $page_title='صفحه انتخاب واحد';
        return view('/pages/List_course',compact('page_title','course'));
    }
    public function Manage(){
        $page_title='بخش مدیریت';
        return view('/pages/Manage',compact('page_title'));
    }

}
