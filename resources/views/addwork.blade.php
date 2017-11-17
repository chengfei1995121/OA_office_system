@extends('home')
@section('title','添加事务')
@section('content')
<form method="post" action="{{url('schedule')}}" class="form-horizontal writeletterform">
<input type="hidden" name="_token" value="{{csrf_token()}}">
<div class="form-group">
开始时间
	<input type="date" name="start_time" class="from-control">
	</div>
	<div class="form-group">
	结束时间
		<input type="date" name="end_time" class="from-control">
	</div>
	<div class="form-group">
		内容
		<textarea name="content" class="from-control"></textarea>
	</div>
	<button type="submit" class="btn btn-primary">保存</button>
</form>
@endsection