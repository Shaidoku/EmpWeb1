@extends('admin.baseAdmin')

@section('container')
<div class="row">
    <div class="col-md-8">
        <div class="box box-success">
            <div class="box-header">
                <h3 class="box-title">Añade Usuario</h3>
            </div>
            <form method="POST" action="{{route('admin.users.store')}}">
             {{csrf_field()}} <!--{method_field('PUT')}}-->
                <div class="box-body">
                    <div class="form-group {{$errors->has('name') ? 'has-error' : ''}}">
                        <label>Nombre</label>
                        <input class="form-control" name="name">
                        {!!$errors->first('name','<span class="help-block">:message</span>')!!}
                    </div>
                    <div class="form-group {{$errors->has('last_name') ? 'has-error' : ''}}">
                        <label>Apellido</label>
                        <input class="form-control" name="last_name" >
                        {!!$errors->first('last_name','<span class="help-block">:message</span>')!!}
                    </div>
                    <div class="form-group {{$errors->has('email') ? 'has-error' : ''}}">
                        <label>Correo</label>
                        <input class="form-control" name="email" >
                        {!!$errors->first('email','<span class="help-block">:message</span>')!!}
                    </div>
                    <div class="form-group {{$errors->has('password') ? 'has-error' : ''}}">
                        <label>Contraseña</label>
                        <input type="password" class="form-control" name="password" >
                        {!!$errors->first('password','<span class="help-block">:message</span>')!!}
                    </div>
                    <div class="form-group {{$errors->has('rol_id') ? 'has-error' : ''}}">
                        <label>Roles</label>
                        <select class="form-control" name="rol_id">
                        <option value="">Seleccione un rol</option>
                            @foreach($rols as $rol)
                                <option value="{{$rol->id}}">{{$rol->name}}</option>
                            @endforeach
                        </select>
                        {!!$errors->first('rol_id','<span class="help-block">:message</span>')!!}
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-success">Guardar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- CK Editor -->
<script src="https://cdn.ckeditor.com/4.9.2/standard/ckeditor.js"></script>
<script>CKEDITOR.replace('editor');</script>
@stop