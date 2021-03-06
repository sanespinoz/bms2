@extends('auth/template')

@section('content')
                <h2 class="text-center">Registrarse</h2>
                <form role="form" method="POST" action="{{ url('auth/register') }}">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="row">

                        <div class="form-group col-lg-6 {{ $errors->has('name')? 'has-error' : '' }}">
                            <input class="form-control" placeholder="Nombre" name="name" type="text" value="{{ old('name') }}" required>
                            {!! $errors->first('name', '<small class="help-block">:message</small>') !!}
                        </div>
                        
                        <div class="form-group col-lg-6 {{ $errors->has('email')? 'has-error' : '' }}">
                            <input class="form-control" placeholder="Correo Electrónico" name="email" type="email" value="{{ old('email') }}" required>
                            {!! $errors->first('email', '<small class="help-block">:message</small>') !!}
                        </div>
                        
                    </div>
                    
                    <div class="row">
                        
                        <div class="form-group col-lg-6 {{ $errors->has('password')? 'has-error' : '' }}">
                            <input class="form-control" placeholder="Contraseña" name="password" type="password" required>
                            {!! $errors->first('password', '<small class="help-block">:message</small>') !!}
                        </div>
                        
                        <div class="form-group col-lg-6">
                            <input class="form-control" placeholder="Confirmar Contraseña" name="password_confirmation" type="password" >
                        </div>

                        <div class="form-group col-lg-12 text-center">
                            <input class="btn btn-default" type="submit" value="Enviar">
                        </div> 
                        
                    </div>
                </form>                        
@stop
