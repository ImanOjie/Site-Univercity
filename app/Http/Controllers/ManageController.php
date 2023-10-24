<?php

namespace App\Http\Controllers;

use App\Models\User;
use http\Env\Response;
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
        $users = User::paginate(5);
        return view('/pages/Manage_list_users',compact('users' , 'page_title'));
    }

    public function Manage_add_user(){
        $page_title='افزودن کاربر جدید';
        return view('/pages/Manage_add_user',compact( 'page_title'));
    }
    public function Manage_save_add_user(Request $request){
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
            return redirect()->route('Manage_add_user')->with(['save_ok_shod'=>'ثبت با موفقیت انجام شد']);
        }else{
            return ('شما قبلا ثبت نام کردید');
        }

    }

    public function Manage_delete_user(){
        $page_title='حذف کاربر';
        return view('/pages/Manage_delete_user',compact( 'page_title'));
    }
    public function Manage_save_delete_user(Request $request){
        $userdb = User::where('name',$request->get('name'))-> where('family',$request->get('family'))->first();
        $name = $request->input('name');
        $family = $request->input('family');
        if($userdb->name === $name && $userdb->family === $family){
            /*return Response()->json('delete shod');*/
            $userdb->delete();
            return redirect()->route('Manage_delete_user')->with(['save_ok_shod'=>'حذف با موفقیت انجام شد']);
        }else{
            return Response()->json('oh my god nashod');
        }
    }

    public function Manage_update_user(){
        $page_title='تغییر اطلاعات کاربر';
        return view('/pages/Manage_update_user',compact( 'page_title'));
    }





}
