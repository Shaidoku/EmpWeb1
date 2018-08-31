@extends('admin.baseAdmin')

@section('container')
	<div class="col-md-2">
		<div class="box box-success">
			<div class="box-heder with-border">
				<h3 class="box-title"><center>Usuario</center></h3>
			</div>
			<div class="box-body">
				<h4>Id</h4>
				<ul class="list-group">
					<li class="list-group-item"> 
						{{$user->id}}
					</li>
				</ul>
				<h4>Nombres</h4>
				<ul class="list-group">
					<li class="list-group-item"> 
						{{$user->name}} {{$user->last_name}}
					</li>
				</ul>
				<h4>Correo</h4>
				<ul class="list-group">
					<li class="list-group-item"><p>{{$user->email}}</p></li>
				</ul>
			</div>
		</div>
	</div>
@stop
