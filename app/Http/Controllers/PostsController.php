<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PostsController extends Controller
{
  public function getIndex()
  {
    return view('index', ['titulo' => 'Portada']);
  }

}
