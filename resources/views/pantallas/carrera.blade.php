@extends('pantallas.principal')
<meta name="csrf-token" content="{{ csrf_token() }}">
@section('main')
@include('flash::message')
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
<script src="{{ asset('js/carrera.js') }}"></script>
<script>
        function confirmar() {
            if(confirm('¿Estas seguro de visitar esta url?'))
                return true;
            else
                return false;
        }
    </script>

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <center>
    <h2>Carreras</h2>
    <div class='princi'>
        
            @if(session()->has('flash_notification.important'))
                <button type="button" class="close table-tam"
                        data-dismiss="alert"
                        aria-hidden="true"
                >&times;</button>
            @endif
        
            <div class="table-responsive" id="tabla">
                <table class="table table-striped table-hover table-bordered tabla-tam table-responsive" >
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Plan de Estudios</th>
                        <th>Cantidad Semestres</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
                    </tr>
                    <tbody id="carreras">
                    
                    </tbody>
                </table>
            </div>
            <a class="btn btn-primary" id="n" href="{{ route('addCarrera') }}">
                Agregar carrera
            </a>
        
    </div>
    </center>
@endsection()