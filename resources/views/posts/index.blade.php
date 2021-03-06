@extends('layouts.layout')
@section('header')
  <h1>All posts</h1>

@endsection
@section('main')
  <div class="posts">
    @foreach ($posts as $post)
      <div class="post">
        <ul>
          <li>
            <a href="{{route('posts.show', $post)}}"><h4>ID</h4></a>{{$post->id}}
          </li>
          <li><h4>Title</h4>{{$post->title}}</li>
          <li><h4>Date</h4>{{$post->date}}</li>
          <li><h4>Content</h4>{{$post->content}}</li>
          <li><h4>Status</h4>{{$post->status}}</li>
          <li><h4>Type</h4>{{$post->type}}</li>
          <li><h4>Tags</h4>{{$post->tags}}</li>
          <li><h4>Comments</h4>{{$post->comment_count}}</li>
          <li><h4>Likes</h4>{{$post->like_count}}</li>
        </ul>
      </div>
      <hr>
    @endforeach
  </div>
  <a href="{{route('posts.create')}}">Insert a new post</a>

@endsection
