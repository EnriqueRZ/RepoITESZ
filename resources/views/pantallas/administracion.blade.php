@extends('pantallas.principal')

@section('main')
    <center>
        <div class="content">
            <h1 class="title1">
                Panel de administración
                <br><br>
                <div class="semestres" >
                    <button type="submit" class="btnS btn-primary">
                        Material didactico
                        <li><a href="{{ route('view-addmaterial' }}">{{ Agregar material }}</a></li>
                    </button>
                    <button type="submit" class="btnS btn-primary">
                        Alumnos
                    </button>          
                </div>
   
            </h1> 
        </div>
    </center>
@endsection()