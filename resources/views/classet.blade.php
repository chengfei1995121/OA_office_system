@extends('adminhome')
@section('title','班级管理')
@section('content')
<div><a href="{{url('addclass')}}">添加</a></div>
<table class="table table-bordered table-hover">
	<tr>
	<td>班级ID</td>
	<td>班级名</td>
	<td>班级人数</td>
	<td>操作</td>
	</tr>
	@foreach($result as $r)
	<tr>
		<td>{{$r->gradeid}}</td>
		<td>{{$r->classname}}</td>
		<td>{{$r->classnumber}}</td>
		<td><a href="{{url('deleteclass',[$r->id])}}">删除</a></td>
	</tr>
	@endforeach
	</table>
@endsection