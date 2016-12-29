@extends('layouts.default')
@section('content')
<div class="row">
  <div class="panel panel-success">
    <div class="panel-heading">注册</div>
    <div class="panel-body">
      @include('shared.errors')
      <form class="signup" action="{{ route('users.store') }}" method="post">
        {{ csrf_field() }}
        <div class="form-group">
          <label for="user_name" class="sr-only">姓名</label>
          <input class="form-control" type="text" name="name" id="user_name"
            placeholder="请输入用户名" value="{{ old('name') }}"/>
        </div>

      <!-- @if (count($errors) > 0)
        <div class="form-group {{ ($errors->has('email'))? 'has-error has-feedback': 'has-success has-feedback' }}"
          title="{{ ($errors->has('email'))? $errors->first('email') : '' }}">
      @else
        <div class="form-group">
      @endif -->
        <div class="form-group">
          <label for="user_email" class="sr-only">Email</label>
          <input class="form-control" type="email" name="email" id="user_email"
            placeholder="请输入邮件地址" value="{{ old('email') }}"/>
          <!-- @if (count($errors) > 0)
            <span class="glyphicon form-control-feedback glyphicon-{{($errors->has('email'))? 'remove' : 'ok' }}"></span>
          @endif -->
        </div>

        <div class="form-group">
          <label for="user_pass" class="sr-only">密码</label>
          <input class="form-control" type="password" name="password" id="user_pass"
            placeholder="请输入密码" value="{{ old('password') }}"/>
        </div>
        <div class="form-group">
          <label for="pass_confirm" class="sr-only">密码确认</label>
          <input class="form-control" type="password" name="password_confirmation"
            id="pass_confirm" placeholder="请再次输入密码" value="{{ old('password_confirmation') }}"/>
         </div>
        <input type="submit" name="commit" value="创建账号" class="btn btn-primary btn-block" />
      </form>
    </div>
  </div>
</div>
@endsection
