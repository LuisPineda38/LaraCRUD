@extends('projects.layout')
@section('content')
    <div style="margin:20px;">
        <h2>
            Crear proyecto
        </h2>
        <div>
            <form action="{{ url('projects') }}" method="post">
                {!! csrf_field() !!}
                <label>Nombre</label><br>
                <input type="text" name="NombreProyecto" id="NombreProyecto"><br><br>
                <label>Fuente de los fondos</label><br>
                <input type="text" name="fuenteFondos" id="fuenteFondos"><br><br>
                <label>Monto planificado</label><br>
                <input type="number" name="MontoPlanificado" id="MontoPlanificado"><br><br>
                <label>Monto patrocinado</label><br>
                <input type="number" name="MontoPatrocinado" id="MontoPatrocinado"><br><br>
                <label>Monto fondos propios</label><br>
                <input type="number" name="MontoFondosPropios" id="MontoFondosPropios"><br><br>
                <input type="submit" value="Guardar proyecto"><br><br>
                <a href="{{ url('/projects/') }}">
                    Regresar
                </a>
            </form>
        </div>
    </div>
@endsection
