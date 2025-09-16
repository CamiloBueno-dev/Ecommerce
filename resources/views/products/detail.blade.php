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

@extends('layouts.app')
@section('content')

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

@endsection
