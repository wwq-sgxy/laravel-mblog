@extends('layouts.default')
@section('content')
<div class="row">
  <div class="panel panel-success">
    <div class="panel-heading">更新个人资料</div>
    <div class="panel-body">
      @include('shared.errors')
      <div class="row">
        <section class="user_info">
          @include('shared.user_info', [
            'user' => $user,
            'shape' => $shape,
            'size' => $size
          ])
        </section>
      </div>
      <form class="user form-horizontal" method="POST" action="{{ route('users.update', $user->id )}}">
        {{ method_field('PATCH') }}
        {{ csrf_field() }}
        <div class="form-group">
          <label for="user_name" class="col-sm-2 control-label">姓名</label>
          <div class="col-sm-9">
            <input class="form-control" type="text" name="name" id="user_name"
              placeholder="请输入用户名" value="{{ old('name',$user->name) }}"/>
          </div>
        </div>

        <div class="form-group">
          <label for="user_email" class="col-sm-2 control-label">Email</label>
          <div class="col-sm-9">
            <input class="form-control" type="email" name="email" id="user_email"
              placeholder="请输入邮件地址" value="{{ old('email',$user->email) }}"/>
          </div>
        </div>

        <div class="form-group">
          <label for="user_qq" class="col-sm-2 control-label">QQ</label>
          <div class="col-sm-9">
            <input class="form-control" type="text" name="qq" id="user_qq"
              placeholder="请输入 QQ 号" value="{{ old('qq',$user->qq) }}"/>
          </div>
        </div>

        <div class="form-group">
          <label for="user_pass" class="col-sm-2 control-label">新密码</label>
          <div class="col-sm-9">
            <input class="form-control" type="password" name="password" id="user_pass"
              placeholder="请输入密码" value="{{ old('password') }}"/>
          </div>
        </div>
        <div class="col-sm-offset-4 col-sm-4">
          <input type="submit" name="commit" value="更新" class="btn btn-primary btn-block" />
        </div>
      </form>
    </div>
  </div>
</div>
@endsection
