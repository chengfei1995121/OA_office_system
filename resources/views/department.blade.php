@extends('adminhome')
@section('title','系部管理')
@section('content')
<div><a href="{{url('add_department')}}">添加</a></div>
<table class="table table-bordered table-hover">
	<tr>
	<td>ID</td>
	<td>系部名</td>
	<td>电话</td>
	<td>操作</td>
	</tr>
	@foreach($result as $r)
	<tr>
		<td>{{$r->manageid}}</td>
		<td>{{$r->managename}}</td>
		<td>{{$r->managetel}}</td>
		<td><a href="{{url('delete_dep',[$r->id])}}">删除</a></td>
	</tr>
	@endforeach
	</table>
@endsection