@extends('layout.plantilla')
@section('contenido')
<div class="row">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <h3>Editar publicacion</h3>
        @if(count($errors)>0)
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
        @endif
    </div>
</div>
{{Form::open(array('action'=>array('PublicacionController@update',$publicaciones->id),'method'=>'patch'))}}
<div class="row">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="form-group"> <br>
            <label for="titulo">Titulo</label>
            <input type="text" name="titulo" id="titulo" class="form-control" value="{{$publicaciones->titulo}}">
        </div>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="form-group"> <br>
            <label for="cuerpo">Cuerpo</label>
            <input type="text" name="cuerpo" id="cuerpo" class="form-control" value="{{$publicaciones->cuerpo}}">
        </div>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="form-group"> <br>
            <button class="btn btn-primary" type="submit"><span class="glyphicon glyphicon-home"></span>Actualizar</button>
            <a class="btn btn-info" type="reset" href="{{url('publicacion')}}"><span class="glyphicon glyphicon-home"></span>Regresar</a>
        </div>
    </div>
</div>
{!!Form::close()!!}
@endsection