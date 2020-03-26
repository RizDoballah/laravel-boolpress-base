@extends('layouts.layout')
@section('header')
<h1>Insert a new post</h1>

@if ($errors->any())
      <div class="alert alert-danger">
        <ul>
          @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif
@endsection

@section('main')
<form action="{{route('posts.store')}}" method="post">
  @csrf
  @method('POST')
  <input type="text" name="title" placeholder="insert title" value=""><br>
  <input type="date" name="date" placeholder="insert date" value=""><br>
  <textarea name="content" rows="8" cols="80"></textarea><br>
  <input type="text" name="status" placeholder="insert status" value=""><br>
  <input type="text" name="type" placeholder="insert type" value=""><br>
  <input type="text" name="tags" placeholder="insert tags" value=""><br>
  <input type="number" name="comment_count" placeholder="insert number of comments" value=""><br>
  <input type="number" name="like_count" placeholder="insert number of likes" value=""><br>
  <input type="submit" name="" value="Save">

</form>

@endsection
