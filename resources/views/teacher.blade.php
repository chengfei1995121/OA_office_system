@extends('adminhome')
@section('title','教师管理')
@section('content')
<table class="table table-bordered table-hover">
	<tr>
	<td>用户名</td>
	<td>真实姓名</td>
	<td>所属系部</td>
	<td>操作</td>
	</tr>
	@foreach($result as $r)
	<tr>
		<td>{{$r->username}}</td>
		<td>{{$r->realname}}</td>
		<td>{{$r->manageid}}</td>
		<td><a href="{{url('deleteteacher',[$r->id])}}">删除</a></td>
	</tr>
	@endforeach
	</table>
@endsection