@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">ACERCA DE</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <section>
            <ul>
                <li><p>¿<b>QUIENES SON</b> Y A QUÉ SE DEDICAN?</p>
                <p>R=Somos un grupo de estudiantes con ganas de desarrollar software</p>
                <li><p>¿<b>QUIENES</b> FORMAN PARTE DE SU EQUIPO?</p></li>
                <p>R=
                    <a href="{{ route('cv-jerz') }}"> José Enrique Ramírez Zúñiga </a><br>
                    <a href="{{ route('cv-mgc') }}">Mariano García Calderón</a> <br>
                    <a href="{{ route('cv-cimg') }}">Carlos Iván Martinez Gutierrez</a></p>        
                <li><p>¿<b>QUÉ OFRECEN</b> A SUS CLIENTES?</p></li>
                <p>R=Soluciones de software efectivas y a la medida</p>
                <li><p>¿<b>QUÉ LOS HACE DIFERENTES</b> DE OTROS COMPETIDORES?</p></li>
                <p>R=La forma de abordar los problemas y plantear las soluciones de una manera simple</p>
                <li><p>¿<b>POR QUÉ</b> LOS CLIENTES POTENCIALES DEBEN <b>CONFIAR</b> EN USTEDES?</p></li>
                <p>R=Uno de nuestros valores es la responsabilidad. Estamos comprometidos con todos nuestros clientes</p>
                <li><p>¿QUÉ <b>SOLUCIONES</b> LES PUEDEN <b>OFRECEN</b>?</p></li>
                <p>R=Aplicaciones web y de escritorio, implementando tecnologías nuevas.</p>
            </ul>
        </section>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
