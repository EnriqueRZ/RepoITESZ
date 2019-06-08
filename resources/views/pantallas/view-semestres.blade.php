@extends('pantallas.principal')

@section('main')
    <div>
        
        <center>

            <h2> {{ $datosC->nombre }}</h2>


        </center>

        <center><h3>Semestres</h3><br>
        <div class="semestres" >
        @for ($i = 1 ; $i <=  $datosC->cantidad_semestre ; $i++)
            <button type="submit" class="btnS btn-light">
                Semestre {{ $i }}
                @foreach ($dat as $object)
                    @if( $object->semestre == $i )
                        <li>
                            <a href="{{ route('view-material', [$object->id, $object->nombre]) }}">
                                {{ $object->nombre }}
                            </a>
                        </li>
                    @endif
                @endforeach

                @if(Auth::user()->id_tipo_usuario > 1)
                    <!--
                    <a class="btn btn-danger" id='n'
                        href="{{ route('index', $datosC->id) }}">
                        Agregar materia
                    </a>
                    -->
                    <a class="btn btn-danger" id='n'
                        href="{{ route('admin', [$datosC->id, $i]) }}">
                        Administración
                    </a>
                @endif
            </button>
        @endfor
        </div>      
    
        <!--
            <div class="semestres" >
                <button type="submit" class="btnS btn-light">
                    1er Semestre
                    @foreach ($dat as $object)
                        @if( $object->semestre == 1 )
                        <li><a href="{{ route('view-material', [$object->id, $object->nombre]) }}">{{ $object->nombre }}</a></li>
                        @endif
                    @endforeach
                    @if(Auth::user()->id_tipo_usuario > 1)
                <a class="btn btn-danger" id='n'
                    href="{{ route('index', $datosC->id) }}">
                    Agregar materia
                </a>

                <a class="btn btn-danger" id='n'
                    href="{{ route('admin', $datosC->id) }}">
                    Administración
                </a>
                    @endif
                </button>

                <button type="submit" class="btnS btn-light">
                    2do Semestre
                    @foreach ($dat as $object)
                        @if( $object->semestre == 2 )
                        <li><a href="{{ route('view-material', [$object->id, $object->nombre]) }}">{{ $object->nombre }}</a></li>
                        @endif
                    @endforeach
                </button>

                <button type="submit" class="btnS btn-light">
                    3er Semestre 
                    @foreach ($dat as $object)
                        @if( $object->semestre == 3 )
                        <li><a href="{{ route('view-material', [$object->id, $object->nombre]) }}">{{ $object->nombre }}</a></li>
                        @endif
                    @endforeach
                </button>

                <button type="submit" class="btnS btn-light">
                    4to Semestre
                    @foreach ($dat as $object)
                        @if( $object->semestre == 4 )
                        <li><a href="{{ route('view-material', [$object->id, $object->nombre]) }}">{{ $object->nombre }}</a></li>
                        @endif
                    @endforeach
                </button>

                <button type="submit" class="btnS btn-light">
                    5to Semestre
                    @foreach ($dat as $object)
                        @if( $object->semestre == 5 )
                        <li><a href="{{ route('view-material', [$object->id, $object->nombre]) }}">{{ $object->nombre }}</a></li>
                        @endif
                    @endforeach
                </button>

                <button type="submit" class="btnS btn-light">
                    6to Semestre
                    @foreach ($dat as $object)
                        @if( $object->semestre == 6 )
                        <li><a href="{{ route('view-material', [$object->id, $object->nombre]) }}">{{ $object->nombre }}</a></li>
                        @endif
                    @endforeach
                </button>

                <button type="submit" class="btnS btn-light">
                    7to Semestre
                    @foreach ($dat as $object)
                        @if( $object->semestre == 7 )
                        <li><a href="{{ route('view-material', [$object->id, $object->nombre]) }}">{{ $object->nombre }}</a></li>
                        @endif
                    @endforeach
                </button>

                <button type="submit" class="btnS btn-light">
                    8vo Semestre
                    @foreach ($dat as $object)
                        @if( $object->semestre == 8 )
                        <li><a href="{{ route('view-material', [$object->id, $object->nombre]) }}">{{ $object->nombre }}</a></li>
                        @endif
                    @endforeach
                </button>
                <button type="submit" class="btnS btn-light">
                    9no Semestre
                    @foreach ($dat as $object)
                        @if( $object->semestre == 9 )
                        <li><a href="{{ route('view-material', [$object->id, $object->nombre]) }}">{{ $object->nombre }}</a></li>
                        @endif
                    @endforeach
                </button>
            </div>
        

            @if(Auth::user()->id_tipo_usuario > 1)
                <a class="btn btn-danger" id='n'
                    href="{{ route('index', $datosC->id) }}">
                    Agregar materia
                </a>

                <a class="btn btn-danger" id='n'
                    href="{{ route('admin', $datosC->id) }}">
                    Administración
                </a>
            @endif
            -->
        </center>
    </div>

@endsection()