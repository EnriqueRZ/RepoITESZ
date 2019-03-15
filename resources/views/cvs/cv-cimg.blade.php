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

                    <header>
                        <center>
                            <font size="14" face="Arial">
                                <br> Carlos Iván Martínez Gutiérrez </br>
                            </font>

                            <font align="left">
                            <br>
                            Juana Pavón #239 Zamora Michoacán 5605553 3517474533 Código Postal 59650 carlos14img@gmail.com Facebook:Carlos Iván Gutiérrez  Instragram: @carlos14img
                            </br><br></br>
                            <img align="center" src="{{ asset('images/foto-cimg.jpg') }}" width="350" lenght="300">
                            </font>
                        </center>
                            <aside>
                                <font align="left" size="4" face="Arial">
                                    <br><b>Resumen</b></br>
                                    <li> Planificacion de pruebas, diseño de casos, ejecucion de pruebas por medios manuales y automatizados. </li>
                                    <li> Respaldo con formacion en el área incluyendo Ingenieria en Sistemas (en curso) </li>
                                    <li> Investigador y proponente de nuevas metodologías, participando en implementaciones para el software. </li>
                                    <li>Cursos de nivel 1, nivel 2, nivel 3 y nivel 4 (en curso) de Cisco CCNA. </li>
                                    <li>Experiencia en el paquete de Microsoft Office. </li>
                                    <li>Nivel intermedio en Administración de Sistemas Operativos de Red.</li> 
                                    <li>Alcanzo nivel intermedio en Java</li>
                                    <li>Nivel 1, nivel 2, nivel 3, nivel 4 y nivel 5 en inglés Cambridge.</li>
                                    <li>Manejo en el diseño de páginas web. </li>
                                <hr>
                                <br><b>Habilidades técnicas</b></br>
                                <br>
                                <li>Java</li>
                                <li>Microsoft SQL Server</li>
                                <li>Unity</li>
                                <li>VM Ware</li>
                                <li>Cisco Packet Tracer</li>
                                <li>NetBeans</li>
                                <li>HTML</li>
                                <li>Virtual Box</li>
                                <li>Conexiones a escritorio remoto</li>
                                <li>Dia</li>
                                <li>Derive for windows</li>
                                <li>Sublime Text 2</li>
                                </br>
                                </hr>
                                <hr>
                                <br><b>Experiencia profesional</b></br>
                                <br>
                                <div id="cuerpo">
                                        
                                        <header> Ejecución del ciclo de pruebas de software, desde la planificación, diseño, ejecución en aplicaciones desarrolladas en Java y Oracle, pruebas funcionales, integradas reporte de incidencia y pruebas de carga (estrés) en tiendas en línea con los siguientes resultados: </header> 
                                        <li> Identificó causa de interrupciones en aplicación</li>
                                        <li> Identificó error en diseno funcional de la aplicación</li>
                                        <li> Implementó proyecto de automatización de pruebas</li>
                                        <li> Implementó la transición hacia la metodologia de desarrollo en el sistema de software</li>
                                        <li> Excelente identificación y documentación de errores. </li>
                                        <li> Identificó errores en aplicación</li>
                                        <li>Contribuyente en proyecto de automatización de pruebas </li>

                                    <br><b> Educación y Credenciales </b> </br>
                                    <div align="left">
                                        <br>Ingeniería en Sistemas Computacionales (en curso) </div> <div align="center"> ITESZ <b> </br>
                                </div>
                                </hr>
                                </font>
                            </aside>
                    </header>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection