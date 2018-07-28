@extends('layout.app')
@section('content')
<h1>Detalle Usuario {{$usuario->id}} <h1>
    <div class="card text-white bg-secondary mb-3 mt-4">
      <div class="card-body">
        <a href="/" class="btn btn-default float-right">Volver</a>
        <h3 class="card-title">{{$usuario->nombre}}</h3>
        <h4><span class="btn btn-danger">{{{$usuario->email}}}</span></h4>
        <div class="">
          {{$usuario->telefono}}
        </div>
        <br><br>
        <a href="{{$usuario->id}}/edit" class="btn btn-warning">Editar</a>
      </div>
    </div>
@endsection
