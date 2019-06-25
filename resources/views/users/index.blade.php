@extends('layouts.app')

@section('title', 'User')

@section('content')
<div class="container">
	<table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Email</th>
                </tr>
                @foreach($Users as $user)
                <tr align="center" align="left">
                	<th>{{$user->id}}</th>
                    <th>{{$user->name}}</th>
                    <th>{{$user->email}}</th>
                    <th>
                        <a href="/user/{{$user->slug}}/show" class="btn btn-primary">Editar</a>
 
                    </th>

                </tr>
                @endforeach
        </thead>
    </table>
</div>
@endsection