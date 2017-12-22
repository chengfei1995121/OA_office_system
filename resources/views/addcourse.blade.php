@extends('adminhome')
@section('title', '添加课程')
@section('content')
<form method="post" action="{{url('addcourse')}}" class="form-horizontal writeletterform">
	{{ csrf_field() }}
	<div class="form-group">
		<label>课程名</label>
		<input type="text" name="course_name" class="from-control">
	</div>
	<div class="form-group">
		<label>任课老师</label>
		<input type="text" name="course_teacher" class="from-control">
	</div>
	<div class="form-group">
		<label>班级</label>
		<input type="text" name="course_class" class="from-control">
	</div>
	<div class="form-group">
		<label>地点</label>
		<input type="text" name="course_address" class="from-control">
	</div>
	<div class="form-group">
		<label>第几节</label>
		<select class="form-control" name="course_time">
			<option>1</option>
			<option>2</option>
			<option>3</option>
			<option>4</option>
			<option>5</option>
			<option>6</option>
			<option>7</option>
		</select>
	</div>
	<div class="form-group">
		<label>星期</label>
		<select class="form-control" name="course_day">
			<option>1</option>
			<option>2</option>
			<option>3</option>
			<option>4</option>
			<option>5</option>
			<option>6</option>
			<option>7</option>
		</select>
	</div>
	<button type="submit" class="btn btn-primary">保存</button>
</form>
@endsection