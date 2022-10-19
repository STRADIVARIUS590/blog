@extends('adminlte::page')

@section('title', 'Todos')

@section('content_header')
    <h1>Todos</h1>
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
        <div class="card-header">
            <a class="btn btn-secondary" href="{{route('admin.categories.create')}}">AGREGAR</a>
        </div>
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <th>ID</th>
                    <th>NAME</th>
                    <th colspan="2">ACCION</th>
                </thead>
                <tbody>
                    @foreach ($categories as $category)
                        <tr>
                            <td>{{$category->id}}</td>
                            <td>{{$category->name}}</td>     
                            <td width='10px'>
                                <a class='btn btn-primary btn-sm' href="{{route('admin.categories.edit', $category)}}">EDITAR</a>     
                            </td>
                            <td width='10px'>
                                <form action="{{route('admin.categories.destroy', $category)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger btn-sm">ELIMINAR</button>
                                </form>
                            </td>
                        </tr>    
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop