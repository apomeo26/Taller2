@extends('layout.plantilla')
@section('contenido')
<div class="row">
    <div class="col-md-8 col-xs-12">
        @include('publicacion.search')
    </div>
    <div class="col-md-2">
        <a href="publicacion/create" class="pull-right">
            <button class="btn btn-success">Crear publicación</button>
        </a>
    </div>
</div>
<div class="row">
    <div class="col-md-12 col-xs-12">
        <div class="table-responsive">
            <table class="table table-striped table-hover">
                <thead>
                    <th>Id</th>
                    <th>Titulo</th>
                    <th>Cuerpo</th>
                    <th>Usuario</th>
                    <th width="180">Opciones</th>
                </thead>
                <tbody>
                    @foreach($publicaciones as $publicacion)
                    <tr>
                        <td>{{$publicacion->id}}</td>
                        <td>{{$publicacion->titulo}}</td>
                        <td>{{$publicacion->cuerpo}}</td>
                        <td>{{$publicacion->usuarios->nombre}}</td>
                        <td>
                            <a href="{{URL::action('PublicacionController@edit',$publicacion->id)}}"><button class="btn btn-primary">Actualizar</button></a>
                            <a href="" data-target="#modal-delete-{{$publicacion->id}}" data-toggle="modal">
                                <button class="btn btn btn-danger">Eliminar</button>
                            </a>
                        </td>
                    </tr>
                    @include('publicacion.modal')
                    @endforeach
                </tbody>
            </table>
        </div>
        {{$publicaciones->links()}}
    </div>
</div>
@endsection