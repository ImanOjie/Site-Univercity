@extends('layouts.Manage_layout',['page_title'=>$page_title])
@section('manage')

    <div class="add-role">
        <input class="text" type="text" name="name" placeholder="نام" required="">
        <br>
        <input class="text" type="text" name="family" placeholder="نام خانوادگی" required="">
        <br>
        <input class="text" type="text" name="role" placeholder="نام درجه" required="">
        <br>
            <a href="">
                <button class="sign-role">
                    ثبت
                </button>
            </a>
    </div>



@endsection
