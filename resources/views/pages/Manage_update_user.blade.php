@extends('layouts.Manage_layout',['page_title'=>$page_title])
@section('manage')

    <div class="row form">
        <div class="col-md-4"></div>
        <div class="col-md-7">
            <form action="{{route('Manage_save_update_user')}}" method="post">
                @csrf
                @if($errors->has('exname'))
                    {!! $errors->first('exname') !!}
                @endif
                <input class="text" type="text" name="oldname" placeholder="نام قبلی" required="">
                <br>
                @if($errors->has('exfamily'))
                    {!! $errors->first('exfamily') !!}
                @endif
                <input class="text" type="text" name="oldfamily" placeholder="نام خانوادگی قبلی" required="">
                <br>
                @if($errors->has('name'))
                    {!! $errors->first('name') !!}
                @endif
                <input class="text" type="text" name="name" placeholder="نام جدید" required="">
                <br>
                @if($errors->has('family'))
                    {!! $errors->first('family') !!}
                @endif
                <input class="text" type="text" name="family" placeholder="نام خانوادگی جدید" required="">
                <br>
                <input class="submit-btn" type="submit" value="ثبت تغییرات">
            </form>
            <div class="success">
                @if(session()->has('user_update_shod'))
                    {{session()->get('user_update_shod')}}
                @endif
            </div>
        </div>
        <div class="col-md-1"></div>

    </div>



@endsection
