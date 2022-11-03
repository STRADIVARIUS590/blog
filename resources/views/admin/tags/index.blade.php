@extends('adminlte::page')


@section('title', 'Dashboard')

@section('content_header')
    @can('admin.tags.create')
        <a class="btn btn-secondary btn-sm float-right" href="{{route('admin.tags.create')}}">Nueva etiqueta</a>
    @endcan
    
    <h1>Tags</h1>
@stop

@section('content')
@if (session('info'))
    <div class="alert alert-success">
        <strong>
            {{session('info')}}
        </strong>
    </div>
@endif
    <div class="card">
        <div class="card-body">
            <table class="table table-striped">

                <thead>  
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        @can('admin.tags.edit')
                            <th colspan="2"></th>
                        @endcan
                    </tr> 
                </thead>
                <tbody>
                    @foreach ($tags as $tag)
                        <tr>
                            <td>{{$tag->id}}</td>
                            <td>{{$tag->name}}</td>
                            @can('admin.tags.edit')
                            <td width='10px'>
                                <a class="btn btn-primary" href="{{route('admin.tags.edit', $tag)}}">Editar</a>
                            </td>
                            @endcan
                            @can('admin.tags.destroy')
                            <td width='10px'>
                                <form action="{{route('admin.tags.destroy', $tag)}}" method="POST">
                                    @method('delete')
                                    @csrf
                                    <button type="submit" class="btn btn-danger">Borrar</button>
                                </form>
                            </td>
                            @endcan
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop

{{-- @section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop --}}