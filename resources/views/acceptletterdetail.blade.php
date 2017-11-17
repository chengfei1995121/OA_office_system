@extends('home')
@section('title','信件详情')
@section('content')
<div>
<div>
	<p>标题：{{$result[0]->msg_title}}</p>
</div>
<div><p>发件人：{{$result[0]->msg_sender}}</p></div>
<div><p>收件人：{{$result[0]->msg_accepter}}</p></div>
<div><p>时间：{{$result[0]->msg_time}}</p></div>
<div>
	<p class="lead">内容：</p>
	<p class="lead" style="text-indent: 50px;">{{$result[0]->msg_content}}</p>
</div>

<div><a href="{{url('deleteletter',['id'=>$result[0]->id])}}" class="delete">删除</a></div>
</div>
@endsection