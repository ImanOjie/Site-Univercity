@extends('layouts.Home_layout',['page_title'=>$page_title])
@section('home')

    <div class="row up"></div>
    <img class="logo" src="{{asset('/uni-storage/logo-azad.png')}}">
    <div class="row down"></div>
    <div class="titr">
        <span class="title">آموزشیار</span>
        <br>
        <span>
            سامانه مدیریت یکپارچه امور آموزشی دانشگاه آزاد اسلامی (آموزشیار)
        <br>
            دانشگاه آزاد اسلامی بزرگ ترین دانشگاه حضوری جهان، صرفه جویی ارزی برای کشور، بومی کردن نیروهای تخصصی
        </span>
    </div>

@endsection
