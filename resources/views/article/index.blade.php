@extends('layout.app')

@section('content')

  <hr>
  @foreach($articles as $article)
  <div class="card w-75 m-4">
    <a href='#' >
      <div class="card-body">
        <h5 class="card-title">{{ $article['nickname'] }}</h3>
        <p>{{ $article['created_at']->format('Y年 m月 d日 H:i') }}</p>
        <hr>
        <p class="card-text">{{ $article['title'] }}</p>
      </div>
    </a>
  </div>
  @endforeach

@endsection