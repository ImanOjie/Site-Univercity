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

    <hr>

    <div class="row table-row">
        <div class="col-md-5">

        </div>
        <div class="col-md-7">
            <p class="title1-table">برنامه زمانبندی انتخاب واحد نیمسال اول سال تحصیلی 1403 - 1402</p>

            <img src="/uni-storage/line.png" alt="line" class="line">

            <p class="title2-table">برنامه زمانبندی انتخاب و احد نیمسال اول سال تحصیلی 1403 - 1402</p>
            <div>
                    <a href="{{asset('/uni-storage/schedule-table.png')}}">
                        <button class="btn-view-table">مشاهده تصویر بزرگ</button>
                    </a>
            </div>
            <div>
                    <a href="{{asset('/uni-storage/schedule-table.pdf')}}">
                        <button class="btn-download-table">برنامه زمانبندی حذف و اضافه نیمسال اول سال تحصیلی 1403 - 1402</button>
                    </a>
            </div>
        </div>
    </div>




@endsection
