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




}
