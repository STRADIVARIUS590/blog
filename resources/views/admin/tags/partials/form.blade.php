
<div class="form-group">
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
    {!! Form::label('color', 'color') !!}
    {!! Form::select('color', $colors, null, ['class' => 'form-control']) !!}


    @error('color')
        <small class="text-danger">{{$message}}</small>
    @enderror
</div> 