@extends('app')

@section('content')
{{--@include('alerts.request')--}}
<h1>Registrar Grupo</h1>

{!! Form::open(['route'=>'grupo.store']) !!}

	@include('grupo.partials.form')

<div class="form-group col-xs-12"> 
{!!  Form::button('Guardar', ['type'=>'submit', 'class'=>'btn btn-primary']) !!}
</div>

{!! Form::close() !!}
@endsection

