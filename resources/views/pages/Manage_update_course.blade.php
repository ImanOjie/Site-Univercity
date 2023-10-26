@extends('layouts.Manage_layout',['page_title'=>$page_title])
@section('manage')

    <div class="row form">
        <div class="col-md-4"></div>
        <div class="col-md-7">
            <form action="{{route('Manage_save_update_course')}}" method="post">
                @csrf
                @if($errors->has('exname'))
                    {!! $errors->first('name') !!}
                @endif
                <input class="text" type="text" name="exname" placeholder="نام قبلی درس" required="">
                <br>
                @if($errors->has('exunit'))
                    {!! $errors->first('exunit') !!}
                @endif
                <input class="text" type="text" name="exunit" placeholder="تعداد واحد قبلی درس" required="">
                <br>
                @if($errors->has('name'))
                    {!! $errors->first('name') !!}
                @endif
                <input class="text" type="text" name="name" placeholder="نام جدید درس" required="">
                <br>
                @if($errors->has('unit'))
                    {!! $errors->first('unit') !!}
                @endif
                <input class="text" type="text" name="unit" placeholder="تعداد واحد جدید درس" required="">
                <br>
                <input class="submit-btn" type="submit" value="ثبت تغییرات">
            </form>
            <div class="success">
                @if(session()->has('course_update_shod'))
                    {{session()->get('course_update_shod')}}
                @endif
            </div>
        </div>
        <div class="col-md-1"></div>

    </div>


@endsection
