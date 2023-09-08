<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('/css/bootstrap.rtl.min.css')}}">
    <link rel="stylesheet" href="{{asset('/css/New_login.css')}}">
    <title>{{$page_title}}</title>
</head>
<body>


<div>
    @yield('login')
</div>


</body>
<script src="{{asset('/js/jquery.min.js')}}"></script>
<script src="{{asset('/js/propper.js')}}"></script>
<script src="{{asset('/js/bootstrap.min.js')}}"></script>
<script src="{{asset('/js/New_login.js')}}"></script>
</html>
