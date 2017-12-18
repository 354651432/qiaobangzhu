<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no" />
	<title>index</title>
	<link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap.min.css">
</head>
<body>
	<br>
	<br>
	<br>
	<div class="container">
		<form action="{{ route("post-login")}}" method="POST" class="form-horizontal">
			{{ csrf_field() }}
			<div class="form-group {{ $errors->has("phone")?"has-error":"" }}">
				<label for="" class="col-sm-2 control-label" >手机号</label>
				<div class="col-sm-10">
					<input type="text" name="phone" class="form-control" value="{{ old("phone") }}">
				</div>
				@if($errors->has("phone"))
					<div class="help-block col-sm-offset-2">{{ $errors->first("phone") }}</div>
				@endif
			</div>
			<div class="form-group {{ $errors->has("password")?"has-error":"" }}">
				<label for="" class="col-sm-2 control-label">密码</label>
				<div class="col-sm-10">
					<input type="password" name="password" class="form-control" value="{{ old("password") }}">
				</div>
				@if($errors->has("password"))
					<div class="help-block col-sm-offset-2">{{ $errors->first("password") }}</div>
				@endif
			</div>
			<div class="form-group">
				<div class="col-sm-10 col-sm-offset-2">
					<button type="submit" class="btn btn-info">登陆</button>
					<a href="register.html" class="btn btn-link">注册</a>
				</div>
			</div>
		</form>
	</div>
</body>
</html>