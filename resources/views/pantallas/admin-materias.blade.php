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
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Semestre</th>
                        <th>Carrera</th>
                        @if(Auth::user()->id_tipo_usuario == 3)
                            <th>Editar</th>
                            <th>Eliminar</th>
                        @endif
                    </tr>
                    @foreach($materias as $materia)
                        <tr>
                            <td>  {{ $materia->id }} </td>
                            <td>  {{ $materia->nombre }} </td>
                            <td>  {{ $materia->semestre }} </td>
                            <td> {{ $materia->cname }} </td>
                            <td> <a class="btn btn-primary" id='n'
                                onclick="return confirmar()"
                                    href="{{ route('edit', $materia->id) }}">
                                    EDITAR
                                </a>
                            </td>
                                <td> <a class="btn btn-danger" id='n'
                                        onclick="return confirmar()"
                                        href="{{ route('deleteM', $materia->id) }}">

                                        <span aria-hidden="true" class="glyphicon glyphicon-trash">
                                        </span>
                                        ELIMINAR
                                    </a>
                                </td>
                            
                        </tr>
                    @endforeach
                </table>
            </div>
            <div>
                @if(Auth::user()->id_tipo_usuario > 1)
                <a class="btn btn-primary" id='n'
                    href="{{ route('index', [$id_carrera, $semestre]) }}">
                    Agregar materia
                </a>
                @endif
            </div>
        </center>
        
    </div>

@endsection()