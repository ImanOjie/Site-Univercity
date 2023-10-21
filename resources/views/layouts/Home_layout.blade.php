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
    <link rel="icon" type="image/x-icon" href="/uni-storage/logo-azad.png">
    <title>{{$page_title}}</title>
</head>

<body>
<div class="row navbar">
    <div class="col-md-4 login">
        <ul>
            @guest
                <li>
                    <a class="login-btn" href="{{route('registering')}}" >
                        <button class="login-btn" type="button">
                            ثبت نام در سامانه
                            <img src="/uni-storage/Login.png" alt="login" class="login-icon" >
                        </button>
                    </a>
                </li>
                <li>
                    <div class="dropdown">
                        <button onclick="myFunction()" class="login-btn dropbtn">
                            ورود به سامانه
                            <img src="/uni-storage/Login.png" alt="login" class="login-icon" >
                        </button>
                        <div id="myDropdown" class="dropdown-content">
                            <a href="{{route('login_user')}}">ورود دانشجویان ( انتخاب واحد )</a>
                            <a href="{{route('login_manager')}}">ورود پرسنل سازمانی</a>
                        </div>
                    </div>
                </li>
            @endguest

            @auth
            <form action="{{route('logout')}}" method="post">
                @csrf
                <li>
                    <button class="logout_btn">خروج از حساب کاربری</button>
                </li>
            </form>
            @endauth
        </ul>
    </div>
    <div class="col-md-3"></div>
    <div class="col-md-5">
        <ul>
            @guest
            <li>
                <a class="navbar_link" href="#">سایت آموزش</a>
            </li>
            <li>
                <a class="navbar_link" href="#">اطلاعیه ها</a>
            </li>
            <li>
                <a class="navbar_link" href="#">آرشیو اخبار</a>
            </li>
            <li>
                <a class="navbar_link" href="#">آموزش مجازی</a>
            </li>
            @endguest
            <li>
                <a class="navbar_link" href="{{route('home')}}">صفحه اصلی</a>
            </li>
        </ul>
    </div>
</div>

<div>
    @yield('home')
</div>

<div class="row end-footer">
    <p> این سایت فقط به عنوان نمونه کار میباشد</p>
</div>




</body>
<script src="{{asset('/js/jquery.min.js')}}"></script>
<script src="{{asset('/js/propper.js')}}"></script>
<script src="{{asset('/js/bootstrap.min.js')}}"></script>
<script src="{{asset('/js/Home.js')}}"></script>
</html>
