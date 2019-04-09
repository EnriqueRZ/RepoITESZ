@extends('pantallas.principal')

@section('main')	
<form name="miFormulario" action="#" method="post" autocomplete="on">
	<fieldset>
		<legend class="uno">
			{{ __('messages.addFile') }}
			<br><br>
	</legend>
	Carrera:
		<select>
			<option selected>ISC</option> 
			<option>IIA</option>
			<option>IGE</option>
			<option>IE</option>
			<option>II</option>
			<option>CP</option>
			<option>ITICS</option>
		</select>
			<br><p><p>
		Semestre:
		<select>
			<option selected>1ro</option> 
			<option>2do</option>
			<option>3ro</option>
			<option>4to</option>
			<option>5to</option>
			<option>6to</option>
			<option>7mo</option>
			<option>8vo</option>
		</select>
		<br><p><p>
		Materia:
		<select>
			<option selected>Programación Web</option> 
			<option>CCNA 4</option>
			<option>Administración de Redes</option>
			<option>Inteligencia Artificial</option>
			<option>Taller de Redes WAN</option>
		</select>
		<br><p><p>
		Unidad:
		<select>
			<option selected>1</option> 
			<option>2</option>
			<option>3</option>
			<option>4</option>
			<option>5</option>
			<option>6</option>
		</select>
		<br><p><p>
		<label>Material:</label>
		<input type="text" name="usuario" placeholder="Material" required>
		<br><p><p>
		
		<input type="submit" name="Subir" value="Subir">
	</fieldset>
</form>    
@endsection()