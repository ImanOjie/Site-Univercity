@extends('layouts.Login_layout',['page_title'=>$page_title])
@section('login')




    <div class="main-w3layouts wrapper">
        <h1>مشخصات خود را وارد کنید</h1>
        <div class="main-agileinfo">
            <div class="agileits-top">
                {{--@if(session()->has('save_ok_shod'))
                    {{session()->get('save_ok_shod')}}
                @endif--}}
                <form action="{{route('finish_registering')}}" method="post">
                    @csrf
                    @if($errors->has('name'))
                        {!! $errors->first('name') !!}
                    @endif
                    <input class="text" type="text" name="name" placeholder="نام" required="">
                    @if($errors->has('family'))
                        {!! $errors->first('family') !!}
                    @endif
                    <input class="text" type="text" name="family" placeholder="نام خانوادگی" required="">
                    @if($errors->has('password'))
                        {!! $errors->first('password') !!}
                    @endif
                    <input class="text w3lpass" type="password" name="password" placeholder="رمز عبور" required="">
                    <div class="wthree-text">
                        <label class="anim">
                            <span class="law">من با شرایط و قوانین موافق هستم</span>
                            <input type="checkbox" class="checkbox" required="">
                        </label>
                        <div class="clear"> </div>
                    </div>
                    <input type="submit" value="ایجاد حساب">
                </form>
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
