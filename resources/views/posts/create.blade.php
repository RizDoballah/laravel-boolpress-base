@extends('layouts.layout')
@section('header')
<h1>Insert/modify post</h1>

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

<form action="{{(!empty($post)) ? route('posts.update', $post) : route('posts.store')}}" method="post">

  @csrf
  @if (!empty($post))
    @method('PATCH')
  @else
  @method('POST')
  @endif

  <input type="text" name="title" placeholder="insert title" value="{{(!empty($post)) ? $post->title : ''}}"><br>
  <input type="date" name="date" placeholder="insert date" value="{{(!empty($post)) ? $post->date : ''}}"><br>
  <textarea name="content" rows="8" cols="80">
    {{(!empty($post)) ? $post->content : ''}}
  </textarea><br>
  <input type="text" name="status" placeholder="insert status" value="{{(!empty($post)) ? $post->status : ''}}"><br>
  <input type="text" name="type" placeholder="insert type" value="{{(!empty($post)) ? $post->type : ''}}"><br>
  <input type="text" name="tags" placeholder="insert tags" value="{{(!empty($post)) ? $post->tags : ''}}"><br>
  <input type="number" name="comment_count" placeholder="insert number of comments" value="{{(!empty($post)) ? $post->comment_count : ''}}"><br>
  <input type="number" name="like_count" placeholder="insert number of likes" value="{{(!empty($post)) ? $post->like_count : ''}}"><br>

  @if (!empty($post))
    <input type="hidden" name="" value="{{$post->id}}">
    <input type="submit" name="" value="Save">
  @else
    <input type="submit" name="" value="Save">  
  @endif

</form>

@endsection
