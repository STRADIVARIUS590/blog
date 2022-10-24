@extends('adminlte::page')


@section('title', 'Dashboard')

@section('content_header')
    <h1>Crear</h1>
@stop

@section('content')
    <p>Welcome to this beautiful admin panel.</p>
    <div class="card">
        <div class="card-body">
            {!! Form::open(['route' => 'admin.tags.store']) !!}
               {{--  <div class="form-group">
                    {!! Form::label('name', 'Nombre' ) !!}
                    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'ingrese el nombre de la etiqueta']) !!}
                    
                    @error('name')
                        <small class="text-danger">{{$message}}</small>
                    @enderror

                </div>


                <div class="form-group">
                    {!! Form::label('slug', 'SLug' ) !!}
                    {!! Form::text('slug', null, ['class' => 'form-control', 'placeholder' => 'ingrese el slug de la etiqueta', 'readonly']) !!}
                    
                    @error('slug')
                        <small class="text-danger">{{$message}}</small>
                    @enderror

                </div>

                <div class="form-group">
                  {{--   <label for="">Color</label>
                    <select name="color" id="" class="form-control">
                        <option value="red">Rojo</option>
                        <option value="blue">Azul</option>
                        <option selected value="green">Verde</option>
                    </select> --}}
                      {{--   {!! Form::label('color', 'color') !!}
                    {!! Form::select('color', $colors, null, ['class' => 'form-control']) !!}


                    @error('color')
                        <small class="text-danger">{{$message}}</small>
                    @enderror
                </div> --}}

                @include('admin.tags.partials.form')
                {!! Form::submit('Crear etiqueta' , ['class' => 'btn btn-primary']) !!}
            {!! Form::close() !!}
        </div>
    </div>
@stop



@section('js')



<script src="{{asset('vendor/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug.min.js')}}"></script>

<script>
    $(document).ready( function() {
    $("#name").stringToSlug({
        setEvents: 'keyup keydown blur',
        getPut: '#slug',
        space: '-'
    });
    });
</script>


@stop