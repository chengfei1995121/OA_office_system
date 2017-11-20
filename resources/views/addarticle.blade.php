@extends('home')
@section('title', '添加文章')
@section('content')
 
<form method="post" action="{{url('addarticle')}}" class="form-horizontal">
	{{ csrf_field() }}
	<div class="article">
		<label>标题</label>
		<input type="text" name="title" class="inputtitle">
	</div>
	<textarea id="text" name="content" style="display: none;"></textarea>
	<div id="editor"></div>
	<div>
		<button type="submit" class="btn btn-primary" style="float: right;margin-top: 10px;">保存</button>
	</div>
	</form>
	
	<script type="text/javascript">
        var E = window.wangEditor;
        var editor = new E( document.getElementById('editor') )
        var $text1=document.getElementById('text');
        editor.customConfig.onchange=function(html)
        {
        	$text1.value=html;
        };
        editor.create();
        $text1.value=editor.txt.html();
    </script>
@endsection