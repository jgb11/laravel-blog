@extends('layout')

@section('title')
  Nueva entrada
@endsection

@section('content')
  <form action="{{ url('new') }}" method="post">
    {!! csrf_field() !!}
    <div class="form-group">
      <label for="title">Titulo</label>
      <input name="title" type="text" class="form-control" id="title" placeholder="Titulo">
    </div>
    <div class="form-group">
      <label for="body">Contenido</label>
      <textarea name="body" id="body" rows="20" cols="40" class="form-control"></textarea>
    </div>
    <input type="submit" name="Publicar" value="Publicar" class="btn btn-primary">
  </form>
@endsection
