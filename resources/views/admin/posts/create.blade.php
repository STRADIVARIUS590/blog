@extends('adminlte::page')


@section('title', 'Dashboard')

@section('content_header')
    <h1>Crear Post</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            {!! Form::open(['route' => 'admin.posts.store', 'autocomplete' => 'off']) !!}

            <div class="form-group">
                {!! Form::label('name', 'Nombre') !!}
                
                {!! Form::text('name', null, ['class' => 'form-control' ,'placeholder' => 'ingrese el nombre del post']) !!}
            </div>


            <div class="form-group">
                {!! Form::label('slug', 'slug') !!}
                
                {!! Form::text('slug', null, ['class' => 'form-control' ,'placeholder' => 'ingrese el slug del post', 'readonly']) !!}
            </div>




            <div class="form-group">
                {!! Form::label('extract', 'Escribe un resumen de tu publicacion') !!}
                {!! Form::textarea('extract', null, ['class' => 'form-control']) !!}
            </div>



            <div class="form-group">
                {!! Form::label('body', 'Escribe tu publicacion') !!}
                {!! Form::textarea('body', null, ['class' => 'form-control']) !!}
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
             {{--    {!! Form::select('category_id', $categories, null, ['class' => 'form-control']) !!}
 --}}            </div>


            <div class="form-group">
                {!! Form::label('category_id', 'Categoria') !!}

                {!! Form::select('category_id', $categories, null, ['class' => 'form-control']) !!}
            </div>


            <div class="form-group">
                <p class="font-weigth-bold">Estado</p>
                <label class="mr-3">
                    {!! Form::radio('status',1, true) !!}
                    Borrador
                </label>
                <label>
                    {!! Form::radio('status',2) !!}
                    Terminado
                </label>
            </div>


            {!! Form::submit('Crear Post', ['class' => 'btn btn-primary']) !!}


            {!! Form::close() !!}
        </div>
    </div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script src="https://cdn.ckeditor.com/ckeditor5/35.2.0/classic/ckeditor.js"></script>

<script src="{{asset('vendor/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug.min.js')}}"></script>

<script>
    $(document).ready( function() {
        $("#name").stringToSlug({
            setEvents: 'keyup keydown blur',
            getPut: '#slug',
            space: '-'
        });
    });


    ClassicEditor
        .create( document.querySelector('#extract') )
        .catch( error => {
            console.error( error );
    });


    ClassicEditor
        .create( document.querySelector('#body') )
        .catch( error => {
            console.error( error );
    });


    
</script>


@endsection
