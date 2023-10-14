<?php

namespace App\Http\Controllers;

use App\Models\User;
use http\Env\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function logging(){
        $page_title='ورود';
        return view('/pages/Logging',compact('page_title'));
    }

    public function finishlogging(Request $request){
        $user=User::where('name',$request->get('name'))->first();
        $pass=$request->get('password');
        if (Hash::check($pass,$user->password)) {
            Auth::login($user);
            return redirect()->route('home');

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

}
