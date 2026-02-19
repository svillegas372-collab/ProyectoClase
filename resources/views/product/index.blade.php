<?php
$productos = [
    [
        "id_nombre" => "Laptop HP Pavilion",
        "precio" => 850,
        "descripcion" => "Laptop 16GB RAM, SSD 512GB, Intel i7",
        "estado" => "Disponible",
        "imagen" => "https://th.bing.com/th/id/R.63862cdfeb8d8556ca449bd5502865e9?rik=LOxboONJNmFSqw&pid=ImgRaw&r=0"
    ],
    [
        "id_nombre" => "Smartphone Samsung S23",
        "precio" => 999,
        "descripcion" => "128GB, 5G, Cámara 50MP",
        "estado" => "Disponible",
        "imagen" => "https://tse4.mm.bing.net/th/id/OIP.aQmzj4twNi6G9EPGUz7-dQHaE8?cb=defcachec2&rs=1&pid=ImgDetMain&o=7&rm=3"
    ],
    [
        "id_nombre" => "Audífonos Sony WH-1000XM5",
        "precio" => 399,
        "descripcion" => "Cancelación de ruido premium",
        "estado" => "Agotado",
        "imagen" => "https://tse4.mm.bing.net/th/id/OIP.nE_uoT22bff3E1QQdXdeTgHaHa?cb=defcachec2&rs=1&pid=ImgDetMain&o=7&rm=3"
    ]
];
?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Tienda Virtual</title>
<link rel="stylesheet" href="{{ asset('public/css/styles.css') }}">
</head>
<body>

<header class="header">Tienda Virtual</header>

<div class="container">
<?php foreach($productos as $producto): ?>
    <div class="card">
        <img src="<?= $producto['imagen'] ?>">
        <h3><?= $producto['id_nombre'] ?></h3>
        <p><?= $producto['descripcion'] ?></p>
        <p class="price">$<?= $producto['precio'] ?></p>
        <p class="<?= $producto['estado'] == 'Disponible' ? '' : 'agotado' ?>">
            <?= $producto['estado'] ?>
        </p>
        <button class="btn">Ver Detalle</button>
    </div>
<?php endforeach; ?>
</div>

</body>
</html>