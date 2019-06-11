@extends('pantallas.principal')
<meta name="csrf-token" content="{{ csrf_token() }}">

@section('main')
@include('flash::message')
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
<script> src="{{ asset('js/users.js') }}"</script>
<center>
    @if(session()->has('flash_notification.important'))
        <button type="button" class="close table-tam"
                data-dismiss="alert"
                aria-hidden="true"
        >&times;</button>
    @endif
</center>
<meta name="csrf-token" content="{{ csrf_token() }}">
<div class="add" id="add">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Agregar usuario') }}</div>

                    <div class="card-body">
                        <form  method="POST" action="{{ route('addUserAdmin') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="Nombre" class="col-md-4 col-form-label text-md-right">{{ __('Nombre') }}</label>

                                <div class="col-md-6">
                                    <input id="nombre" type="text" class="form-control{{ $errors->has('nombre') ? ' is-invalid' : '' }}" name="nombre" value="{{ old('nombre') }}" required autofocus>

                                    @if ($errors->has('nombre'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('nombre') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="id" class="col-md-4 col-form-label text-md-right">{{ __('No. Control') }}</label>

                                <div class="col-md-6">
                                    <input id="id" type="number" class="form-control{{ $errors->has('id') ? ' is-invalid' : '' }}" name="id" value="{{ old('id') }}" required autofocus>

                                    @if ($errors->has('id'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('id') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="id_carrera" class="col-md-4 col-form-label text-md-right">{{ __('Carrera') }}</label>
                                
                                <div class="col-md-6">
                                    <select id="id_carrera" type="text" class="browser-default custom-select" name="id_carrera">
                                        @foreach($carreras as $carrera)
                                           
                                                <option value="{{ $carrera->id }}">{{ $carrera->nombre }}</option>
                                            
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-4 col-form-label text-md-right ">{{ __('Tipo Usuario:') }}</label>
                                
                                <div class="col-md-6">
                                    <select id="id_tipo_usuario" type="number" class="browser-default custom-select form-control" name="id_tipo_usuario">
                                        @foreach($tipo_usuarios as $tipo_usuario)
                                            
                                                <option value="{{ $tipo_usuario->id }}">{{ $tipo_usuario->nombre_tipo_usuario }}</option>
                                            
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password">

                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation">
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Agregar') }}
                                    </button>
                                </div>
                            </div>

                        </form>
                    </div>
            </div>
        </div>
    </div>
</div>
</div>

@endsection
