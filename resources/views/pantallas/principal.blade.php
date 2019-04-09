@extends('layouts.app')
@section('content')
<head>
<link href="{{ asset('/css/style.css') }}" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
</head>
<body>


<div class="container">
    <div class="row justify-content-center">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
    </div>
</div>

<main class="">

<article class="principal">
        @section('main')
        
            HOLA
        
        @show
        </article>
    
    <!--
    <aside>
        <div class="lateral" >
            <button type="submit" class="btnN btn-primary">
                ING. SISTEMAS COMPUTACIONALES
            </button>

            <button type="submit" class="btnN btn-primary">
                ING. TECNOLOGÍAS DE LA INFORMA.
            </button>

            <button type="submit" class="btnN btn-primary">
                ING. GESTIÓN EMPRESARIAL 
            </button>

            <button type="submit" class="btnN btn-primary">
                ING. ELECTRÓNICA
            </button>

            <button type="submit" class="btnN btn-primary">
                ING. INDUSTRIAL
            </button>

            <button type="submit" class="btnN btn-primary">
                ING. INDUSTRIAL ALIMENTARIAS
            </button>

            <button type="submit" class="btnN btn-primary">
                CONTADURÍA PÚBLICA
            </button>
        </div>
    </aside>
    -->
    <footer>
        <div class="footer">
            Derechos reservados ITESZ 2019 - 0000
        </div>
    </footer>
</main>

    @endsection
</body>

