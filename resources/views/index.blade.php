
@extends('layouts.base')
@section('content')
    <div class="container">
        <div class="row" style="margin:20px;">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2 style="color:black">Laravel 10 CRUD (Rene Francisco Linares Lopez)</h2>
                    </div>
                    <div class="card-body">
                        <a href="{{ url('/project/create') }}" class="btn btn-success btn-sm" title="Agregar registro">
                            Agregar Registro
                        </a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nombre Projecto</th>
                                        <th>Fuente Projecto</th>
                                        <th>Monto Planificacion</th>
                                        <th>Monto Patrocinado</th>
                                        <th>Monto Fondos Propios</th>
                                        <th>Accions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($project as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->nombreProyecto }}</td>
                                        <td>{{ $item->fuenteFondos }}</td>
                                        <td>{{ $item->montoPlanificado }}</td>
                                        <td>{{ $item->montoPatrocinado }}</td>
                                        <td>{{ $item->montoFondosPropios }}</td>
  
                                        <td>
                                            <a href="{{ url('/project/' . $item->id) }}" title="View Project"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> Show</button></a>
                                            <a href="{{ url('/project/' . $item->id . '/edit') }}" title="Edit Project"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar</button></a>
  
                                            <form method="POST" action="{{ url('/project' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Project" onclick="return confirm("Confirm delete?")"><i class="fa fa-trash-o" aria-hidden="true"></i> Eliminar</button>
                                            </form>
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