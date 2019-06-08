@extends('pantallas.principal')
<meta name="csrf-token" content="{{ csrf_token() }}">
@section('main')
@include('flash::message')
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
<script src="{{ asset('js/material.js') }}"></script>

	@if(session()->has('flash_notification.important'))
		<button type="button"
				class="close table-tam"
				data-dismiss="alert"
				aria-hidden="true"
		>&times;</button>
	@endif	

<form name="miFormulario" action="{{ route('updateMaterial', $material->id) }}" enctype="multipart/form-data" method="POST" autocomplete="on">
	@csrf
	<fieldset>
		<legend class="uno">
			
		</legend>
	</fieldset>
	
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Editar material') }}</div>

					<br><br>
					<div class="form-group row">
						<label class="col-md-4 col-form-label text-md-right ">{{ __('Carrera:') }}</label>
						
						<div class="col-md-6">
							<select id="id_carrera" type="text" class="browser-default custom-select" name="id_carrera">
								@foreach($carreras as $carrera)
									@if ($carrera->nombre == '$materia->nombre')
										<option value="{{ $carrera->id}}" selected="selected">{{ $carrera->nombre }}</option>
									@else
										<option value="{{ $carrera->id }}">{{ $carrera->nombre }}</option>
									@endif
								@endforeach
							</select>
						</div>
					</div>

					<br>
					<div class="form-group row">
						<label class="col-md-4 col-form-label text-md-right ">{{ __('Materias:') }}</label>
						
						<div class="col-md-6">
							<select id="id_materia" type="text" class="browser-default custom-select" name="id_materia">
								<option value="{{ $material->id_materia }}" selected="selected">{{ $name }}</option>
							</select>
						</div>
					</div>

					<br>
					<div class="form-group row">
						<label class="col-md-4 col-form-label text-md-right">{{ __('Tipo:') }}</label>
						<div class="col-md-6">
							<input id="tipo" type="text" value="{{ $material->tipo }}" class="form-control" name="tipo" required>
						</div>
					</div>

					<br>
					<div class="form-group row">
						<label class="col-md-4 col-form-label text-md-right">{{ __('Nombre material:') }}</label>
						<div class="col-md-6">
							<input id="nombre" type="text" value="{{ $material->nombre }}" class="form-control" name="nombre" required>
						</div>
					</div>

					<br>
					<div class="form-group row">
						<label class="col-md-4 col-form-label text-md-right">{{ __('URL:') }}</label>
						<div class="col-md-6">
							<input id="link" type="url" value="{{ $material->link }}" class="form-control" name="link" required>
						</div>
					</div>

					<br>
					<div class="form-group row">
						<label class="col-md-4 col-form-label text-md-right">{{ __('Archivo:') }}</label>
						<div class="col-md-6">
							<input id="recurso" type="file" value="{{ $material->recurso }}" accept="images/* .pdf .doc" class="form-control" name="recurso">
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