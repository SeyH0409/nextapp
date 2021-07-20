<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>anitalk</title>
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <script src="{{ asset('js/app.js') }}"></script>
  <style>
    body {background-color: #CCFFFF; }
    a {color: black;}
    a:hover {text-decoration: none;}
  </style>
</head>
<body>
  <nav class="navbar navbar-light bg-light  justify-content-around">
    <span class="navbar-brand mb-0 h1 shadow-sm">
      <a href="/">アニトーク</a>
    </span>
    @if (Request::is('/'))
      <span class="navbar-brand mb-0 h1 shadow-sm">
          <a href="{{ route('create') }}">
            投稿
          </a>
      </span>
    @endif
  </nav>
  @yield('content')
</body>
</html>