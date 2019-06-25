@extends('layouts.app')

@section('title', 'Crear TipoRopa')

@section('content')
	{!! Form::open(['route' => 'tiporopa.store', 'method' => 'POST', 'files' => true ]) !!}

		@include('TipoRopa.form')

		{!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
	{!! Form::close()!!}
@endsection