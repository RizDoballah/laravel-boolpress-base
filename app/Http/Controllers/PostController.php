<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
  private $validationPost = [
     'title' => 'required|string|max:255',
     'date' => 'required|date',
     'content' => 'required|text|max:500',
     'status' => 'required|string|max:255',
     'type' => 'required|string',
     'tags' => 'required|text|max:200',
     'comment_count' => 'required|numeric|min:0|max:9000',
      'like_count' => 'required|numeric|min:0|max:9000'
 ];

 /**
  * Display a listing of the resource.
  *
  * @return \Illuminate\Http\Response
  */
 public function index()
 {

     $posts = Post::all();

     return view('posts.index', compact('posts'));
 }

 /**
  * Show the form for creating a new resource.
  *
  * @return \Illuminate\Http\Response
  */
 public function create()
 {

 }

 /**
  * Store a newly created resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @return \Illuminate\Http\Response
  */
 public function store(Request $request)
 {

 }

 /**
  * Display the specified resource.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */


 public function show(Shoe $shoe)
 {

 }

 /**
  * Show the form for editing the specified resource.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
 public function edit(Shoe $shoe)
 {

 }

 /**
  * Update the specified resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
 public function update(Request $request, $id)
 {

 }

 /**
  * Remove the specified resource from storage.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
 public function destroy(Shoe $shoe)
 {

 }
}
