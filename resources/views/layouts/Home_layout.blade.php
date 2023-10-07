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
    <div class="col-md-7 login">
        <ul>
            @guest
            <li>
                <button class="login-btn">
                    <a class="login-btn" href="{{route('logging')}}">
                         ورود به سامانه
                        <img src="/uni-storage/Login.png" alt="login" class="login-icon" >
                    </a>
                </button>
            </li>
            @endguest
            @auth
            <form action="{{route('logout')}}" method="post">
                @csrf
                <li>
                    <button class="logout_btn">خروج از حساب کاربری</button>
                </li>
            </form>
                <li>
                    <a class="navbar_link" href="{{route('Manage')}}">پنل مدیریت</a>
                </li>
            @endauth
            @auth
                <li>
                    <a class="navbar_link" href="{{route('List_course')}}">انتخاب واحد</a>
                </li>
            @endauth
        </ul>
    </div>
    <div class="col-md-5">
        <ul>
            <li>
                <a class="navbar_link" href="{{route('home')}}">سایت آموزش</a>
            </li>
            <li>
                <a class="navbar_link" href="{{route('home')}}">اطلاعیه ها</a>
            </li>
            <li>
                <a class="navbar_link" href="{{route('home')}}">آرشیو اخبار</a>
            </li>
            <li>
                <a class="navbar_link" href="{{route('home')}}">آموزش مجازی</a>
            </li>
            <li>
                <a class="navbar_link" href="{{route('home')}}">صفحه اصلی</a>
            </li>
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
