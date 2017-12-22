@extends('adminhome')
@section('title','课程安排')
@section('content')
<div><a href="{{url('addcourse')}}">添加</a></div>
<table class="table table-bordered table-hover">
	<tr>
	<td>课程名</td>
	<td>任课老师</td>
	<td>班级</td>
	<td>地点</td>
	<td>操作</td>
	</tr>
	@foreach($result as $r)
	<tr>
		<td>{{$r->course_name}}</td>
		<td>{{$r->course_teacher}}</td>
		<td>{{$r->course_class}}</td>
		<td>{{$r->course_address}}</td>
		<td><a href="{{url('coursedelete',[$r->id])}}">删除</a></td>
	</tr>
	@endforeach
	</table>
@endsection