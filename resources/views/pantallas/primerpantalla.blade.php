@extends('pantallas.principal')

@section('main')
    <center>
        <div class="content">
            <h1 class="title1">
                Hola, {{ Auth::user()->nombre }}. Bienvenido al sistema 
                de repositorio didáctico <br> del Instituto Tecnológico de Estudios Superiores de Zamora, <br>
                en el cual prodras encontrar una gran diversidad de material <br> que te puede ayudar a llevar 
                mejor tus materias.
            </h1> 
        </div>
    </center>
@endsection()