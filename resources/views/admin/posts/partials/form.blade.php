<div class="form-group">
    {!! Form::label('name', 'Nombre') !!}
    
    {!! Form::text('name', null, ['class' => 'form-control' ,'placeholder' => 'ingrese el nombre del post']) !!}
    @error('name')
            <div class="text-red">
                <small>
                    {{$message}}
                </small>
            </div>
    @enderror

</div>


<div class="form-group">
    {!! Form::label('slug', 'slug') !!}
    
    {!! Form::text('slug', null, ['class' => 'form-control' ,'placeholder' => 'ingrese el slug del post', 'readonly']) !!}

    @error('slug')
        <div class="text-red">
            <small>
                {{$message}}
            </small>
        </div>
    @enderror
</div>




<div class="form-group">
    {!! Form::label('extract', 'Escribe un resumen de tu publicacion') !!}
    {!! Form::textarea('extract', null, ['class' => 'form-control']) !!}
    @error('extract')
        <div class="text-red">
            <small>
                {{$message}}
            </small>
        </div>
    @enderror
</div>




<div class="form-group">
    {!! Form::label('body', 'Escribe tu publicacion') !!}
    {!! Form::textarea('body', null, ['class' => 'form-control']) !!}
    @error('body')
        <div class="text-red">
            <small>
                {{$message}}
            </small>
        </div>
    @enderror
</div>





<div class="row mb-3">
    <div class="col">
        <div class="image-wrapper">
            @isset($post->image)
            <img id="picture" src="{{Storage::url($post->image->url)}}">
            @else
                <img id="picture" src="https://cdn.pixabay.com/photo/2022/04/29/17/48/lofoten-7164179__480.jpg" alt="">
            @endisset 
        </div>
    </div>
    <div class="col">
        <div class="form-group">
            {!! Form::label('file', 'Imagen que se mostrara en el post') !!}
            {!! Form::file('file', ['class' => 'form-control-file', 'accept' => 'image/*']) !!}
        </div>
        @error('file')
            <div class="text-red">
                <small>
                    {{$message}}
                </small>
            </div>
        @enderror
    </div>
</div>




<div class="form-group">
{{--      {!! Form::label('category_id', 'Categoria') !!} --}}
    
    <p class="font-weigth-bold">Selecciona un tag</p>

    @foreach($tags as $tag)
        <label class="mr-2 btn btn-primary rounded-pill">
            {!! Form::checkbox('tags[]', $tag->id, null) !!}
            {{$tag->name}}
        </label>
    @endforeach
 {{--    {!! Form::select('category_id', $categories, null, ['class' => 'form-control']) !!
--}}       
    @error('tags')
        <div class="text-red">
            <small>
                {{$message}}
            </small>
        </div>
    @enderror
</div>


<div class="form-group">
    {!! Form::label('category_id', 'Categoria') !!}

    {!! Form::select('category_id', $categories, null, ['class' => 'form-control']) !!}
    @error('category_id')
        <div class="text-red">
            <small>
                {{$message}}
            </small>
        </div>
    @enderror
</div>


<div class="form-group">
    <p class="font-weigth-bold">Estado</p>
    <label class="mr-3">
        {!! Form::radio('status','1', true) !!}
        Borrador
    </label>
    <label>
        {!! Form::radio('status','2') !!}
        Terminado
    </label>
    @error('status')
        <div class="text-red">
            <small>
                {{$message}}
            </small>
        </div>
    @enderror
</div>