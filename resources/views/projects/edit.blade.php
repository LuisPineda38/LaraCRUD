@extends('projects.layout')
@section('content')
    <div>
        <h2>Editar proyecto</h2>
        <form action="{{url('projects/'.$projects->id)}}" method="post">
            {!! csrf_field() !!}
            @method('PATCH')
            <input type="hidden" name="id" value="{{ $projects->id }}" id="id">
            <label>Nombre del proyecto</label><br>
            <input type="text" name="NombreProyecto" id="NombreProyecto" value="{{ $projects->NombreProyecto }}"><br><br>
            <label>Fuente de los fondos</label><br>
            <input type="text" name="fuenteFondos" id="fuenteFondos" value="{{ $projects->fuenteFondos }}"><br><br>
            <label>Monto planificado</label><br>
            <input type="number" name="MontoPlanificado" id="MontoPlanificado"
                value="{{ $projects->MontoPlanificado }}"><br><br>
            <label>Monto patrocinado</label><br>
            <input type="number" name="MontoPatrocinado" id="MontoPatrocinado"
                value="{{ $projects->MontoPatrocinado }}"><br><br>
            <label>Monto fondos propios</label><br>
            <input type="number" name="MontoFondosPropios" id="MontoFondosPropios"
                value="{{ $projects->MontoFondosPropios }}"><br><br>
            <input type="submit" value="Actualizar"><br><br>
            <a href="{{ url('/projects/') }}">
                Regresar
            </a>
        </form>
    </div>

@stop
