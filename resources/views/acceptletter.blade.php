@extends('home')
@section('title', '收件箱')
@section('content')
<div>
<table class="table table-bordered table-hover">
	<tr>
		<td>发件人</td>
		<td>主题</td>
		<td>日期</td>
	</tr>
	@if(!empty($result))
		@foreach($result as $r)
		<tr>
			<td>{{$r->msg_sender}}</td>
			<td><a href="{{url('showletter',['id'=>$r->id])}}">{{$r->msg_title}}</a></td>
			<td>{{$r->msg_time}}</td>
		</tr>
		@endforeach
	@endif
</table> 
</div>
@endsection