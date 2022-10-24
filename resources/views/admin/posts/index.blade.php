@extends('adminlte::page')


@section('title', 'Dashboard')

@section('content_header')

<a class="btn btn-secondary btn-sm float-right" href="{{route('admin.posts.create')}}">Crear Post</a>

<h1>Todos los posts</h1>
@stop

@section('content')
    @livewire('admin.posts-index')
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop