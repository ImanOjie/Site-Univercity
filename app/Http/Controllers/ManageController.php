<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\User;
use http\Env\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class ManageController extends Controller
{
    /*public function __construct()
    {
        $this->middleware('auth');
    }*/


            // LOGIN MANAGE //

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

            // MANAGE HOME //

    public function Manage(){
        $page_title='بخش مدیریت';
        return view('/pages/Manage',compact('page_title'));
    }

            // MANAGE LIST USERS //

    public function Manage_list_users(){
        $page_title='لیست کاربران';
        $users = User::paginate(10);
        return view('/pages/Manage_list_users',compact('users' , 'page_title'));
    }

            // MANAGE ADD USER //

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

            // MANAGE DELETE USER //

    public function Manage_delete_user(){
        $page_title='حذف کاربر';
        return view('/pages/Manage_delete_user',compact( 'page_title'));
    }
    public function Manage_save_delete_user(Request $request){
        $userdb = User::where('name',$request->get('name'))-> where('family',$request->get('family'))->first();
        $name = $request->input('name');
        $family = $request->input('family');
        if($userdb->name === $name && $userdb->family === $family){
            $userdb->delete();
            return redirect()->route('Manage_delete_user')->with(['save_ok_shod'=>'حذف با موفقیت انجام شد']);
        }else{
            return Response()->json('حذف با مشکل مواجه شده است');
        }
    }

            // MANAGE UPDATE USER //

    public function Manage_update_user(Request $request){
        $page_title='تغییر اطلاعات کاربر';
        $user = User::where('name',$request['oldname'] )->where('family', $request['oldfamily'])->first();
        return view('/pages/Manage_update_user',compact( 'page_title','user'));
    }
    public function Manage_save_update_user(Request $request){
        $request->validate([
            'oldname' => 'required',
            'oldfamily' => 'required',
            'name' => 'required',
            'family' => 'required',
        ]);
        User::where('name',$request['oldname'])->where( 'family',$request['oldfamily'])->update([
            'name'=> $request->get('name') ,
            'family'=> $request->get('family') ,
        ]);
        return redirect()->route('Manage_update_user')->with(['user_update_shod'=>'تغییرات با موفقیت انجام شد']);
    }

            // MANAGE CHANGE ROLE OF USER //

    public function Manage_role_user(){
        $page_title='تغییر درجه کاربر';
        return view('/pages/Manage_role_user',compact( 'page_title'));
    }
    public function Manage_save_role_user(Request $Request){
        $user = User::where('name',$Request['name'])->where('family',$Request['family'])->first();
        $user->syncRoles([]);
        $user->assignRole($Request['role']);
        return redirect()->route('Manage_role_user')->with(['user_change_shod'=>'تغییرات با موفقیت انجام شد']);
    }

            // MANAGE CHANGE PERMISSION OF USER //

    public function Manage_permission_user(){
        $page_title='تغییر دسترسی کاربر';
        return view('/pages/Manage_permission_user',compact( 'page_title'));
    }
    public function Manage_save_permission_user(Request $Request){
        $user = User::where('name',$Request['name'])->where('family',$Request['family'])->first();
        $user->syncPermissions([]);
        $user->givePermissionTo($Request['permission']);
        return redirect()->route('Manage_permission_user')->with(['user_change_shod'=>'تغییرات با موفقیت انجام شد']);
    }

            // MANAGE LIST COURSES //

    public function Manage_list_courses(){
        $page_title='لیست دروس';
        $courses = Course::paginate(10);
        return view('/pages/Manage_list_courses',compact( 'page_title','courses'));
    }



            // MANAGE ADD COURSE //

    public function Manage_add_course(){
        $page_title='افزودن کاربر جدید';
        return view('/pages/Manage_add_course',compact( 'page_title'));
    }
    public function Manage_save_add_course(Request $request){
        $request->validate([
            'name' => 'required',
            'unit' => 'required',
        ]);
        $name = $request['name'];
        $unit = $request['unit'];
        $course = Course::where('name',$request->get('name'))-> where('unit',$request->get('unit'))->first();
        if ((!$course == $name) && (!$course == $unit) ) {
            $course = new Course();
            $course->name=$request->get('name');
            $course->unit=$request->get('unit');
            $course->save();
            return redirect()->route('Manage_add_course')->with(['save_ok_shod'=>'ثبت درس با موفقیت انجام شد']);
        }else{
            return ('این درس قبلا ثبت شده است');
        }
    }

            // MANAGE DELETE USER //

    public function Manage_delete_course(){
        $page_title='حذف کاربر';
        return view('/pages/Manage_delete_course',compact( 'page_title'));
    }
    public function Manage_save_delete_course(Request $request){
        $coursedb = Course::where('name',$request->get('name'))->first();
        $name = $request->input('name');
        if($coursedb->name === $name){
            $coursedb->delete();
            return redirect()->route('Manage_delete_course')->with(['save_ok_shod'=>'حذف با موفقیت انجام شد']);
        }else{
            return Response()->json('حذف با مشکل مواجه شده است');
        }
    }

            // MANAGE UPDATE COURSE //

    public function Manage_update_course(Request $request){
        $page_title='تغییر اطلاعات کاربر';
        $course = Course::where('name',$request['name'] )->where('unit', $request['unit'])->first();
        return view('/pages/Manage_update_course',compact( 'page_title','course'));
    }
    public function Manage_save_update_course(Request $request){
        $request->validate([
            'name' => 'required',
            'unit' => 'required',
        ]);
        Course::where('name',$request['name'])->where( 'unit',$request['unit'])->update([
            'name'=> $request->get('name') ,
            'unit'=> $request->get('unit') ,
        ]);
        return redirect()->route('Manage_update_course')->with(['user_update_shod'=>'تغییرات با موفقیت انجام شد']);
    }


}
