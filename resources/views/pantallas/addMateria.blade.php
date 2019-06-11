@extends('pantallas.principal')
<meta name="csrf-token" content="{{ csrf_token() }}">
@section('main')

@include('flash::message')
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
<script src="{{ asset('js/materia.js') }}"></script>
	@if(session()->has('flash_notification.important'))
		<button type="button"
				class="close table-tam"
				data-dismiss="alert"
				aria-hidden="true"
		>&times;</button>
	@endif	

<form name="miFormulario" action="{{ route('addMateria') }}" method="POST" autocomplete="on">
	@csrf
	<fieldset>
		<legend class="uno">
			{{ $info->nombre }}
		</legend>
	</fieldset>
	
<div class="container" >
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Agregar materia') }}</div>

					<br><br>
					<div class="form-group row">
						<label class="col-md-4 col-form-label text-md-right ">{{ __('Carrera:') }}</label>
						
						<div class="col-md-6">
							<select id="id_carrera" type="text" class="browser-default custom-select form-control" name="id_carrera">
								@foreach($carreras as $carrera)
									@if ($carrera->nombre == '$carrera->nombre')
										<option value="{{ $carrera->id }}" selected="selected">{{ $carrera->nombre }}</option>
									@else
										<option value="{{ $carrera->id }}">{{ $carrera->nombre }}</option>
									@endif
								@endforeach
							</select>
						</div>
					</div>

					<br>
					<div class="form-group row">
						<label class="col-md-4 col-form-label text-md-right">{{ __('Nombre:') }}</label>
						<div class="col-md-6">
							<input id="nombre" type="text" class="form-control" name="nombre" required>
						</div>
					</div>

					<br>
					<div class="form-group row">
						<label class="col-md-4 col-form-label text-md-right">{{ __('Núm. Semestre:') }}</label>
						<div class="col-md-6">
							<select id="id_semestre" type="text" class="browser-default custom-select form-control" name="id_semestre">
							
							</select>	
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