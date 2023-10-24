@extends('layouts.Manage_layout',['page_title'=>$page_title])
@section('manage')

    <div class="row form">
        <div class="col-md-7">
            <h1>مشخصات جدید را وارد کنید</h1>
            @if(session()->has('save_ok_shod'))
                {{session()->get('save_ok_shod')}}
            @endif
            <form action="{{route('Manage_save_add_user')}}" method="post">
                @csrf
                @if($errors->has('name'))
                    {!! $errors->first('name') !!}
                @endif
                <input class="text" type="text" name="name" placeholder="نام" required="">
                <br>
                @if($errors->has('family'))
                    {!! $errors->first('family') !!}
                @endif
                <input class="text" type="text" name="family" placeholder="نام خانوادگی" required="">
                <br>
                @if($errors->has('password'))
                    {!! $errors->first('password') !!}
                @endif
                <input class="text" type="password" name="password" placeholder="رمز عبور" required="">
                <br>
                <input class="submit-btn" type="submit" value="ایجاد کاربر">
            </form>
        </div>
        <div class="col-md-4">
            <h1>مشخصات قبلی را وارد کنید</h1>
            @if(session()->has('save_ok_shod'))
                {{session()->get('save_ok_shod')}}
            @endif
            <form action="{{route('Manage_save_add_user')}}" method="post">
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
                <input class="text" type="password" name="password" placeholder="رمز عبور" required="">

                <input class="submit-btn" type="submit" value="ایجاد کاربر">
            </form>
        </div>
        <div class="col-md-1"></div>
    </div>



@endsection
