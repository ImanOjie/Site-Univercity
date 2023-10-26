@extends('layouts.Manage_layout',['page_title'=>$page_title])
@section('manage')

    <div class="row form">
        <form action="{{route('Manage_save_delete_course')}}" method="post">
            @csrf
            @if($errors->has('name'))
                {!! $errors->first('name') !!}
            @endif
            <input class="text" type="text" name="name" placeholder=" نام درس" required="">
            <br>
            <input class="submit-btn" type="submit" value="حذف درس">
        </form>
        <div class="success">
            @if(session()->has('save_ok_shod'))
                {{session()->get('save_ok_shod')}}
            @endif
        </div>
    </div>



@endsection
