@extends('layouts.app')

@section('title', 'Trainer')

@section('content')
	@include('common.success')
	<img style="height: 200px; width: 200px; background-color: #EFEFEF; margin: 20px;" class="card-img-top rounded-circle mx-auto d-block" src="/images/{{$trainer->avatar}}" alt="">
	<div class="text-center">
		<h5 class="card-title">{{$user->name}}</h5>
	</div>
@endsection