@extends('layout')

@section('title')
     Portada
@endsection

@section('content')
     <h1>Laravel Blog</h1>
     @forelse($posts as $post)
       <div class="well well-sm">
         {{ $post->title }}
         <p>
           {{ $post->body }}
         </p>
       </div>
     @empty
       <h2>No hay entradas en el blog</h2>
     @endforelse
@endsection
