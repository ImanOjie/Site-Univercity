<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function register(Request $request){
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
        return redirect()->route('Home')->with(['save_ok_shod'=>'ثبت با موفقیت انجام شد']);
    }
    public function finishlogin(Request $request){
        $user=User::where('name',$request->get('name'))->first();
        $pass=$request->get('password');
        if (Hash::check($pass,$user->password)) {
            Auth::login($user);
            return redirect()->route('Home');
        }



    }
}
