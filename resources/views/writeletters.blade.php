@extends('home')
@section('title', '写信')
@section('content')
<form method="post" action="{{url('writeletter')}}" class="form-horizontal writeletterform">
<input type="hidden" name="_token" value="{{csrf_token()}}">
<div class="form-group">
<label>收件人</label>
	<input type="text" name="accept" class="from-control">
	</div>
	<div class="form-group">
		<label>主题</label>
		<input type="text" name="title" class="from-control">
	</div>
	<div class="form-group">
		<label>内容</label>
		<textarea name="content" class="from-control"></textarea>
	</div>
	<button type="submit" class="btn btn-primary">发送</button>
</form>
@endsection