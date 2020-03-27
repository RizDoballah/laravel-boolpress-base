@extends('layouts.layout')

@section('header')
    <h1>All Users</h1>
@endsection

@section('main')
  <div class="users">
    @foreach ($users as $user)
      <div class="user">
        <ul>
          <li> <a href="{{route('users.show', $user)}}">Name: {{$user->name}}</a></li>
          <li>Email: {{$user->email}}</li>
          <li>Avatar: {{$user->avatar['src']}}</li>
          @foreach ($user->photos as $photo)
              <li>Path: {{$photo->path}}</li>
              <li>Alt: {{$photo->alt}}</li>
          @endforeach
        </ul>
      </div>
    @endforeach
  </div>
@endsection
