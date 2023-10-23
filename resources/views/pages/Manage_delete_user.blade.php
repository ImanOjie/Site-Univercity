@extends('layouts.Manage_layout',['page_title'=>$page_title])
@section('manage')
<div class="form">

    <form action="{{route('Manage_save_delete_user')}}" method="post">
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
        <input class="submit-btn" type="submit" value="حذف کاربر">
    </form>
    @if(session()->has('save_ok_shod'))
        {{session()->get('save_ok_shod')}}
    @endif
</div>


@endsection
