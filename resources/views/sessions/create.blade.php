@extends('layouts.default')
@section('content')
<div class="row">
  <div class="panel panel-success">
    <div class="panel-heading">登录</div>
    <div class="panel-body">
      @include('shared.errors')
      <form class="login" method="POST" action="{{ route('login') }}">
          {{ csrf_field() }}
          <div class="form-group">
            <label for="user_email" class="sr-only">Email</label>
            <input class="form-control" type="email" name="email" id="user_email"
              placeholder="请输入邮件地址" value="{{ old('email') }}"/>
          </div>
          <div class="form-group">
            <label for="user_pass" class="sr-only">密码</label>
            <input class="form-control" type="password" name="password" id="user_pass"
              placeholder="请输入密码" value="{{ old('password') }}"/>
          </div>
          <div class="checkbox">
            <label><input type="checkbox" name="remember"> 记住我</label>
          </div>
          <input type="submit" value="登录" class="btn btn-primary btn-block" />
      </form>
      <hr>
      <p>还没账号？<a href="{{ route('signup') }}">现在就注册！</a></p>
    </div>
  </div>
</div>
@endsection
