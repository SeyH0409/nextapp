@extends('layout.app')
  @section('content')
    <form class="m-5" method="POST" action="{{ route('store') }}" >
    @csrf
      <div class="form-group ">
        <label >ニックネーム</label>
        <input type="text" class="form-control" id="u-nickname" name="nickname">
      </div>
      <div class="form-group ">
        <label >タイトル</label>
        <input type="text" class="form-control" id="article-title" name="title" >
      </div>
      <div class="form-group">
        <label >本文</label>
        <textarea name="content" id="article-content" class='form-control' cols="30" rows="10"></textarea>
      </div>
      <button type="submit" class="btn btn-primary ">投稿する</button>
    </form>
  @endsection