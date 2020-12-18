@extends('layouts.app')

@section('content')
<div class="container card">
    <div>
        <h3 class="card-title text-center"><strong>Nuevo Vehiculo</strong></h3>
        <p><strong>Los campos marcados con (*) son requeridos</strong> </p>
    </div>
    <div class="row">
        <div class="col-md-12 mx-auto">
            <form action="{{route('evento.store')}}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group row">
                    <div class="col-sm-4">
                        <label><strong> Nombre *</strong></label>
                        <input type="text" class="form-control" name="nombre" required>
                    </div>
                    <div class="col-sm-4">
                        <label><strong> Direccion *</strong></label>
                        <input type="text" class="form-control" name="direccion" required>
                    </div>
                    <div class="col-sm-4">
                        <label><strong>Estado</strong></label>
                        <input type="text" class="form-control" name="estado" value="pendiente" disabled="true">
                    </div>
                </div>                
                <div class="form-group row">
                    <div class="col-md-6">
                        <label><strong>Categoria *</strong></label>
                        <select name="categoria_id" class="form-control select2" style="width: 100%;" required>
                            @foreach ($categoria as $categorias)
                            <option value="{{ $categorias->id }}"> {{$categorias->nombre}}</option>
                            @endforeach
                        </select>
                    </div>    
                    <div class="col-md-6">
                        <label><strong>Descripcion</strong></label>
                        <textarea type="text" class="form-control" name="descripcion"></textarea>
                    </div>
                </div>
       
                    
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="text" class="form-control" name="user" hidden="true" value="{{Auth::user()->name}}">
                    </div>
                </div>
              
                <div class="form-group row">
                    <div class="col-md-12">
                        <p><strong>Imagen</strong></p>
                        <label for="file-upload" class="custom-file-upload" style="text-align: center;">
                            <i class="fa fa-cloud-upload" aria-hidden="true"></i>&nbsp;
                            <strong>Imagen</strong>
                        </label>
                        <p><strong>Sugerencia:</strong> Para una mejor visualizacion se recomienda resolucion a partir
                            de<strong> 350 × 325 pixels</strong></p>
                        <input id="file-upload" type="file" name="imagen">
                    </div>
                </div>
                <div class="modal-footer">
                    <a type="button" class="btn btn-default" href="{{url('/evento')}}">Cerrar</a>
                    <button type="submit" class="btn btn-primary"><i class="fa fa-floppy-o"
                            aria-hidden="true">&nbsp;&nbsp;</i>Guardar</button>
                </div>
            </form>
        </div>
    </div>
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
