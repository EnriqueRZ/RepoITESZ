@extends('pantallas.principal')

@section('main')
<center>
    <div class="container" >
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Panel de administración') }}</div>

                        <div class="panel">
                            <a class="btn btn-danger" id='n'
                                href="{{ route('view-carrera') }}">
                                Carreras
                            </a>

                            <a class="btn btn-danger" id='n'
                                href="{{ route('usuarios') }}">
                                Usuarios
                            </a>       
                        </div>
   
                    </div>
                </div>
            </div>
        </div>
    </div>
</center>
@endsection()