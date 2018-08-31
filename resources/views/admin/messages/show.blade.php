@extends('admin.baseAdmin')

@section('container')
	<div class="col-md-8">
		<div class="box box-success">
			<div class="box-heder with-border">
				<h3 class="box-title"><center>Mensaje</center></h3>
			</div>
			<div class="box-body">
				<h4>Id</h4>
				<ul class="list-group">
					<li class="list-group-item"> 
						{{$message->id}}
					</li>
				</ul>

				<h4>Fecha y hora</h4>
				<ul class="list-group">
					<li class="list-group-item">{{$message->fecha}}</li>
				</ul>
				<h4>Remitente</h4>
				<ul class="list-group">
					<li class="list-group-item"> 
						{{$message->name}}
					</li>
				</ul>
				<h4>Asunto</h4>
				<ul class="list-group">
					<li class="list-group-item"><p>{{$message->asunto}}</p></li>
				</ul>
				<h4>Contenido</h4>
				<ul class="list-group">
					<li class="list-group-item"><p>{{$message->mensaje}}</p></li>
				</ul>
				<h4>Correo</h4>
				<ul class="list-group">
					<li class="list-group-item">{{$message->email}}</li>
				</ul>
			</div>
		</div>
	</div>
@stop