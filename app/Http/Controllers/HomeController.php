<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
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
    public  function fullscreen_schedule_table(){
        $page_title='جدول زمانبندی';
        return view('/pages/Schedule-table',compact('page_title'));
}


}
