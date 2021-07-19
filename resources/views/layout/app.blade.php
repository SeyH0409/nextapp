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
    a:hover {text-decoration: none;}
  </style>
</head>
<body>
  <nav class="navbar navbar-light bg-light  justify-content-around">
    <span class="navbar-brand mb-0 h1  shadow-sm">アニトーク</span>
    <button type="button" class="btn-dark">
      <a href='#' style='color:white;'>
        投稿
      </a>
    </button>
  </nav>
  @yield('content')
</body>
</html>