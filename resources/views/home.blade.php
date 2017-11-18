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
<div class="gongneng">功能导航</div>
    <ul>
        <li class="firstnav"><a href="{{url('home')}}">首页</a></li>
        <li class="firstnav" onclick="document.getElementById('id1').style.display='block'">短信箱
        <ul class="secondnav" id="id1">
        <li><a href="{{url('writeletter')}}">写信</a></li>
        <li><a href="{{url('acceptletter')}}">收件箱</a></li>
        <li><a href="{{url('sendletter')}}">发件箱</a></li>
        </ul>
        </li>
        <li class="firstnav" onclick="document.getElementById('id2').style.display='block'">
        日程安排
        <ul class="secondnav" id="id2">
        <li><a href="{{url('schedule')}}">日程表</a></li>
        <li><a href="{{url('schedule/addwork')}}" class="add_work_link">添加事务</a></li>
        </ul>
        </li>
        <li class="firstnav" onclick="document.getElementById('id3').style.display='block'">课程表
        <ul class="secondnav" id="id3">
            <li><a href="#">添加课程</a></li>
            <li><a href="{{url('course')}}">课程表</a></li>
        </ul>
        </li>
        <li class="firstnav" onclick="document.getElementById('id4').style.display='block'">文章
        <ul class="secondnav" id="id4">
            <li><a href="#">添加文章</a></li>
            <li><a href="#">文章列表</a></li>
        </ul>
        </li>
    </ul>
</div>
<div class="content">
    @yield('content')
</div>
</body>
</html>
