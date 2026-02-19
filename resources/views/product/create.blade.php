@extends('layouts.app')

@section('title', 'Registrar Producto')

@section('content')

<header class="header">Registrar Producto</header>

<div class="form-container">
    <form method="POST" action="">
        @csrf

        <label>Id / Nombre del Producto</label>
        <input type="text" name="id_nombre" required>

        <label>Precio</label>
        <input type="number" name="precio" required>

        <label>Descripción</label>
        <textarea name="descripcion" rows="4" required></textarea>

        <label>Estado</label>
        <select name="estado">
            <option value="Disponible">Disponible</option>
            <option value="Agotado">Agotado</option>
        </select>

        <button class="btn" type="submit">Guardar Producto</button>
    </form>
</div>

@endsection
