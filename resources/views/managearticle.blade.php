@extends('adminhome')
@section('title','文章管理')
@section('content')
<table class="table table-bordered table-hover">
	<tr>
	<td>标题</td>
	<td>作者</td>
	<td>发表时间</td>
  <td>操作</td>
	</tr>
	@foreach($result as $r)
	<tr>
		<td>{{$r->title}}</td>
		<td>{{$r->author}}</td>
		<td>{{$r->write_time}}</td>
    <td><a href="{{url('adeletearticle',[$r->id])}}">删除</a></td>
	</tr>
	@endforeach
	</table>
	<nav aria-label="Page navigation">
  <ul class="pagination pagination-lg" style="margin-left: 300px;">
    <li>
      <a href="{{url('managearticle',[$id-1])}}" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
      </a>
    </li>
    <li><a href="{{url('managearticle/1')}}">1</a></li>
    <li><a href="{{url('managearticle/2')}}">2</a></li>
    <li><a href="{{url('managearticle/3')}}">3</a></li>
    <li><a href="{{url('managearticle/4')}}">4</a></li>
    <li><a href="{{url('managearticle/5')}}">5</a></li>
    <li>
      <a href="{{url('managearticle',[$id+1])}}" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
      </a>
    </li>
  </ul>
</nav>
@endsection