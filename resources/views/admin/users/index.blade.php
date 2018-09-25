@extends('admin.baseAdmin')

@section('container')
    <div class="box box-success">
        <div class="box-header">
            <h3 class="box-title">Todos los usuarios</h3>
        </div>
        <div class="box-body">
            <table id="news-table" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Correo</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                 	        <td>{{$user->names}}</td>
                 	        <td>{{$user->apeP}}</td>
                 	        <td>{{$user->email}}</td>
                 	        <td> 
                                <a href="{{route('admin.users.show', $user)}}" target="_blanki" class="btn btn-xs btn-default"><i class="fa fa-eye"></i></a> 
                 		        <a href="" class="btn btn-xs btn-info"><i class="fa fa-pencil"></i></a> 
                                <form method="POST" action="{{route('admin.users.destroy', $user)}}" style="display: inline">
                                    {{csrf_field()}} {{method_field('DELETE')}}
                 	                <button class="btn btn-xs btn-danger" onclick="return confirm('¿Está seguro de querer eliminar?')"><i class="fa fa-times"></i>
                 	                </button>
                                </form> 
                 	        </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop
