@extends('layouts.Home_layout',['page_title'=>$page_title])
@section('home')
    <div class="row">
        <div class="col-md-5"></div>
        <div class="col-md-3">
            <table>
                <thead>
                <tr>
                    <th>عملیات</th>
                    <td>تعداد واحد</td>
                    <td>نام درس</td>
                    <td>ردیف</td>
                </tr>
                </thead>
                <tbody>
                @if(session()->has('success'))
                    {{session()->get('success')}}
                @endif
                @foreach($lists as $item)
                    <tr>
                        <td><a href="{{route('get_course',['id' => $item->id])}}"><button class="get_unit1">اخذ درس</button></a></td>
                        <td>{{$item->unit}}</td>
                        <td>{{$item->name}}</td>
                        <td>{{$loop->index+1}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <div class="col-md-3"></div>
    </div>

    <div class="row">
        <div class="col-md-5"></div>
        <div class="col-md-3">
            <h1>دروس انتخاب شده</h1>
            <table>
                <thead>
                <tr>
                    <th>عملیات</th>
                    <td>تعداد واحد</td>
                    <td>نام درس</td>
                    <td>ردیف</td>
                </tr>
                </thead>
                <tbody>
                @foreach($all_selected as $x )
                    <tr>
                        <td><a href="{{route('delete_getting_course',['id' => $x->id])}}"><button class="get_unit2">حذف درس</button></a></td>
                        <td>{{$x->Course->unit}}</td>
                        <td>{{$x->Course->name}}</td>
                        <td>{{$x->index+1}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <div class="col-md-3"></div>
    </div>
@endsection
