@extends('pantallas.principal')

@section('main')
@include('flash::message')
    <script>
        function confirmar() {
            if(confirm('¿Estas seguro de visitar esta url?'))
                return true;
            else
                return false;
        }
    </script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <div>
        <center>
            <h3> {{ $name }}</h3> <br>
            @if(session()->has('flash_notification.important'))
                <button type="button"
                        class="close table-tam"
                        data-dismiss="alert"
                        aria-hidden="true"
                >&times;</button>
            @endif
        </center>

        <center>
            
            <div class="table-responsive">
                <table class="table table-striped table-hover table-bordered tabla-tam">
                    <tr>
                        <th>Nombre</th>
                        <th>Tipo</th>
                        <th>Recurso</th>
                        <th>Link</th>
                        @if(Auth::user()->id_tipo_usuario > 1)
                            <th>ID</th>
                            <th>Editar</th>
                            <th>Eliminar</th>
                        @endif
                    </tr>
                    @foreach($materias as $materia)
                        <tr>
                            <td>  {{ $materia->nombre }} </td>
                            <td>  {{ $materia->tipo }} </td>
                            <td> <a href="{{ route('download', $materia->recurso) }}">{{ $materia->recurso }}</a> </td>
                            <td>  <a href="{{ $materia->link }}" target="_blank">{{ $materia->link }}</a></td>
                            @if(Auth::user()->id_tipo_usuario > 1)
                                <td>  {{ $materia->id }} </td>
                                <td> <a class="btn btn-primary" id='n'
                                    onclick="return confirmar()"
                                        href="{{ route('editMaterial', $materia->id) }}">
                                        EDITAR
                                    </a>
                                </td>
                                <td> <a class="btn btn-danger" id='n'
                                        onclick="return confirmar()"
                                        href="{{ route('view-material-delete', [$materia->id, $id_materia, $name]) }}">

                                        <span aria-hidden="true" class="glyphicon glyphicon-trash">
                                        </span>
                                        ELIMINAR
                                    </a>
                                </td>
                            @endif
                        </tr>
                    @endforeach
                </table>
            </div>
            <div>
                @if(Auth::user()->id_tipo_usuario > 1)
                    <a class="btn btn-success" id='n' 
                        href="{{ route('view-add', [$id_materia, $name]) }}">
                        Agregar material
                    </a>
                @endif
            </div>
        </center>
        
    </div>

@endsection()