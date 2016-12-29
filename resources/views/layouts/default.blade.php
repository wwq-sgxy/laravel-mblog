<!DOCTYPE html>
<html>
  <head>
    <title>{{ $title }} - 微博 App</title>
    <link rel="stylesheet" href="/css/app.css">
  </head>
  <body>
    @include('layouts._header')
    <div class="container">
      @include('shared.messages')
      @yield('content')
    </div>
    @include('layouts._footer')
    <script src="/js/app.js"></script>
  </body>
</html>
