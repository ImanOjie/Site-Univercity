<?php

namespace App\Http\Controllers;

use App\Models\User;
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
        }
    }

    public function registering(){
        $page_title='ثبت نام';
        return view('/pages/Registering',compact('page_title'));
    }

    public function finish_registering(Request $request){
        $request->validate([
            'name' => 'required',
            'family' => 'required',
            'password' => 'required',
        ]);
        $users = new User();
        $users->name=$request->get('name');
        $users->family=$request->get('family');
        $users->password=Hash::make($request->get('password'));
        $users->save();
        return redirect()->route('logging')->with(['save_ok_shod'=>'ثبت با موفقیت انجام شد']);
    }

}
