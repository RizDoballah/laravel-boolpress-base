@extends('layouts.layout')

@section('main')
  <div class="post">
    <ul>
      <li>
        <h4>ID</h4>{{$post->id}}
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
@endsection
