<?php
$producto = [
    "id_nombre" => "Laptop HP Pavilion",
    "precio" => 850,
    "descripcion" => "Laptop profesional con 16GB RAM, SSD 512GB, Procesador Intel i7 de última generación, pantalla Full HD 15.6 pulgadas.",
    "estado" => "Disponible",
    "imagen" => "https://via.placeholder.com/400"
];
?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Detalle del Producto</title>
<style>
body {
    font-family: Arial;
    background: #f3f3f3;
    margin: 0;
}
header {
    background: #131921;
    color: white;
    padding: 15px 40px;
    font-size: 22px;
}
.detail-container {
    display: flex;
    gap: 40px;
    padding: 50px;
    background: white;
    margin: 50px;
    border-radius: 10px;
}
.detail-container img {
    width: 400px;
}
.info {
    flex: 1;
}
.price {
    color: #B12704;
    font-size: 28px;
    font-weight: bold;
}
.estado {
    margin-top: 10px;
    font-weight: bold;
}
.btn {
    background: #FFD814;
    border: none;
    padding: 15px;
    margin-top: 20px;
    width: 200px;
    cursor: pointer;
    font-weight: bold;
}
.btn:hover {
    background: #F7CA00;
}
</style>
</head>
<body>

<header>Detalle del Producto</header>

<div class="detail-container">
    <img src="<?= $producto['imagen'] ?>">
    <div class="info">
        <h2><?= $producto['id_nombre'] ?></h2>
        <p><?= $producto['descripcion'] ?></p>
        <p class="price">$<?= $producto['precio'] ?></p>
        <p class="estado"><?= $producto['estado'] ?></p>
        <button class="btn">Agregar al carrito</button>
    </div>
</div>

</body>
</html>
