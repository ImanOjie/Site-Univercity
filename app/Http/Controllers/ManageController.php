<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManageController extends Controller
{
    public function Manage_list_users(){
        /*return view('/pages/Manage_list_users');*/
        $page_title='لیست کاربران';
        return view('/pages/Manage_list_users',compact('page_title'));
    }

}
