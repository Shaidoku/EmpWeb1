@extends('admin.baseAdmin')

@section('container')
	<div class="col-md-8">
		<div class="box box-success">
			<div class="box-heder with-border">
				<h3 class="box-title"><center>Noticia</center></h3>
			</div>
			<div class="box-body">
				<h4>Id</h4>
				<ul class="list-group">
					<li class="list-group-item"> 
						{{$new->id}}
					</li>
				</ul>
				<h4>Titulo</h4>
				<ul class="list-group">
					<li class="list-group-item"> 
						{{$new->title}}
					</li>
				</ul>
				<h4>Contenido</h4>
				<ul class="list-group">
					<li class="list-group-item"><p>{!!$new->excerpt!!}</p></li>
				</ul>
				<h4>Link</h4>
				<ul class="list-group">
					<li class="list-group-item"><p>{{$new->link}}</p></li>
				</ul>
				<h4>Fecha de publicacion</h4>
				<ul class="list-group">
					<li class="list-group-item">{{$new->fecha}}</li>
				</ul>
				<h4>Categoria</h4>
				<ul class="list-group">
					<li class="list-group-item">{{$new->category->name}}</li>
				</ul>
			</div>
		</div>
	</div>
@stop
