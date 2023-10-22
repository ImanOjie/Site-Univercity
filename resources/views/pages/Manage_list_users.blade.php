@extends('layouts.Manage_layout',['page_title'=>$page_title])
@section('manage')
    <div class="manage-body">
        <table class="table table-striped">
            <thead>
            <tr>
                <th>زمان آخرین آپدیت</th>
                <th>زمان ثبت نام</th>
                <th>نام خانوادگی</th>
                <th>نام</th>
                <th>id</th>
                <th>ردیف</th>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $item)
            <tr>
                <th scope="row">{{$item -> updated_at}}</th>
                <th scope="row">{{$item -> created_at}}</th>
                <td>{{$item -> family}}</td>
                <td>{{$item -> name}}</td>
                <td>{{$item -> id}}</td>
                <td>{{$loop->index+1}}</td>
            </tr>
            @endforeach

            </tbody>
        </table>
    </div>
@endsection
