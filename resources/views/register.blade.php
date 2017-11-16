<!DOCTYPE html>
<html>
<head>
	<title>注册界面</title>
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
<form class="form-horizontal" method="POST" action="{{url('register')}}">
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
    <label for="inputPassword3" class="col-sm-2 control-label">确认密码</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="inputPassword3" placeholder="确认密码" name="repass">
    </div>
  </div>
  <div class="form-group">
    <label for="inputuser" class="col-sm-2 control-label">真实姓名</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputuser" placeholder="真实姓名" name="realname">
    </div>
  </div>
  <div class="form-group">
    <label for="inputuser" class="col-sm-2 control-label">课程ID</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputuser" placeholder="课程ID" name="subjectid">
    </div>
  </div>
  <div class="form-group">
    <label for="inputuser" class="col-sm-2 control-label">所属部门</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputuser" placeholder="部门ID" name="manageid">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-primary">注册</button>
    </div>

  </div>
</form>
@if(isset($is_error))
  <div>
  <h3 class="error text-center">
  注册失败,请重新输入
  </h3>
  <div>
@endif
</div>

</body>
</html>