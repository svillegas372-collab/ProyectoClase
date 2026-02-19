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
<style>
body {
    font-family: Arial, sans-serif;
    margin: 0;
    background-color: #f3f3f3;
}
header {
    background-color: #131921;
    color: white;
    padding: 15px 40px;
    font-size: 22px;
    font-weight: bold;
}
.container {
    padding: 40px;
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 25px;
}
.card {
    background: white;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 3px 10px rgba(0,0,0,0.1);
    transition: 0.3s;
}
.card:hover {
    transform: scale(1.03);
}
.card img {
    width: 100%;
}
.price {
    color: #B12704;
    font-size: 20px;
    font-weight: bold;
}
.btn {
    background: #FFD814;
    border: none;
    padding: 10px;
    width: 100%;
    cursor: pointer;
    font-weight: bold;
    margin-top: 10px;
}
.btn:hover {
    background: #F7CA00;
}
.agotado {
    color: red;
    font-weight: bold;
}
</style>
</head>
<body>

<header>Tienda Virtual</header>

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
