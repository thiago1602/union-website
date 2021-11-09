@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Acesso negado</h1>
@stop

@section('content')
    <p>Desculpe. Você não tem acesso a esse recurso.</p>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop


