@extends('admin.baseAdmin')

@section('container')
<div class="row">
    <div class="col-md-8">
        <div class="box box-success">
            <div class="box-header">
                <h3 class="box-title">Añade noticia</h3>
            </div>
            <form method="POST" action="{{route('admin.news.store')}}">
             {{csrf_field()}} <!--{method_field('PUT')}}-->
                <div class="box-body">
                    <div class="form-group  {{$errors->has('title') ? 'has-error' : ''}}">
                        <label>Titulo</label>
                        <input class="form-control" name="title" placeholder="Escribe el titulo">
                        {!!$errors->first('title','<span class="help-block">:message</span>')!!}
                    </div>
                    <div class="form-group {{$errors->has('excerpt') ? 'has-error' : ''}}">
                        <label>Extracto</label>
                        <textarea class="form-control" id="editor" name="excerpt" placeholder="Escribe el estracto..."></textarea>
                        {!!$errors->first('excerpt','<span class="help-block">:message</span>')!!}
                    </div>
                    <div class="form-group {{$errors->has('link') ? 'has-error' : ''}}">
                        <label>Link</label>
                        <input class="form-control" name="link" placeholder="Escribe el link...">
                        {!!$errors->first('link','<span class="help-block">:message</span>')!!}
                    </div>
                    <div class="form-group {{$errors->has('category_id') ? 'has-error' : ''}}">
                        <label>Categoria</label>
                        <select class="form-control" name="category_id">
                        <option value="">seleccione una categoria</option>
                            @foreach($categories as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                        </select>
                        {!!$errors->first('category_id','<span class="help-block">:message</span>')!!}
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