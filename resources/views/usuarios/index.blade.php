@extends('layout.app')
@section('content')
<h1>Usuarios</h1>

@if(count($usuarios))
  @foreach($usuarios as $usuario)
    <div class="card text-white bg-secondary mb-3">
      <div class="card-body">
      <h4 class="card-title"><a href="usuario/{{$usuario->id}}">{{$usuario->nombre}}</a></h4>
      </div>
    </div>
  @endforeach
@endif

@endsection
