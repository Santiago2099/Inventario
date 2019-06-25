@extends('layouts.app')

@section('title', 'Edit TipoRopa')

@section('content')
	{!! Form::model($ropa, ['route' => ['tiporopa.update', $ropa], 'method' => 'PUT', 'files' => true]) !!}
		@include('Ropa.form')

		{!! Form::submit('Actualizar', ['class' => 'btn btn-primary']) !!}
	{!! Form::close() !!}
@endsection