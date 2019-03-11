@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">ACERCA DE... Mariano García Calderón</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <header>
                <h1>
                    <center>
                        <font color="blue">
                            MARIANO GARCÍA CALDERÓN
                        </font>
                    </center>				
                </h1>
                    </header>
                    <main>
                        <section>
                            <img src="{{ asset('images/foto-mgc.jpeg') }}" width="400" height="400" align="right">
                                <center>
                                <p>
                                <p>
                                    <b>Objetivo Profesional</b> 
                                <p>
                                <p>
                                    Superarme en todos los aspectos de mi vida, brindando lo mejor de mí 
                                <p>
                                <p>
                                    cada día, tanto en el aspecto laboral como en el aspecto personal.
                                <p>
                                </center>
                                <p>	
                                    <ul>
                                        <li><font color="gray"><b>Datos personales</b></font></li>
                                            <ul>
                                                <li>Tel: 351-118-3526</li>
                                                <li>e-mail: mariano.garcia1808@outlook.com</li>
                                                <li>Dirección: Adolfo Ruiz Cortinez #1 Quiringüicharo Mich. 59732</li>
                                                <li>Fecha de nacimiento: 18/Agosto/1997</li>
                                                <li>Estado civil: Soltero</li>
                                                <li>Curp: GACM970818HMNRLR07</li>
                                            </ul>
                                            <p>
                                            <p>
                                        <li><font color="gray"><b>Idiomas</b></font></li>
                                            <ul>
                                                <li>Español: natal</li>
                                                <li>Inglés: B1 (CEFR)</li>
                                            </ul>
                                            <p>
                                            <p>
                                        <li><font color="gray"><b>Software</b></font></li>
                                            <ul>
                                                <li>Cisco Packet Tracer</li>
                                                <li>VMware Workstation</li>
                                                <li>Oracle VM VirtualBox</li>
                                                <li>SQL Management Studio</li>
                                                <li>Oracle SQL Developer</li>
                                                <li>IDE netbeans</li>
                                            </ul>
                                            <p>
                                            <p>
                                        <li><font color="gray"><b>Lenguajes de programación</b></font></li>
                                            <ul>
                                                <li>HTML</li>
                                                <li>Java</li>
                                            </ul>
                                            <p>
                                            <p>
                                        <li><font color="gray"><b>Grado de estudios</b></font></li>
                                            <p>
                                            <p>
                                            <ul>
                                                    <details>
                                                        <summary>Licenciatura</summary>
                                                            <p>Instituto Tecnológico de Estudios Superiores de Zamora (ITESZ)</p>
                                                            <p>(Actualmente cursando el 8vo semestre de la carrera Ingenieria en Sistemas Computacionales)</p>
                                                            <p>Cursos</p>
                                                                <ul>
                                                                    <li>CCNA Routing and Switching: Introducción a Redes (2017)</li>
                                                                    <li>CCNA Routing and Switching: Principios básicos de Routing and Switching (2018)</li>
                                                                    <li>CCNA Routing and Switching: Escalamiento de Redes (2018)</li>
                                                                    <li>CCNA Routing and Switching: Conexión de Redes (Actualmente cursando)</li>
                                                                </ul>
                                                    </details>
                                                    <p>
                                                    <p>
                                                    <details>
                                                        <summary>Media Superior</summary>
                                                            <p>Colegio de Bachilleres del Estado de Michoacán Plantel Ecuandureo (COBAEM)</p>
                                                            <p>2012-2015</p>
                                                            <ul>
                                                                <li>Participación sectorial y estatal en concurso Temas de Desarrollo Interdisiplinario</li>
                                                            </ul>
                                                    </details>
                                            </ul>
                                            <p>
                                            <p>
                                            <li><font color="gray"><b>Experiencia Laboral</b></font></li>
                                            <ul>
                                                <p>Agricultura familiar</p>
                                                <p>Ayudante</p>
                                                <p>2016-2019</p>
                                            </ul>
                                    </ul>					
                                <p>
                        </section>
                    </main>
                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection