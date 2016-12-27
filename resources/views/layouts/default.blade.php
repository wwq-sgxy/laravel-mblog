<!DOCTYPE html>
<html>
  <head>
    <title>{{ $title }} - 微博 App</title>
    <link rel="stylesheet" href="/css/app.css">
  </head>
  <body>
    @include('layouts._header')

    <div class="container">
      @yield('content')
    </div>
    
    @include('layouts._footer')
  </body>
</html>
