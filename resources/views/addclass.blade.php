@extends('adminhome')
@section('title', '添加系部')
@section('content')
<form method="post" action="{{url('addclass')}}" class="form-horizontal writeletterform">
	{{ csrf_field() }}
	<div class="form-group">
		<label>班级ID</label>
		<input type="text" name="id" class="from-control">
	</div>
	<div class="form-group">
		<label>班级名</label>
		<input type="text" name="classname" class="from-control">
	</div>
	<div class="form-group">
		<label>班级人数</label>
		<input type="text" name="classnumber" class="from-control">
	</div>
	<button type="submit">保存</button>
</form>
@endsection