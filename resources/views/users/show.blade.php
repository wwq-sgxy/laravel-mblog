@extends('layouts.default')
@section('content')
  <div class="row">
    <section class="user_info">
      @include('shared.user_info', [
        'user' => $user,
        'shape' => $shape,
        'size' => $size
      ])
    </section>
  </div>
@endsection
