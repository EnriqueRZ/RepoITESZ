@extends('pantallas.principal')

@section('main')

        <div>
            <center>
                <img src="{{ asset('images/LOGO ISC.png') }}" width="150" height="150">
            </center>

			<center><h3>Semestres</h3><br>
                <div class="semestres" >
                    <button type="submit" class="btnS btn-primary">
                        1er Semestre
                    </button>

                    <button type="submit" class="btnS btn-primary">
                        2do Semestre
                    </button>

                    <button type="submit" class="btnS btn-primary">
                        3er Semestre 
                    </button>

                    <button type="submit" class="btnS btn-primary">
                        4to Semestre
                    </button>

                    <button type="submit" class="btnS btn-primary">
                        5to Semestre
                    </button>

                    <button type="submit" class="btnS btn-primary">
                        6to Semestre
                    </button>

                    <button type="submit" class="btnS btn-primary">
                        7to Semestre
                    </button>

                    <button type="submit" class="btnS btn-primary">
                        8vo Semestre
                    </button>
                    <button type="submit" class="btnS btn-primary">
                        9no Semestre
                    </button>
                </div>
		    </center>
        </div>

@endsection()