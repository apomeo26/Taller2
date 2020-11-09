@extends('layout.plantilla')
@section('contenido')
<div class="row">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <h3>Nueva publicación</h3>
        @if (count($errors)>0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
        @endif
    </div>
</div>
{!!Form::open(array('url'=>'publicacion','method'=>'POST','autocomplete'=>'off'))!!}
{{Form::token()}}
<div class="row">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="form-group">
            <br><label for="titulo">Titulo</label>
            <input type="text" name="titulo" id="titulo" class="form-control" placeholder="Ingrese el titulo">
        </div>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="form-group">
            <br>
            <label for="cuerpo">Cuerpo</label>
            <input type="text" name="cuerpo" id="cuerpo" class="form-control" placeholder="Ingrese un cuerpo">
        </div>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
    <div class="form-group">
        <label for="Role">Usuario</label>
        <select name="usuarios_id" id="usuarios_id" class="form-control selectpicker" data-livesearch="true" required>
            <option value="" disabled selected>Nombre</option>
            @foreach($usuario as $usuario)
            <option value="{{$usuario->id}}">{{$usuario->nombre}}</option>
            @endforeach
        </select>
    </div>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="form-group">
            <br>
            <button class="btn btn-primary" type="submit"><span class="glyphicon glyphicon-ok"></span>Guardar</button>
            <button class="btn btn-danger" type="reset"><span class="glyphicon glyphicon-remove"></span>Vaciar campos</button>
            <a class="btn btn-info" type="reset" href="{{url('publicacion')}}"><span class="glyphicon glyphicon-home"></span>Regresar</a>
        </div>
    </div>
</div>
{!!Form::close()!!}
@endsection