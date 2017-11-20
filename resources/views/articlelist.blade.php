@extends('home')
@section('title','文章列表')
@section('content')
<table class="table table-bordered table-hover">
	<tr>
	<td>标题</td>
	<td>作者</td>
	<td>发表时间</td>
	</tr>
	@foreach($result as $r)
	<tr>
		<td><a href="#">{{$r->title}}</a></td>
		<td>{{$r->author}}</td>
		<td>{{$r->write_time}}</td>
	</tr>
	@endforeach
	</table>
	<nav aria-label="Page navigation">
  <ul class="pagination pagination-lg" style="margin-left: 300px;">
    <li>
      <a href="#" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
      </a>
    </li>
    <li><a href="#">1</a></li>
    <li><a href="#">2</a></li>
    <li><a href="#">3</a></li>
    <li><a href="#">4</a></li>
    <li><a href="#">5</a></li>
    <li>
      <a href="#" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
      </a>
    </li>
  </ul>
</nav>
@endsection