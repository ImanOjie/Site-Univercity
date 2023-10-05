<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('/css/bootstrap.rtl.min.css')}}">
    <link rel="stylesheet" href="{{asset('/css/Home.css')}}">
    <link rel="stylesheet" href="{{asset('/css/course_table.css')}}">
    <title>{{$page_title}}</title>
</head>
<body>

<div class="row navbar">
    <div>
        <ul>
            @auth
                <form action="{{route('logout')}}" method="post">
                    @csrf
                    <li><button class="logout_btn">خروج از حساب کاربری</button></li>
                </form>
            @endauth
            @guest
                <li><a class="navbar_link" href="{{route('New_Login')}}">ورود یا ثبت نام</a></li>
            @endguest
            <li><a class="navbar_link" href="{{route('Manage')}}">پنل مدیریت</a></li>
            <li><a class="navbar_link" href="{{route('List_course')}}">انتخاب واحد</a></li>
            <li><a class="navbar_link" href="{{route('Home')}}">صفحه اصلی</a></li>
        </ul>
    </div>
</div>






<div>
    @yield('home')
</div>






</body>
<script src="{{asset('/js/jquery.min.js')}}"></script>
<script src="{{asset('/js/propper.js')}}"></script>
<script src="{{asset('/js/bootstrap.min.js')}}"></script>
<script src="{{asset('/js/Home.js')}}"></script>
</html>
