@extends('layouts.app')
@section('content')
<head>
<link href="{{ asset('/css/style.css') }}" rel="stylesheet">
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
    <aside>
        <div class="lateral" >

            <button type="submit" class="btn btn-primary">
                ING. SISTEMAS COMPUTACIONALES
            </button>

            <button type="submit" class="btn btn-primary">
                ING. TECNOLOGÍAS DE LA INFORMA.
            </button>

            <button type="submit" class="btn btn-primary">
                ING. GESTIÓN EMPRESARIAL 
            </button>

            <button type="submit" class="btn btn-primary">
                ING. ELECTRÓNICA
            </button>

            <button type="submit" class="btn btn-primary">
                ING. INDUSTRIAL
            </button>

            <button type="submit" class="btn btn-primary">
                ING. INDUSTRIAL ALIMENTARIAS
            </button>

            <button type="submit" class="btn btn-primary">
                CONTADURÍA PÚBLICA
            </button>
            
        </div>
    </aside>
    @endsection
</body>


