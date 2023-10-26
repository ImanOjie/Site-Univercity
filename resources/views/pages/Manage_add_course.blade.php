@extends('layouts.Manage_layout',['page_title'=>$page_title])
@section('manage')

    <div class="row form">
        <div class="col-md-7"></div>
        <div class="col-md-4">


            <form action="{{route('Manage_save_add_course')}}" method="post">
                @csrf
                @if($errors->has('name'))
                    {!! $errors->first('name') !!}
                @endif
                <input class="text" type="text" name="name" placeholder="نام درس" required="">
                @if($errors->has('unit'))
                    {!! $errors->first('unit') !!}
                @endif
                <input class="text" type="number" name="unit" placeholder="تعداد واحد" required="">

                <input class="submit-btn" type="submit" value="ایجاد درس">
            </form>
            <div class="success">
                @if(session()->has('save_ok_shod'))
                    {{session()->get('save_ok_shod')}}
                @endif
            </div>

        </div>
        <div class="col-md-1"></div>
    </div>


@endsection
