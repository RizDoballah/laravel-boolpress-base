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
   return view('posts.create');
 }

 /**
  * Store a newly created resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @return \Illuminate\Http\Response
  */

 public function store(Request $request)
 {
   // $request->validate($this->validationPost);

   $data = $request->all();
   $post = new Post;
   $post->fill($data);

   $saved = $post->save();
   if ($saved) {
    // $post = Post::all()->last();
    return redirect()->route('posts.show', $post);
   }
 }

 /**
  * Display the specified resource.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */


 public function show(Post $post)
 {
   if (empty($post)) {
     abort('404');
   }
   return view('posts.show', compact('post'));
 }

 /**
  * Show the form for editing the specified resource.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */

 public function edit(Post $post)
 {
   return view('posts.create', compact('$post'));
 }

 /**
  * Update the specified resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */

 public function update(Request $request, Post $post)
 {
   $request->validate($this->validationPost);
   $date = $request->all();
   $post->fill($data);
   $updated = $post->update();
   if ($updated) {
     return redirect()->route('posts.show', $post);
   }
 }

 /**
  * Remove the specified resource from storage.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */

 public function destroy(Post $post)
 {

 }

}
