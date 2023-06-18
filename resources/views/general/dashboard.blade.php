@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content')
<div class="container">
    <div class="container">
        <div class="jumbotron text-center">
          <h1 class="display-4">¡Bienvenido!</h1>
          <p class="lead">Gracias por visitar nuestro sitio web.</p>
          <hr class="my-4">
          <p>Este es un ejemplo de una plantilla de bienvenida detallada con Bootstrap.</p>
          <p>¡A continuación, puedes elegir una opción!</p>
          <a href="#" class="btn btn-primary btn-lg mr-3">Opción 1</a>
          <a href="#" class="btn btn-secondary btn-lg">Opción 2</a>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <style></style>
@stop
