@extends('layouts.app')

@section('content')
<div class="content-wrapper pt-3">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card pt-3 p-3">
                        <div>
                            <h3 class="card-title">Eventos </h3>
                            <p>Los campos marcados con (*) son requeridos</p>
                        </div>
                        @if (Session::has('message'))
                        <div class="alert alert-info">{{ Session::get('message') }}
                        </div>
                        @endif
                        @if (Session::has('error'))
                        <div class="alert alert-info">{{ Session::get('error') }}
                        </div>
                        @endif
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12 mx-auto">
                                    <form action="{{route('evento.store')}}" method="POST"
                                        enctype="multipart/form-data">
                                        {{ csrf_field() }}
                                        <div class="form-group row">
                                            <div class="col-sm-4">
                                                <label><strong> Nombre *</strong></label>
                                                <input type="text" class="form-control" name="nombre"
                                                    placeholder="Nombre" required>
                                            </div>
                                            <div class="col-sm-4">
                                                <label><strong> Dirección *</strong></label>
                                                <input type="text" class="form-control" name="direccion"
                                                    placeholder="Dirección" required>
                                            </div>
                                            <div class="col-sm-4">
                                                <label><strong>Duración</strong></label>
                                                <input type="text" class="form-control" name="duracion"
                                                    placeholder="Duración">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-6">
                                                <label><strong>Categoria *</strong></label>
                                                <select name="categorias_id" class="form-control select2"
                                                    style="width: 100%;" required>
                                                    @foreach ($categoria as $categorias)
                                                    <option value="{{ $categorias->id }}"> {{$categorias->nombre}}
                                                    </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-sm-3">
                                                <label><strong> Fecha *</strong></label>
                                                <input type="date" class="form-control" name="fecha" placeholder="Fecha"
                                                    required>
                                            </div>
                                            <div class="col-sm-3">
                                                <label><strong>Hora Inicio</strong></label>
                                                <input type="text" class="form-control" name="hora_inicio"
                                                    placeholder="Hora Inicio">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-4">
                                                <label><strong> Primer Trainer</strong></label>
                                                <input type="text" class="form-control" name="trainer1"
                                                    placeholder="Primer Trainer">
                                            </div>
                                            <div class="col-sm-4">
                                                <label><strong> Segundo Trainer</strong></label>
                                                <input type="text" class="form-control" name="trainer2"
                                                    placeholder="Segundo Trainer">
                                            </div>
                                            <div class="col-sm-4">
                                                <label><strong>Tercer Trainer</strong></label>
                                                <input type="text" class="form-control" name="trainer3"
                                                    placeholder="Tercer Trainer">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-4">
                                                <label for="">Precio</label>
                                                <div class="input-group-append">
                                                    <input type="text" class="form-control" name="precio" placeholder="Precio">
                                                    <span class="input-group-text">$</span>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <label>Estado *</label>
                                                <div class="custom-control custom-checkbox">
                                                    <input class="custom-control-input" type="checkbox" id="disponible"
                                                       name="estado" value="aceptado">
                                                    <label for="disponible"
                                                        class="custom-control-label">Disponible</label>
                                                    <br>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <input class="custom-control-input" type="checkbox" id="pendiente"
                                                    name="estado" value="pendiente">
                                                    <label for="pendiente"
                                                        class="custom-control-label">Pendiente</label>
                                                    <br>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <input class="custom-control-input" type="checkbox" id="rechazado"
                                                    name="estado" value="rechazado">
                                                    <label for="rechazado"
                                                        class="custom-control-label">Rechazado</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <label><strong>Contenido</strong></label>
                                                <textarea type="text" class="form-control" name="contenido"
                                                    placeholder="Describa el contenido del evento"></textarea>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="user" hidden="true"
                                                    value="{{Auth::user()->name}}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-6">
                                                <p><strong>Imagen</strong></p>
                                                <label for="file-upload" class="custom-file-upload"
                                                    style="text-align: center;">
                                                    <i class="fa fa-cloud-upload" aria-hidden="true"></i>&nbsp;
                                                    <strong>Imagen</strong>
                                                </label>
                                                <p><strong>Sugerencia:</strong> Para una mejor visualizacion se
                                                    recomienda resolucion a partir
                                                    de<strong> 350 × 325 pixels</strong></p>
                                                <input id="file-upload" type="file" name="imagen">
                                            </div>
                                            <div class="col-md-6">
                                                <label><strong>Descripcion</strong></label>
                                                <textarea type="text" class="form-control" name="descripcion"
                                                    placeholder="Descripcion"></textarea>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <a type="button" class="btn btn-default"
                                                href="{{url('/evento')}}">Cerrar</a>
                                            <button type="submit" class="btn btn-primary"><i class="fa fa-floppy-o"
                                                    aria-hidden="true">&nbsp;&nbsp;</i>Guardar</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<style>
    input[type="file"] {
        display: none !important;
    }

    .custom-file-upload {
        width: 100%;
        border: 1px solid #ccc;
        display: inline-block;
        padding: 6px 12px;
        cursor: pointer;
    }

</style>
@endsection
