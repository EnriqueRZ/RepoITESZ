@extends('pantallas.principal')

@section('main')
    <div>
        
        <center>

            <h2> {{ $datosC->nombre }}</h2>


        </center>

        <center><h3>Semestres</h3><br>
            <div class="semestres" >
                <button type="submit" class="btnS btn-primary">
                    1er Semestre
                    @foreach ($dat as $object)
                        @if( $object->semestre == 1 )
                        <li><a href="{{ route('view-material', [$object->id, $object->nombre]) }}">{{ $object->nombre }}</a></li>
                        @endif
                    @endforeach
                </button>

                <button type="submit" class="btnS btn-primary">
                    2do Semestre
                    @foreach ($dat as $object)
                        @if( $object->semestre == 2 )
                        <li><a href="{{ route('view-material', [$object->id, $object->nombre]) }}">{{ $object->nombre }}</a></li>
                        @endif
                    @endforeach
                </button>

                <button type="submit" class="btnS btn-primary">
                    3er Semestre 
                    @foreach ($dat as $object)
                        @if( $object->semestre == 3 )
                        <li><a href="{{ route('view-material', [$object->id, $object->nombre]) }}">{{ $object->nombre }}</a></li>
                        @endif
                    @endforeach
                </button>

                <button type="submit" class="btnS btn-primary">
                    4to Semestre
                    @foreach ($dat as $object)
                        @if( $object->semestre == 4 )
                        <li><a href="{{ route('view-material', [$object->id, $object->nombre]) }}">{{ $object->nombre }}</a></li>
                        @endif
                    @endforeach
                </button>

                <button type="submit" class="btnS btn-primary">
                    5to Semestre
                    @foreach ($dat as $object)
                        @if( $object->semestre == 5 )
                        <li><a href="{{ route('view-material', [$object->id, $object->nombre]) }}">{{ $object->nombre }}</a></li>
                        @endif
                    @endforeach
                </button>

                <button type="submit" class="btnS btn-primary">
                    6to Semestre
                    @foreach ($dat as $object)
                        @if( $object->semestre == 6 )
                        <li><a href="{{ route('view-material', [$object->id, $object->nombre]) }}">{{ $object->nombre }}</a></li>
                        @endif
                    @endforeach
                </button>

                <button type="submit" class="btnS btn-primary">
                    7to Semestre
                    @foreach ($dat as $object)
                        @if( $object->semestre == 7 )
                        <li><a href="{{ route('view-material', [$object->id, $object->nombre]) }}">{{ $object->nombre }}</a></li>
                        @endif
                    @endforeach
                </button>

                <button type="submit" class="btnS btn-primary">
                    8vo Semestre
                    @foreach ($dat as $object)
                        @if( $object->semestre == 8 )
                        <li><a href="{{ route('view-material', [$object->id, $object->nombre]) }}">{{ $object->nombre }}</a></li>
                        @endif
                    @endforeach
                </button>
                <button type="submit" class="btnS btn-primary">
                    9no Semestre
                    @foreach ($dat as $object)
                        @if( $object->semestre == 9 )
                        <li><a href="{{ route('view-material', [$object->id, $object->nombre]) }}">{{ $object->nombre }}</a></li>
                        @endif
                    @endforeach
                </button>
            </div>
        </center>
    </div>

@endsection()