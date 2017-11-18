@extends('home')
@section('title','日程安排')
@section('content')
<table class="table table-bordered table-hover">
	<tr>
		<td>事务</td>
		<td>开始时间</td>
		<td>结束时间</td>
		<td>状态</td>
		<td>操作</td>
	</tr>
	@if(!empty($result))
		@foreach($result as $re)
			<tr>
				<td>{{$re->content}}</td>
				<td>{{$re->start_time}}</td>
				<td>{{$re->end_time}}</td>
				@if($re->status==0)
					<td style="color: red;">未完成</td>
					<td><a href="{{url('schedule',[$re->id])}}">完成</a></td>
				@else
					<td>已完成</td>
					<td>完成</td>
				@endif
			</tr>
			@endforeach
	@endif
</table>
</div>
@endsection