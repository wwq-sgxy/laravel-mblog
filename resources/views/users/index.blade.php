@extends('layouts.default')

@section('content')
<div class="page-header"><h1>所有用户</h1></div>
<div class="row" style="margin-left:0">
  @foreach ($users as $user)
    <div class="media">
      <a class="media-left" href="#">
        <img src="{{ $user->gravatar_qq() }}" alt="{{ $user->name }}"
          class="{{ $shape }}" width="{{ $size }}" />
      </a>
      <div class="media-body">
        <h3 class="media-heading">
          <a href="{{ route('users.show', $user->id )}}" class="username">{{ $user->name }}</a>
        </h3>
        @can('destroy', $user)
          <form class="form-inline" action="{{ route('users.destroy', $user->id) }}" method="post">
            {{ csrf_field() }}
            {{ method_field('DELETE') }}
            <button type="submit" class="btn btn-sm btn-warning delete-btn">删除</button>
          </form>
        @endcan
      </div>
    </div>
  @endforeach
  {!! $users->render() !!}
</div>
@endsection
