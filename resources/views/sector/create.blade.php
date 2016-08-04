@extends('app')

@section('content')
{{--@include('alerts.request')--}}
<h1>Registrar Sector</h1>

{!! Form::open(['route'=>'sector.store']) !!}

	@include('sector.partials.form')

<div class="form-group col-xs-12"> 
{!!  Form::button('Guardar', ['type'=>'submit', 'class'=>'btn btn-primary']) !!}
</div>

{!! Form::close() !!}
@endsection

