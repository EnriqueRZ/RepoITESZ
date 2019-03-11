@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">ACERCA DE... José Enrique Ramírez Zúñiga</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <section>
                    <h1>
                        <center>
                            <font color="blue">
                                JOSÉ ENRIQUE RAMÍREZ ZÚÑIGA
                            </font>
                        </center>				
                    </h1>
                        <center>
                            <img src="{{ asset('images/foto-jerz.jpg') }}" width="280" height="330" align="right">
                        </center>
                        SOY UN DESARROLLADOR DE SOFTWARE PRINCIPIANTE, DESEOSO DE </br>
                        APRENDER Y DE MEJORAR MIS HABILIDADES EN EL MUNDO DE LA</br>
                        PROGRAMACIÓN. INTERESADO POR LAS TECNOLOGÍAS LIBRES, EL</br>
                        TRABAJO EN EQUIPO Y EL APRENDIZAJE CONTINUO.</br>
                        <hr>
                    <section>
                    <ul>
                        <h1>
                            <font color="blue">
                                DATOS PERSONALES
                            </font>
                        </h1>
                        <li><p>VALLE REAL #53, COL. SAN JOSÉ, ZAMORA, MICH.</p></li>
                        <li><p>14/MARZO/1997, ZAMORA, MICH.</p></li>       
                        <li><p>RAZE970314HMNMXN01</p></li>
                        <li><p>SOLTERO</p></li>
                        <hr>
                    </ul>
                    <ul>
                        <h1>
                            <font color="blue">
                                    ESTUDIOS/DATOS FORMATIVOS
                            </font>
                        </h1>
                        <li><p><b>ING. SISTEMAS COMPUTACIONALES</b></br>
                            INSTITUTO TECNOLÓGICO DE ESTUDIOS SUPERIORES DE ZAMORA </br>
                            AGOSTO 2015-2019(ACTUAL)
                        </p></li>
                        <hr>
                    </ul>
                    <ul>
                        <h1>
                            <font color="blue">
                                IDIOMAS
                            </font>
                        </h1>
                        <li><p><b>ESPAÑOL</b> (NATIVO)</p></li>
                        <li><p><b>INGLÉS</b> B1(CEFR)</p></li>
                        <hr>
                    </ul>
                    <ul>
                        <h1>
                            <font color="blue">
                                APTITUDES
                            </font>
                        </h1>
                        <li><p><b>LENGUAJES DE PROGRAMACIÓN</b></br>
                            JAVA </br> PYTHON </br> PHP </br> ENSAMBLADOR 8086
                            </br> ARDUINO
                        </p></li>
                        <li><p><b>SISTEMAS OPERATIVOS</b></br>
                            LINUX </br> WINBUGS </br>
                        </p></li>
                        <li><p><b>BASE DE DATOS</b></br>
                            MySQL </br> ORACLE SQL DEVELOPER </br> SQL SERVER
                        </p></li>
                        <li><p><b>CONTOLADOR DE VERSIONES</b></br>
                            GIT </br> GITHUB
                        </p></li>
                        <hr>
                    </ul>
                    <ul>
                        <h1>
                            <font color="blue">
                                EXPERIENCIA LABORA
                            </font>
                        </h1>
                        <li><p><b>AIRES ACONDICIONADOS DEL SOL</b> </br>
                            ZAMORA, MICH. AYUDANTE </br>
                            AGOSTO DEL 2017-PRESENTE
                        </p></li>
                        <hr>
                    </ul>
                    <ul>
                        <h1>
                            <font color="blue">
                                CONTACTOS
                            </font>
                        </h1>
                        <li><p><b>TELÉFONO</b> 351 1234168</p></li>
                        <li><p><b>E-MAIL</b> jramirez348@accitesz.com</p></li>
                        <li><p><b>LINKEDIN:</b><a href="https://www.linkedin.com/in/josé-enrique-ramírez-zúñiga-7a0795124/">
                        https://www.linkedin.com/in/josé-enrique-ramírez-zúñiga-7a0795124/</br></a></p></li>
                        <li><p><b>GITHUB</b><a href="https://github.com/EnriqueRZ">https://github.com/EnriqueRZ</a></br></p></li>
                    </ul>
                </section>
                    </section>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection