@extends('layouts.Login_layout',['page_title'=>$page_title])
@section('login')

    <div class="form-structor">
        <div class="signup">
            <h2 class="form-title" id="signup">ثبت نام</h2>
            <div class="form-holder">
                @if(session()->has('save_ok_shod'))
                    {{session()->get('save_ok_shod')}}
                @endif
                <form action="{{route('register')}}" method="post">
                    @csrf
                    @if($errors->has('name'))
                        {!! $errors->first('name') !!}
                    @endif
                    <input type="text" name="name" class="input" placeholder="نام" />
                    @if($errors->has('family'))
                        {!! $errors->first('family') !!}
                    @endif
                    <input type="text" name="family" class="input" placeholder="نام خانوادگی" />
                    @if($errors->has('password'))
                        {!! $errors->first('password') !!}
                    @endif
                    <input type="text" name="password" class="input" placeholder="رمز ورود" />

                    <button class="submit-btn" role="button">ثبت</button>
                </form>
            </div>
        </div>




        <div class="login slide-up">
            <div class="center">
                <h2 class="form-title" id="login">ورود</h2>
                <form action="{{route('finish_login')}}" method="post">
                    @csrf
                    <div class="form-holder">
                        <input type="text" name="name" class="input" placeholder="نام"/>

                        <input type="password" name="password" class="input" placeholder="رمز ورود"/>
                    </div>
                    <button class="submit-btn">ورود</button>
                </form>
            </div>
        </div>
    </div>
@endsection
