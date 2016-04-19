<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Post;

class PostsController extends Controller
{
  public function getIndex()
  {
    $posts = Post::all();

    return view('index', ['posts' => $posts]);
  }

  public function getNew()
  {
    return view('new');
  }

  public function postNew(Request $req)
  {
    $post = new Post;

    $post->title = $req->title;
    $post->body = $req->body;
    $post->user_id = 1;

    $post->save();

    return redirect('/');
  }

}
