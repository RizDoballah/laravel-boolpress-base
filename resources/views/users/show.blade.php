@extends('layouts.layout')

@section('main')
  <div class="user">
    <ul>
      <li>
        <h4>ID</h4>{{$user->id}}
      </li>
      <li><h4>Name</h4>{{$user->name}}</li>
      <li><h4>Email</h4>{{$user->email}}</li>
      <li><h4>Password</h4>{{$user->password}}</li>
      <li><h4>Avatar</h4>{{$user->avatar['src']}}</li>
      @foreach ($user->photos as $photo)
        <h3>Photo ID {{$photo->id}}</h3>
          <li>Path: {{$photo->path}}</li>
          <li>Alt: {{$photo->alt}}</li>
      @endforeach
    </ul>
    </div>
@endsection
