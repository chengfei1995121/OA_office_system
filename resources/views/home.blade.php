<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('css/main.css')}}">
</head>
<body>
<div class="nav"><div class="title">琼台网络办公系统</div>
<div class="left"><a href="#">退出</a></div>
</div>
<div class="sider">
    <ul>
        <li><a href="{{url('home')}}">首页</a></li>
        <li><a href="{{url('writeletter')}}">写信</a></li>
        <li><a href="{{url('acceptletter')}}">收件箱</a></li>
        <li><a href="{{url('sendletter')}}">发件箱</a></li>
        <li><a href="{{url('schedule')}}">日程安排</a></li>
    </ul>
</div>
<div class="content">
    @yield('content')
</div>
</body>
</html>
