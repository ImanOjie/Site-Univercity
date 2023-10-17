@extends('layouts.Manage_layout',['page_title'=>$page_title])
@section('manage')

    <div id="wrap">
        <h1>به پنل مدیریت خوش آمدید</h1>
        <div id="dropdown" class="ddmenu">
            تنظیمات کاربران
            <ul>
                <li><a href="#">لیست کاربران</a></li>
                <li><a href="#">افزودن کاربر</a></li>
                <li><a href="#">حذف کاربر</a></li>
                <li><a href="#">تغییر اطلاعات کاربر</a></li>
                <li><a href="#">تغییر درجه کاربر</a></li>
                <li><a href="#">تغییر دسترسی کاربر</a></li>
            </ul>
        </div>
    </div>

    <div id="wrap">
        <div id="dropdown" class="ddmenu">
            تنظیمات دروس
            <ul>
                <li><a href="#">لیست دروس</a></li>
                <li><a href="#">افزودن درس</a></li>
                <li><a href="#">حذف درس</a></li>
                <li><a href="#">تغییر اطلاعات درس</a></li>
            </ul>
        </div>
    </div>
