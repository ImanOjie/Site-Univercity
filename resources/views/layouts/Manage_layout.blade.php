<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('/css/bootstrap.rtl.min.css')}}">
    <link rel="stylesheet" href="{{asset('/css/Manage.css')}}">

    <title>{{$page_title}}</title>
</head>
<body>
<p>{{auth()->user()->name}}</p>
<p>{{auth()->user()->family}}</p>




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
    <div id="dropdown" class="ddmenu drop2">
        تنظیمات دروس
        <ul>
            <li><a href="#">لیست دروس</a></li>
            <li><a href="#">افزودن درس</a></li>
            <li><a href="#">حذف درس</a></li>
            <li><a href="#">تغییر اطلاعات درس</a></li>
        </ul>
    </div>
</div>







<div>
    @yield('manage')
</div>






</body>
<script src="{{asset('/js/jquery.min.js')}}"></script>
<script src="{{asset('/js/propper.js')}}"></script>
<script src="{{asset('/js/bootstrap.min.js')}}"></script>
<script src="{{asset('/js/Manage.js')}}"></script>

</html>
