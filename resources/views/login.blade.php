<!DOCTYPE html>
<html>
<head>
	<title>登录界面</title>
	<link href="{{ asset('css/app.css') }}" rel="stylesheet">
	<script src="{{ asset('js/app.js') }}"></script>
	<style type="text/css">
		.error{
			color:red;
		}
	</style>
</head>
<body>
<div style="width:500px;margin:100px auto;">
<form class="form-horizontal" method="POST" action="{{url('login')}}">
<input type="hidden" name="_token" value="{{csrf_token()}}">

  <div class="form-group">
    <label for="inputuser" class="col-sm-2 control-label">用户名</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputuser" placeholder="用户名" name="name">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">密码</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="inputPassword3" placeholder="密码" name="pass">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <div class="checkbox">
        <label>
          <input type="checkbox"> 记住我
        </label>
      </div>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-primary">登录</button>
    </div>
  </div>
</form>
@if(isset($is_error))
	<div>
	<h3 class="error text-center">
	用户名或者密码错误
	</h3>
	<div>
@endif
</div>

</body>
</html>