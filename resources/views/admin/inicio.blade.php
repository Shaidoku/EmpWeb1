@extends('admin.baseAdmin')

@section('container')
	<div class="col-md-3">
		<div class="box box-success">
			<div class="box-heder with-border">
				<h3 class="box-title"><center>Tus datos</center></h3>
			</div>
			<div class="box-body">
				<h4>Nombre</h4>
				<ul class="list-group">
					<li class="list-group-item"> 
						{{ auth()->user()->names}} {{ auth()->user()->apeP}}
					</li>
				</ul>
				<h4>Correo</h4>
				<ul class="list-group">
					<li class="list-group-item"> {{ auth()->user()->email}}</li>
				</ul>
				<h4>Rol</h4>
				<ul class="list-group">
					<li class="list-group-item"><!--{ auth()->user()->rol->name}}--></li>
				</ul>
			</div>
		</div>
	</div>
@stop
