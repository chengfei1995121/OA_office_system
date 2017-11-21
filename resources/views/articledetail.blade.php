@extends('home')
@section('title','文章详情')
@section('content')
<div class="articledetail">
	<h3>{{$result[0]->title}}</h3>
	{!!$result[0]->content!!}
</div>
@endsection