@extends('layout.app')

@section('content')

  <hr>
  <div class="card  m-4">
      <div class="card-body">
        <h5 class="card-title">{{ $article['title'] }}</h3>
        <p>{{ $article['created_at']->format('Y年 m月 d日 H:i') }}</p>
        <hr>
        <p class="card-text">{{ $article['content'] }}</p>
      </div>
  </div>
  

@endsection