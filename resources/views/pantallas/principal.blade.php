@extends('layouts.app')
@section('content')
    <head>
        
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
    </head>

    <body>
    @stack('styles')
    <div class="container">
        <div class="row justify-content-center">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
        </div>
    </div>

    <main>
        <article class="principal">
                @section('main')
                    
                @show
        </article>

        <!--
        <footer>
            <div class="footer">
                Derechos reservados ITESZ 2019 - 0000
            </div>
        </footer>
        -->
    </main>
@endsection
    </body>