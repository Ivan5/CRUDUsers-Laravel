@extends('layout.app')
@section('content')

 <h1>Editar Usuario</h1>
 {!! Form::open(['action' => ['UsuariosController@update', $usuario->id],'method' => 'POST']) !!}
  {{Form::bsText('nombre',$usuario->nombre)}}
  {{Form::bsText('email',$usuario->email)}}
  {{Form::bsText('telefono',$usuario->telefono)}}
  {{Form::hidden('_method','PUT')}}
  {{Form::bsSubmit('Actualizar',['class' => 'btn btn-success float-right'])}}
 {!! Form::close() !!}
@endsection
