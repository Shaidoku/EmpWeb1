@extends('admin.baseAdmin')

@section('container')
<div class="row">
    <div class="col-md-8">
        <div class="box box-success">
            <div class="box-header">
                <h3 class="box-title">Añade Evento</h3>
            </div>
            <form method="POST" action="{{route('admin.events.store')}}">
             {{csrf_field()}} <!--{method_field('PUT')}}-->
                <div class="box-body">
                    <div class="form-group {{$errors->has('title') ? 'has-error' : ''}}">
                        <label>Titulo</label>
                        <input class="form-control" name="title" placeholder="Escribe el titulo">
                        {!!$errors->first('title','<span class="help-block">:message</span>')!!}
                    </div>
                    <div class="form-group {{$errors->has('excerpt') ? 'has-error' : ''}}">
                        <label>Descripcion</label>
                        <textarea class="form-control" id="editor" name="excerpt" placeholder="Escribe la descripcion..."></textarea>
                        {!!$errors->first('excerpt','<span class="help-block">:message</span>')!!}
                    </div>
                    <div class="form-group {{$errors->has('fecha') ? 'has-error' : ''}}">
                        <label>Fecha:</label>
                        <div class="input-group date">
                            <div class="input-group-addon">
                                <i class="fa fa-calendar"></i>
                            </div>
                            <input type="text" name="fecha" class="form-control pull-right" id="datepicker">{!!$errors->first('fecha','<span class="help-block">:message</span>')!!}
                        </div>
                    </div>
                    <div class="bootstrap-timepicker">
                        <div class="form-group {{$errors->has('hora') ? 'has-error' : ''}}">
                            <label>Hora</label>
                            <div class="input-group">
                                <input type="text" name="hora" class="form-control timepicker">
                                {!!$errors->first('hora','<span class="help-block">:message</span>')!!}
                                <div class="input-group-addon">
                                    <i class="fa fa-clock-o"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group {{$errors->has('linkmaps') ? 'has-error' : ''}}">
                        <label>Enlace de la ubicación</label>
                        <input class="form-control" name="linkmaps">
                        {!!$errors->first('linkmaps','<span class="help-block">:message</span>')!!}
                    </div>
                    <div class="form-group {{$errors->has('costo') ? 'has-error' : ''}}">
                        <label>Costo</label>
                        <input class="form-control" name="costo" placeholder="$$$.$$">
                        {!!$errors->first('costo','<span class="help-block">:message</span>')!!}
                    </div>
                    <div class="form-group {{$errors->has('link') ? 'has-error' : ''}}">
                        <label>Link de paguina</label>
                        <input class="form-control" name="link">
                        {!!$errors->first('link','<span class="help-block">:message</span>')!!}
                    </div>
                    <div class="form-group {{$errors->has('tlf') ? 'has-error' : ''}}">
                        <label>Telefono</label>
                        <input class="form-control" name="tlf">
                        {!!$errors->first('tlf','<span class="help-block">:message</span>')!!}
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-success">Guardar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@stop
    