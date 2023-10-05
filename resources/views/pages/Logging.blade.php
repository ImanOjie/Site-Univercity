@extends('layouts.Login_layout',['page_title'=>$page_title])
@section('login')

    <div class="main-w3layouts wrapper">
        <div class="main-agileinfo">
            <div class="agileits-top">

                <form action="{{route('finishlogging')}}" method="post">

                    <input class="text" type="text" name="name" placeholder="نام" required="">

                    <input class="text" type="password" name="password" placeholder="رمز ورود" required="">
                    <div class="wthree-text">
                        <div class="clear"> </div>
                    </div>
                    <input type="submit" value="ورود">
                </form>
                <p>اگر حساب کاربری نساخته اید روی<a href="{{route('registering')}}" class="register-btn"> ثبت نام</a> کلیک کنید </p>
            </div>
        </div>

        <ul class="colorlib-bubbles">
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>
    </div>


@endsection