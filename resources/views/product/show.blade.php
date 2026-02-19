<?php
$producto = [
    "id_nombre" => "Laptop HP Pavilion",
    "precio" => 850,
    "descripcion" => "Laptop profesional con 16GB RAM, SSD 512GB, Procesador Intel i7 de última generación, pantalla Full HD 15.6 pulgadas.",
    "estado" => "Disponible",
    "imagen" => "https://th.bing.com/th/id/R.63862cdfeb8d8556ca449bd5502865e9?rik=LOxboONJNmFSqw&pid=ImgRaw&r=0"
];
?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Detalle del Producto</title>
<link rel="stylesheet" href="{{ asset('public/css/styles.css') }}">
</head>
<body>

<header class="header">Detalle del Producto</header>

<div class="detail-container">
    <img src="<?= $producto['imagen'] ?>">
    <div class="detail-info">
        <h2><?= $producto['id_nombre'] ?></h2>
        <p><?= $producto['descripcion'] ?></p>
        <p class="detail-price">$<?= $producto['precio'] ?></p>
        <p class="detail-estado"><?= $producto['estado'] ?></p>
        <button class="btn">Agregar al carrito</button>
    </div>
</div>

</body>
</html>