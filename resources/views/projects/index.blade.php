@extends('projects.layout')
@section('content')
    <div class="container">
        <div style="margin: 20px;">
            <div>
                <div>
                    <div>
                        <h2>CRUD - Proyectos</h2>
                        <hr>
                    </div>
                    <div>
                        <a href="{{ url('/projects/create') }}">
                            Nuevo
                        </a>
                        <br>
                        <br>
                        <div>
                            <style>
                                table,
                                th,
                                td {
                                    border: 1px solid black;
                                    border-collapse: collapse;
                                }
                            </style>
                            <table>
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Nombre de proyecto</th>
                                        <th>Fuente de fondos</th>
                                        <th>Monto planificado</th>
                                        <th>Monto patrocinado</th>
                                        <th>Monto fondos propios</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody style="text-align:center;">
                                    @foreach ($projects as $item)
                                        <tr>
                                            <td>{{ $item->id }}</td>
                                            <td>{{ $item->NombreProyecto }}</td>
                                            <td>{{ $item->fuenteFondos }}</td>
                                            <td>{{ $item->MontoPlanificado }}</td>
                                            <td>{{ $item->MontoPatrocinado }}</td>
                                            <td>{{ $item->MontoFondosPropios }}</td>
                                            <td>
                                                <div>
                                                    <a
                                                        href="{{ url('/project/' . $item->id) }}"><button>Visualizar</button></a>
                                                    <a
                                                        href="{{ url('/projects/' . $item->id . '/edit/') }}"><button>Actualizar</button></a>
                                                    <form method="POST" action="{{ url('/projects' . '/' . $item->id) }}"
                                                        accept-charset="UTF-8">
                                                        {{ method_field('DELETE') }}
                                                        {{ csrf_field() }}
                                                        <button type="submit">Eliminar</button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
