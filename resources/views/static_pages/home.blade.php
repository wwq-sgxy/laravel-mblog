@extends('layouts.default')
@section('content')
	<div class="jumbotron">
	  <h1>欢迎来到微博App</h1>
	  <h2>这是微博应用程序的主页</h2>
	  <p><a href="{{ route('signup') }}" class="btn btn-lg btn-success">现在就注册！</a></p>
	</div>
@endsection
