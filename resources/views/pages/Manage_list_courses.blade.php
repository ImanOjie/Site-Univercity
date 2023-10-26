@extends('layouts.Manage_layout',['page_title'=>$page_title])
@section('manage')

    <div class="manage-body">
        <table class="table table-striped">
            <thead>
            <tr>
                <th>زمان آخرین آپدیت</th>
                <th>زمان ثبت</th>
                <th>تعداد واحد</th>
                <th>نام درس</th>
                <th>id</th>
                <th>ردیف</th>
            </tr>
            </thead>
            <tbody>
            @foreach($courses as $item)
                <tr>
                    <th scope="row">{{$item -> updated_at}}</th>
                    <th scope="row">{{$item -> created_at}}</th>
                    <td>{{$item -> unit}}</td>
                    <td>{{$item -> name}}</td>
                    <td>{{$item -> id}}</td>
                    <td>{{$loop->index+1}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

    <div class="paginate">
        {{ $courses->links() }}
    </div>


@endsection
