<div class="row">
    <div class="col-sm-6">
        <div class="form-group">
            {!! Form::label('name', 'Nombre:') !!}
            {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre del evento']) !!}
            @error('name')
                <small class="text-danger">{{$message}}</small>
            @enderror
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            {!! Form::label('slug', 'Slug:') !!}
            {!! Form::text('slug', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el slug del evento', 'readonly'])
            !!}
            @error('slug')
                <small class="text-danger">{{$message}}</small>
            @enderror
        </div>
    </div>
</div>


<div class="row">
    <div class="col-sm-6">
        <div class="form-group">
            {!! Form::label('category_id', 'Categoría') !!}
            {!! Form::select('category_id', $categories, null, ['class' => 'form-control']) !!}
            @error('category_id')
                <small class="text-danger">{{$message}}</small>
            @enderror
        </div>
    </div>
    <div class="col-sm-6">    
        <div class="form-group">
            {!! Form::label('modality', 'Modalidad:') !!}
            {!! Form::select('modality', ['Virtual','Presencial'], null, ['class' => 'form-control', 'placeholder' => 'Selecionar']) !!}
            @error('modality')
                <small class="text-danger">{{$message}}</small>
            @enderror
        </div>
    </div>
</div>
<div class="form-group">
    <p class="font-weight-bold">Etiquetas</p>
    @foreach ($tags as $tag)
    <label class="mr-2">
        {!! Form::checkbox('tags[]', $tag->id, null) !!}
        {{$tag->name}}
    </label>
    @endforeach
    <hr>
    @error('tags')
        <small class="text-danger">{{$message}}</small>
    @enderror
</div>
<div class="row"> 
    <div class="col-sm-6">  
        <div class="form-group">
            {!! Form::label('price', 'Precio:') !!}
            {!! Form::number('price', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el precio del evento', 'min=0' ]) !!}
            @error('price')
                <small class="text-danger">{{$message}}</small>
            @enderror
        </div>
    </div>
</div>
<div class="row"> 
    <div class="col-sm-6">
        <div class="form-group">
            {!! Form::label('time', 'Hora:') !!}
            {!! Form::time('time', \Carbon\Carbon::now(), ['class' => 'form-control', 'placeholder' => 'Ingrese la hora del evento']) !!}
            @error('date')
                <small class="text-danger">{{$message}}</small>
            @enderror
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            {!! Form::label('date', 'Fecha:') !!}
            {!! Form::date('date', \Carbon\Carbon::now(), ['class' => 'form-control', 'placeholder' => 'Ingrese la fecha del evento']) !!}
            @error('date')
                <small class="text-danger">{{$message}}</small>
            @enderror
        </div>
    </div>
</div>
<div class="form-group">
    <p class="font-weight-bold">Estado</p>
    <label>
        {!! Form::radio('status', 1, true) !!}
        Borrador
    </label>
    <label>
        {!! Form::radio('status', 2) !!}
        Publicado
    </label>
    <hr>
    @error('status')
        <small class="text-danger">{{$message}}</small>
    @enderror
    
</div>
    <div class="row mb-3">
        <div class="col">
            <div class="image-wrapper">
                @isset ($post->image)
                    <img id="picture" src="{{Storage::url($post->image->url)}}">
                @else 
                <img id="picture" src="https://cdn.pixabay.com/photo/2018/05/19/01/23/online-3412498_960_720.jpg">
                @endisset
            </div>
        </div>
        <div class="col">
            <div class="form-group">
                {!! Form::label('file', 'Imagen del post') !!}
                {!! Form::file('file', ['class' => 'form-control-file', 'accept' => 'image/*']) !!}
                @error('file')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>           
        </div>
    </div>
<div class="row">
    <div class="col-sm-6">
        <div class="form-group">
            {!! Form::label('extract', 'Descripción:') !!}
            {!! Form::textarea('extract', null, ['class' => 'form-control', 'placeholder' => 'Ingrese una descripción del Evento']) !!}
            @error('extract')
                <small class="text-danger">{{$message}}</small>
            @enderror
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            {!! Form::label('body', 'Contenidos:') !!}
            {!! Form::textarea('body', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el índice de contenidos']) !!}
            @error('body')
                <small class="text-danger">{{$message}}</small>
            @enderror
        </div>
    </div>
</div>