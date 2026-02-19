<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Registrar Producto</title>
<link rel="stylesheet" href="{{ asset('public/css/styles.css') }}">
</head>
<body>

<header class="header">Registrar Producto</header>

<div class="form-container">
<form method="POST" action="">
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

</body>
</html>
