@extends('pantallas.principal')

@section('main')
    <div>
        
        <center>
            <h3> {{ $name }} </h3> <br>
            <h4>Semestre {{ $materias }}</h4>
        </center>

        <center><h3></h3><br>
         
        </center>
    </div>

@endsection()