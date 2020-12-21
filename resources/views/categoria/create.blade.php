@extends('layouts.app')

@section('content')
<div class="content-wrapper pt-3">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div>
                        <div class="card pt-3 p-3">
                            <h3 class="card-title">Categorias </h3>
                            <p>Los campos marcados con (*) son requeridos</p>
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
                                        <form action="{{route('categoria.store')}}" method="POST">
                                            {{csrf_field()}}
                                            <div class="form-group row">
                                                <div class="col-md-6">
                                                    <label><strong>Nombre *</strong></label>
                                                    <input type="text" class="form-control" name="nombre" required>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-md-12">
                                                    <label><strong>Descripcion *</strong> </label>
                                                    <textarea type="text" class="form-control" name="descripcion"></textarea>
                                                </div>
                                            </div>
                                            {{-- <div class="form-group row">
                                        <div class="col-md-6">
                                            <label><strong>Número Documento *</strong> </label>
                                            <input type="text" class="form-control" name="num_documento" required>
                                        </div>
                                        <div class="col-md-6">
                                            <label><strong>Dirección</strong></label>
                                            <input type="text" class="form-control" name="direccion">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-6">
                                            <label><strong>Teléfono *</strong> </label>
                                            <input type="number" class="form-control" name="telefono">
                                        </div>
                                        <div class="col-md-6">
                                            <label><strong>Email</strong> </label>
                                            <input type="mail" class="form-control" name="email">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-6">
                                            <label><strong>Sueldo por clase *</strong> </label>
                                            <input type="number" class="form-control" name="sueldo" required>
                                        </div>
                                        <div class="col-md-6 ">
                                            <label><strong>Referencia *</strong> </label>
                                            <textarea type="text" class="form-control" name="referencia" required></textarea>
                                        </div>
                                    </div>  --}}
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <a type="button" class="btn btn-default" href="{{url('/instructor')}}">Cerrar</a>
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
    </section>
</div>

@endsection
