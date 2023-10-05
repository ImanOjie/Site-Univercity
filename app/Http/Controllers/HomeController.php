<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function Home(){
        $page_title='دانشگاه آزاد';
        return view('/pages/Home',compact('page_title'));
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
    public function startlogin(){
        $page_title='ورود یا ثبت نام';
        return view('/pages/New_login',compact('page_title'));
    }


}
