@extends('admin.baseAdmin')

@section('container')
    <div class="box box-success">
        <div class="box-header">
            <h3 class="box-title">Todos los mensajes</h3>
        </div>
        <div class="box-body">
            <table id="news-table" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Asunto</th>
                        <th>Fecha y Hora</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($messages as $message)
                        <tr>
                 	        <td>{{$message->name}}</td>
                 	        <td>{{$message->asunto}}</td>
                 	        <td>{{$message->fecha}}</td>
                 	        <td> 
                                <a href="{{route('admin.messages.show', $message)}}" target="_blanki" class="btn btn-xs btn-default"><i class="fa fa-eye"></i></a> 
                                <form method="POST" action="{{route('admin.messages.destroy', $message)}}" style="display: inline">
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
