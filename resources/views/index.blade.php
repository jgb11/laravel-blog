@extends('layout')

@section('title')
  Portada
@endsection

@section('content')
  @forelse($posts as $post)
    <div class="well">
      <h2>{{ $post->title }}</h2>
      <p>
      {{ $post->body }}
      </p>
      <a href="{{ url('edit', [$post->id]) }}" class="btn btn-warning btn-xs">
        <span class="glyphicon glyphicon-pencil"></span>
        Editar
      </a>
      <a href="#" class="btn btn-danger btn-xs">
        <span class="glyphicon glyphicon-remove"></span>
        Borrar
      </a>
    </div>
  @empty
    <h2>No hay entradas en el blog</h2>
  @endforelse
@endsection
