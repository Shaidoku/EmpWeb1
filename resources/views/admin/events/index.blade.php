@extends('admin.baseAdmin')

@section('container')
    <div class="box box-success">
        <div class="box-header">
            <h3 class="box-title">Todos los eventos</h3>
        </div>
        <div class="box-body">
            <table id="news-table" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Titulo</th>
                        <th>Descripcion</th>
                        <th>Fecha</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($events as $event)
                        <tr>
                 	        <td>{{$event->id}}</td>
                 	        <td>{{$event->title}}</td>
                 	        <td>{{$event->excerpt}}</td>
                 	        <td>{{$event->fecha}}</td>
                 	        <td> 
                                <a href="{{route('admin.events.show', $event)}}" target="_blanki" class="btn btn-xs btn-default"><i class="fa fa-eye"></i></a> 
                 		        <a href="" class="btn btn-xs btn-info"><i class="fa fa-pencil"></i></a> 
                                <form method="POST" action="{{route('admin.events.destroy', $event)}}" style="display: inline">
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
