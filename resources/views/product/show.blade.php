@extends('layouts.app')

@section('title', 'Detalle del Producto')

@section('content')

<header class="header">Detalle del Producto</header>

<div class="detail-container">
    <img src="{{ $producto['imagen'] }}">

    <div class="detail-info">
        <h2>{{ $producto['id_nombre'] }}</h2>
        <p>{{ $producto['descripcion'] }}</p>
        <p class="detail-price">${{ $producto['precio'] }}</p>
        <p class="detail-estado">{{ $producto['estado'] }}</p>
        <button class="btn">Agregar al carrito</button>
    </div>
</div>

@endsection
