@extends('admin.baseAdmin')

@section('container')
    <div class="box box-success">
        <div class="box-header">
            <h3 class="box-title">Todas las noticias</h3>
        </div>
        <div class="box-body">
            <table id="news-table" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Titulo</th>
                        <th>Contenido</th>
                        <th>Fecha y hora de publicación</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($news as $new)
                        <tr>
                 	        <td>{{$new->id}}</td>
                 	        <td>{{$new->title}}</td>
                 	        <td>{!!$new->excerpt!!}</td>
                 	        <td>{{$new->fecha}}</td>
                 	        <td> 
                                <a href="{{route('admin.news.show', $new)}}" target="_blanki" class="btn btn-xs btn-default"><i class="fa fa-eye"></i></a> 
                 		        <a href="" class="btn btn-xs btn-info"><i class="fa fa-pencil"></i></a> 
                                <form method="POST" action="{{route('admin.news.destroy', $new)}}" style="display: inline">
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
    <!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <form method="POST" action="{{route('admin.news.store')}}">
    {{ csrf_field() }}
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="btn btn-danger" aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Nueva Noticia</h4>
      </div>
      <div class="modal-body">
                        <div class="form-grup {{$errors->has('title') ? 'has-error' : ''}}">
                  <label>Titulo</label>
                    <input type="text" id="post-title" name="title" class="form-control" value="{{old('title')}}"
                    placeholder="Ingresa titulo" autofocus required>
                    {!!$errors->first('title','<span class="help-block">Campo obligatorio</span>')!!}
                  </div>
      </div>
      <div class="modal-footer">
        <button class="btn btn-success">Crear</button>
      </div>
    </div>
  </div>
</form>
</div>
<!-- Fin Modal -->
@stop
