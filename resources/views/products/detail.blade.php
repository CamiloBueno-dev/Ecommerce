<?php
$producto = [
    'nombre' => 'Auriculares Inalámbricos Xiaomi Earbuds',
    'precio' => 249000,
    'precio_original' => 299000,
    'imagen' => 'https://www.alkomprar.com/medias/6941812768471-001-750Wx750H?context=bWFzdGVyfGltYWdlc3wxNTI3MHxpbWFnZS93ZWJwfGFHVTFMMmczWWk4eE5EYzVOelE1TmpnME5ETXhPQzgyT1RReE9ERXlOelk0TkRjeFh6QXdNVjgzTlRCWGVEYzFNRWd8NzBlNDRhN2NiNzdiOTRiODYxMDc1MGRmOGFjYTZmNDhiNzNhMTU1YmExN2FjZGIzZmJjNmFhY2EyZTU0NDZkZg',
    'descripcion' => 'Auriculares con cancelación de ruido, batería de larga duración y sonido envolvente.',
    'marca' => 'Xiaomi',
    'disponible' => true,
    'envio' => 'Envío gratis a todo el país',
];
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ecommerce</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }

        .contenedor {
            max-width: 1000px;
            margin: 40px auto;
            background-color: #fff;
            padding: 30px;
            box-shadow: 0 0 15px rgba(0,0,0,0.1);
            border-radius: 8px;
        }

        .producto {
            display: flex;
            flex-direction: row;
            gap: 30px;
        }

        .producto img {
            width: 400px;
            border-radius: 10px;
        }

        .info {
            flex: 1;
        }

        .info h1 {
            font-size: 30px;
            margin-bottom: 10px;
        }

        .marca {
            font-size: 16px;
            color: #666;
            margin-bottom: 20px;
        }

        .descripcion {
            font-size: 17px;
            color: #333;
            margin-bottom: 20px;
        }

        .precio {
            font-size: 28px;
            color: #e91e63;
            font-weight: bold;
        }

        .precio-original {
            font-size: 18px;
            color: #999;
            text-decoration: line-through;
            margin-left: 10px;
        }

        .etiqueta-descuento {
            display: inline-block;
            background-color: #ff9800;
            color: #fff;
            font-size: 14px;
            padding: 4px 8px;
            border-radius: 4px;
            margin-left: 10px;
        }

        .envio, .vendedor {
            font-size: 15px;
            margin-top: 10px;
            color: #444;
        }

        .boton-comprar {
            display: inline-block;
            margin-top: 25px;
            padding: 12px 25px;
            background-color: #28a745;
            color: white;
            font-size: 18px;
            text-decoration: none;
            border-radius: 6px;
            font-weight: bold;
        }

        .boton-comprar:hover {
            background-color: #218838;
        }

        .agotado {
            color: red;
            font-weight: bold;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="contenedor">
        <div class="producto">
            <img src="<?php echo $producto['imagen']; ?>" alt="Imagen del producto">
            <div class="info">
                <h1><?php echo $producto['nombre']; ?></h1>
                <div class="marca">Marca: <?php echo $producto['marca']; ?></div>
                <div class="marca">ID: {{ $id }} </div>
                <div class="marca">Categoria: {{ $category }} </div>
                <p class="descripcion"><?php echo $producto['descripcion']; ?></p>

                <div>
                    <span class="precio">$<?php echo number_format($producto['precio'], 0, ',', '.'); ?></span>
                    <?php if ($producto['precio'] < $producto['precio_original']): ?>
                        <span class="precio-original">$<?php echo number_format($producto['precio_original'], 0, ',', '.'); ?></span>
                        <span class="etiqueta-descuento">-<?php echo round(100 - ($producto['precio'] / $producto['precio_original']) * 100); ?>%</span>
                    <?php endif; ?>
                </div>

                <div class="envio"><?php echo $producto['envio']; ?></div>

                <?php if ($producto['disponible']): ?>
                    <a href="#" class="boton-comprar">Agregar al carrito</a>
                <?php else: ?>
                    <div class="agotado">Producto agotado</div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</body>
</html>