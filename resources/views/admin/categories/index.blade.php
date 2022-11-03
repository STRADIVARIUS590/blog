@extends('adminlte::page')

@section('title', 'Todos')

@section('content_header')
    @can('admin.categories.create')
        <a class="btn btn-secondary float-right btn-sm" href="{{route('admin.categories.create')}}">Agregar Categoria</a>
    @endcan
    <h1>Categorias</h1>
@stop
{{-- {{$categories}} --}}
@section('content')
@if (session('info'))
    <div class='alert alert-danger'>
        <strong>
            {{session('info')}}
        </strong>
    </div>
@endif
<div class="card">
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <th>ID</th>
                    <th>NAME</th>
                    @can('admin.categries.destroy') 
                    <th colspan="2">ACCION</th>
                   @endcan 
                </thead>
                <tbody>
                    @foreach ($categories as $category)
                        <tr>
                            <td>{{$category->id}}</td>
                            <td>{{$category->name}}</td>
                            @can('admin.categories.edit') 
                            <td width='10px'>
                                <a class='btn btn-primary btn-sm' href="{{route('admin.categories.edit', $category)}}">EDITAR</a>     
                            </td>
                            @endcan
                            @can('admin.categories.destroy')
                            <td width='10px'>
                                <form action="{{route('admin.categories.destroy', $category)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger btn-sm">ELIMINAR</button>
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