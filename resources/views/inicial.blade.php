@extends('plantilla')

@section('titulo','Inicial')

@section('contenido')
 <h1>Listado de libros</h1>
 Bienvenido/a {{ $nombre }}
 <ul>
    @forelse ($libros as $libro)
        <li>{{ $libro["titulo"] }} ({{ $libro["autor"] }})</li>
    @empty
        <li>No se encontraron libros</li>
    @endforelse
 </ul>
@endsection
@section('boton')
<button class="btn btn-primary">Botón</button>
@endsection
