<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Registrar Producto</title>
<style>
body {
    font-family: Arial;
    background-color: #f3f3f3;
    margin: 0;
}
header {
    background: #131921;
    color: white;
    padding: 15px 40px;
    font-size: 22px;
}
.form-container {
    width: 400px;
    background: white;
    margin: 50px auto;
    padding: 30px;
    border-radius: 8px;
    box-shadow: 0 3px 10px rgba(0,0,0,0.1);
}
input, textarea, select {
    width: 100%;
    padding: 10px;
    margin-top: 10px;
    border-radius: 5px;
    border: 1px solid #ccc;
}
button {
    background: #FFD814;
    border: none;
    padding: 12px;
    margin-top: 15px;
    font-weight: bold;
    cursor: pointer;
}
button:hover {
    background: #F7CA00;
}
</style>
</head>
<body>

<header>Registrar Producto</header>

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

    <button type="submit">Guardar Producto</button>
</form>
</div>

</body>
</html>
