@extends('layouts.Manage_layout',['page_title'=>$page_title])
@section('manage')

    <div class="add-role">
        <form action="{{route('Manage_save_permission_user')}}" method="post">
            @csrf
            <input class="text" type="text" name="name" placeholder="نام" required="">
            <br>
            <input class="text" type="text" name="family" placeholder="نام خانوادگی" required="">
            <br>
            <input class="text" type="text" name="permission" placeholder="نام درجه" required="">
            <br>
            <input class="sign" type="submit" value="ثبت">
        </form>
        <div class="success">
            @if(session()->has('user_change_shod'))
                {{session()->get('user_change_shod')}}
            @endif
        </div>
    </div>



@endsection
