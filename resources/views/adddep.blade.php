@extends('adminhome')
@section('title', '添加系部')
@section('content')
<form method="post" action="{{url('add_department')}}" class="form-horizontal writeletterform">
	{{ csrf_field() }}
	<div class="form-group">
		<label>系部ID</label>
		<input type="text" name="dep_id" class="from-control">
	</div>
	<div class="form-group">
		<label>系部名</label>
		<input type="text" name="dep_name" class="from-control">
	</div>
	<div class="form-group">
		<label>系部电话</label>
		<input type="text" name="dep_tel" class="from-control">
	</div>
	<button type="submit">保存</button>
</form>
@endsection