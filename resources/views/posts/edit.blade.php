@extends('layouts.layout')

@section('title')
     Editar entrada
@endsection

@section('content')
  <h2>Editar entrada</h2>
  <form action="{{ url('edit') }}" method="post">
    {!! csrf_field() !!}
    <input type="hidden" name="id" value="{{ $post->id }}">
    <div class="form-group">
      <label for="title">Titulo</label>
      <input name="title" type="text" class="form-control" id="title" value="{{ $post->title }}">
    </div>
    <div class="form-group">
      <label for="body">Contenido</label>
      <textarea name="body" id="body" rows="20" cols="40" class="form-control">{{ $post->body }}</textarea>
    </div>
    <input type="submit" name="Actualizar" value="Actualizar" class="btn btn-primary">
    <a href="{{ url()->previous() }}" class="btn btn-link">Volver</a>
  </form>
@endsection
