<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('css/main.css')}}">
    <script src="{{asset('js/wangEditor.js')}}"></script>
</head>
<body>
<div class="nav"><div class="title">网络办公系统</div>
<div class="left"><a href="{{url('quit')}}">退出</a></div>
</div>
<div class="sider">
<div class="gongneng">功能导航</div>
    <ul>
        <li class="firstnav"><a href="{{url('courseplan')}}">课程安排</a></li>
        <li class="firstnav"><a href="{{url('manageteacher')}}">教师管理</a></li>
        <li class="firstnav"><a href="{{url('managearticle')}}">文章管理</a></li>
        <li class="firstnav"><a href="{{url('department')}}">系部管理</a></li>
        <li class="firstnav"><a href="#">班级管理</a></li>
    </ul>
</div>
<div class="content">
    @yield('content')
</div>
</body>
</html>
