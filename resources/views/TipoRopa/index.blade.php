@extends('layouts.app')

@section('title', 'TipoRopa')

@section('content')
<div class="container">
	<table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <a href="/tiporopa/create" class="btn btn-primary">Crear</a>
                </tr>
                @foreach($TipoRopa as $tiporopa)
                <tr align="center" align="left">
                	<th>{{$tiporopa->id}}</th>
                    <th>{{$tiporopa->name}}</th>
                    <th>
                        {!! Form::open([ 'route' => ['tiporopa.destroy', $tiporopa->slug], 'method' => 'DELETE']) !!}
                            {!! Form::submit('Eliminar', ['class' => 'btn btn-danger']) !!}
                        {!! Form::close() !!}     
                    </th>
                </tr>
                @endforeach
        </thead>
    </table>
</div>
@endsection