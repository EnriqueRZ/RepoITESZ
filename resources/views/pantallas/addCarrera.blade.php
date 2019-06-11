@extends('pantallas.principal')
<meta name="csrf-token" content="{{ csrf_token() }}">
@section('main')

@include('flash::message')
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
<script src="{{ asset('js/carrera.js') }}"></script>
	@if(session()->has('flash_notification.important'))
		<button type="button"
				class="close table-tam"
				data-dismiss="alert"
				aria-hidden="true"
		>&times;</button>
	@endif	

<form name="miFormulario" action="{{ route('storeC') }}" method="POST" enctype="multipart/form-data" autocomplete="on">
	@csrf
<div class="container" >
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Agregar carrera') }}</div>

					<br>
					<div class="form-group row">
						<label class="col-md-4 col-form-label text-md-right">{{ __('Nombre:') }}</label>
						<div class="col-md-6">
							<input id="nombre" type="text" class="form-control" name="nombre" required>
						</div>
					</div>

                    <br>
					<div class="form-group row">
						<label class="col-md-4 col-form-label text-md-right">{{ __('Archivo:') }}</label>
						<div class="col-md-6">
							<input id="plan_estudios" type="file" accept="images/* .pdf .doc .pptx," class="form-control" name="plan_estudios" required>
						</div>
					</div>

                    <br>
					<div class="form-group row">
						<label class="col-md-4 col-form-label text-md-right">{{ __('Número de semestres:') }}</label>
						<div class="col-md-6">
							<input id="cantidad_semestre" type="number" class="form-control" name="cantidad_semestre" required>
						</div>
					</div>
					
					<div class="form-group row mb-0">
						<div class="col-md-10 offset-md-4">
							<button type="submit" class="btn btn-primary">
							{{ __('AGREGAR') }}
							
							</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

</form>    
@endsection()