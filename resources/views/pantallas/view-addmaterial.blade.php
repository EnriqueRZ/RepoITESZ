@extends('pantallas.principal')

@section('main')

    <div>
        <form class="card" action="#" method="post" autocomplete="on">
            <fieldset>
                <legend class="uno">
                    Agregar material didáctico
                </legend>
                <p>
                <p>
                <label for="name" class="col-md-4 col-form-label">
                    Carrera:
                </label>
                    <select class="combos col-md-6">
                        <option selected>ISC</option> 
                        <option>IIA</option>
                        <option>IGE</option>
                        <option>IE</option>
                        <option>II</option>
                        <option>CP</option>
                        <option>ITICS</option>
                    </select>
                <br><p><p>
                <label for="name" class="col-md-4 ">
                    Semestre:
                </label>
                    <select class="combos col-md-6">
                        <option selected>1ro</option> 
                        <option>2do</option>
                        <option>3ro</option>
                        <option>4to</option>
                        <option>5to</option>
                        <option>6to</option>
                        <option>7mo</option>
                        <option>8vo</option>
                    </select>
                        <br>
                        <p>
                        <p>
                    <label for="name" class="col-md-4 col-form-label">
                        Materia:
                    </label>
                        
                        <select class="combos col-md-6">
                            <option selected>Programación Web</option> 
                            <option>CCNA 4</option>
                            <option>Administración de Redes</option>
                            <option>Inteligencia Artificial</option>
                            <option>Taller de Redes WAN</option>
                        </select>
                        <br>
                        <p>
                        <p>
                    <label for="name" class="col-md-4 col-form-label">
                        Unidad:
                    </label>
                        
                        <select class="combos col-md-6">
                            <option selected>1</option> 
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                            <option>6</option>
                        </select>
                        <br>
                        <p>
                        <p>
                    <label for="name" class="col-md-4 col-form-label">
                        Material:
                    </label>
                        
                        <input type="text" class="combos col-md-6" name="usuario" placeholder="Material" required>
                        <br>
                        <p>
                        <p>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    SUBIR
                                </button>
                            </div>
                        </div>
                    </fieldset>
        </form>
    </div>
@endsection()