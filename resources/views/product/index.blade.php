@extends('layouts.app')

@section('title', 'Productos')

@section('content')

<header class="header">Tienda Virtual</header>

<div class="container">
    @foreach($productos as $producto)
        <div class="card">
            <img src="{{ $producto['imagen'] }}">
            <h3>{{ $producto['id_nombre'] }}</h3>
            <p>{{ $producto['descripcion'] }}</p>
            <p class="price">${{ $producto['precio'] }}</p>
            <p class="{{ $producto['estado'] == 'Disponible' ? '' : 'agotado' }}">
                {{ $producto['estado'] }}
            </p>
            <button class="btn">Ver Detalle</button>
        </div>
    @endforeach
</div>

@endsection
