@extends('admin.baseAdmin')

@section('container')
	<div class="col-md-9">
		<div class="box box-success">
			<div class="box-heder with-border">
				<h3 class="box-title"><center>Evento</center></h3>
			</div>
			<div class="box-body">
				<h4>Id</h4>
				<ul class="list-group">
					<li class="list-group-item"> 
						{{$event->id}}
					</li>
				</ul>
				<h4>Titulo</h4>
				<ul class="list-group">
					<li class="list-group-item"> 
						{{$event->title}}
					</li>
				</ul>
				<h4>Contenido</h4>
				<ul class="list-group">
					<li class="list-group-item"><p>{{$event->excerpt}}</p></li>
				</ul>
				<h4>Fecha</h4>
				<ul class="list-group">
					<li class="list-group-item">{{$event->fecha}}</li>
				</ul>
				<h4>Hora</h4>
				<ul class="list-group">
					<li class="list-group-item">{{$event->hora}}</li>
				</ul>
				<h4>Link a maps</h4>
				<ul class="list-group">
					<li class="list-group-item"><p>{{$event->linkmaps}}</p></li>
				</ul>
				<h4>Costo</h4>
				<ul class="list-group">
					<li class="list-group-item">{{$event->costo}}</li>
				</ul>
				<h4>Link</h4>
				<ul class="list-group">
					<li class="list-group-item"><p>{{$event->link}}</p></li>
				</ul>
				<h4>Contacto</h4>
				<ul class="list-group">
					<li class="list-group-item">{{$event->tlf}}</li>
				</ul>
			</div>
		</div>
	</div>
@stop
