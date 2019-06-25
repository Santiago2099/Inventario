<div class="form-group">
	{!! Form::label('name', 'Name') !!}
	{!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('slug', 'Slug') !!}
	{!! Form::text('slug', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('descripcion', 'Descripcion') !!}
	{!! Form::text('descripcion', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	<select name="OS">
		@foreach($Tiporopa as $tiporopa)
   		<option value="1">{{$tiporopa->name}}</option>  
   		@endforeach
	</select>
</div>
<div class="form-group">
	{!! Form::label('picture', 'Picture') !!}
	{!! Form::file('picture')!!}
</div>