<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Post;

class PostsController extends Controller
{
  public function getIndex()
  {
    $posts = Post::orderBy('created_at', 'desc')->get();
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

  public function getEdit($postId)
  {
    $post = Post::find($postId);
    return view('edit', ['post' => $post]);
  }

  public function postEdit(Request $req)
  {
    $post = Post::find($req->id);

    $post->title = $req->title;
    $post->body = $req->body;
    $post->user_id = 1;

    $post->save();

    return redirect('/');
  }

}
