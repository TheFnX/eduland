@extends('layouts.app')

@section('content')
<div class="container p-3">
    <h4 class="text-center"><strong>Subcategorias</strong></h4>
    <div class="row">       
		
		<div class="col-md-6">
			<a href="{{ route('subcategoria.create' )}}" class="btn btn-primary">
				<i class="fa fa-user-plus">&nbsp;&nbsp;</i>Agregar Subcategoria</a>				
        </div>
        <br>
        <br>
        <br>
		<div class="col-md-6 ">
			<form class="form-inline my-2 my-lg-0 float-right">
				<input name="buscarpor" class="form-control mr-sm-2" type="search" placeholder="Buscar # Documento"
					aria-label="Search">
				<button class="btn btn-outline-success my-2 my-sm-0" type="submit" style="border: 1px #3097D1 solid;">
					<i class="fa fa-search">&nbsp;&nbsp;</i>Buscar</button>
			</form>
		</div>
	</div>
    <div class="table-responsive">
        <table class="table table-striped table-hover">
            <thead class="thead-dark">
                <tr>                   
                    <th style="text-align:center;">Nombre</th>
                    <th style="text-align:center;">Descripción</th>                   
                    <th style="text-align:center;">Categoria</th>
                    <th style="text-align:center;">Acciones</th>
                    
                </tr>
            </thead>
            <tbody>
                @foreach ($subcategoria as $subcategorias)
                <tr>
                    <td style="text-align:center;">{{ $subcategorias->nombre }}</td>
                    <td style="text-align:center;">{{ $subcategorias->descripcion }}</td>
                    @if ($subcategorias->nombre)
                        <td style="text-align:center;">{{ $subcategorias->categoria->nombre }}</td> 
                    @endif
                    {{-- @if ($subcategorias->nombre !='')
                        <td style="text-align:center;">{{ $subcategorias->categoria->nombre }}</td> 
                    @endif                                        --}}
                    <td style="text-align:center;">
                        {{-- <a href="{{ route('subcategoria.show',$subcategorias->id ) }}">
                            <button class="btn btn-sm"><i class="fa fa-eye" aria-hidden="true"></i>Ver
                            </button></a> --}}
                        <!-- <a title="Edit" href="{{ route('subcategoria.edit',$subcategorias->id ) }}">
                                        <button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o"
                                                aria-hidden="true"></i>
                                            Editar</button></a> -->
                        <form action="{{ route('subcategoria.destroy',$subcategorias->id ) }}" method="POST"
                            accept-charset="UTF-8" style="display:inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Image"
                                onclick="return confirm(&quot;¿Desea eliminar?&quot;)"><i class="fa fa-trash-o"
                                    aria-hidden="true"></i> Eliminar</button>
                        </form>
                    </td>
                </tr>
                @endforeach



            </tbody>
        </table><br><br>
    </div>
</div>
@endsection