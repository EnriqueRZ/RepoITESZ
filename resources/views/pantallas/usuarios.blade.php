@extends('pantallas.principal')
<meta name="csrf-token" content="{{ csrf_token() }}">
@section('main')
@include('flash::message')
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
<script src="{{ asset('js/users.js') }}"></script>
<script>
        function confirmar() {
            if(confirm('¿Estas seguro de visitar esta url?'))
                return true;
            else
                return false;
        }
    </script>

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <div class='princi'>
        <center>
            @if(session()->has('flash_notification.important'))
                <button type="button"
                        class="close table-tam"
                        data-dismiss="alert"
                        aria-hidden="true"
                >&times;</button>
            @endif
        
        
       
            <div class="form-group row">
                <label class="col-md-4 col-form-label text-md-right ">{{ __('Carrera:') }}</label>
                
                <div class="col-md-6">
                    <select id="id_carrera" type="text" class="browser-default custom-select form-control" name="id_carrera">
                        @foreach($carreras as $carrera)
                            @if ($carrera->nombre == 'Ingeniería en Sistemas Computacionales')
                                <option value="{{ $carrera->id }}" selected="selected">{{ $carrera->nombre }}</option>
                            @else
                                <option value="{{ $carrera->id }}">{{ $carrera->nombre }}</option>
                            @endif
                        @endforeach
                    </select>
                </div>
            </div>
        

            <div class="form-group row">
                <label class="col-md-4 col-form-label text-md-right ">{{ __('Tipo Usuario:') }}</label>
                
                <div class="col-md-6">
                    <select id="id_tipo" type="number" class="browser-default custom-select form-control" name="id_tipo">
                        
                    </select>
                </div>
            </div>

            <div class="table-responsive" id="tabla">
                <table class="table table-striped table-hover table-bordered tabla-tam table-responsive" >
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Email</th>
                        <th>Tipo Usuario</th>
                        <th>Carrera</th>
                        <th>Editar</th>
                        <th>Eliminar</th>

                    </tr>
                    <tbody id="usuarios">
                    
                    </tbody>
                </table>
            </div>
            <a class="btn btn-primary" id="n" href="{{ route('addUsuario') }}">
                AGREGAR USUARIO
            </a>
        </center>
    </div>
@endsection()