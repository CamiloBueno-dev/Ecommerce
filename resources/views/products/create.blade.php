<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Agregar Nuevo Producto</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }

        .contenedor {
            max-width: 600px;
            margin: 50px auto;
            background-color: #fff;
            padding: 30px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            border-radius: 8px;
        }

        h1 {
            text-align: center;
            margin-bottom: 30px;
            color: #333;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
            color: #555;
        }

        input[type="text"],
        input[type="number"],
        textarea,
        select {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 6px;
            font-size: 15px;
        }

        textarea {
            resize: vertical;
            height: 100px;
        }

        .boton {
            display: block;
            width: 100%;
            padding: 12px;
            background-color: #007bff;
            color: white;
            font-size: 16px;
            font-weight: bold;
            border: none;
            border-radius: 6px;
            cursor: pointer;
        }

        .boton:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="contenedor">
        <h1>Agregar Nuevo Producto</h1>
        <form method="post" action="#">
            <label for="id">ID del Producto</label>
            <input type="text" id="id" name="id" placeholder="Ej: P12345">

            <label for="nombre">Nombre</label>
            <input type="text" id="nombre" name="nombre" placeholder="Ej: Auriculares Xiaomi">

            <label for="precio">Precio</label>
            <input type="number" id="precio" name="precio" placeholder="Ej: 249000">

            <label for="categoria">Categoría</label>
            <select id="categoria" name="categoria">
                <option value="">-- Selecciona una categoría --</option>
                <option value="audio">Audio</option>
                <option value="computadores">Computadores</option>
                <option value="televisores">Televisores</option>
                <option value="accesorios">Accesorios</option>
            </select>

            <label for="marca">Marca</label>
            <input type="text" id="marca" name="marca" placeholder="Ej: Xiaomi">

            <label for="imagen">URL de la Imagen</label>
            <input type="text" id="imagen" name="imagen" placeholder="Ej: https://ejemplo.com/imagen.jpg">

            <label for="descripcion">Descripción</label>
            <textarea id="descripcion" name="descripcion" placeholder="Describe el producto..."></textarea>

            <button type="submit" class="boton">Guardar Producto</button>
        </form>
    </div>
</body>
</html>