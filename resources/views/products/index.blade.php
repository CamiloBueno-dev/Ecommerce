<?php
$productos = [
    [
        'nombre' => 'Portátil Gamer Lenovo LOQ Ryzen 7 RTX 4070',
        'precio' => 5499000,
        'imagen' => 'https://http2.mlstatic.com/D_NQ_NP_877891-MLA88103811437_072025-O.webp',
        'marca' => 'Lenovo',
        'descripcion' => 'Ryzen 7, 16GB RAM, 512GB SSD, RTX 4070 8GB'
    ],
    [
        'nombre' => 'Televisor Samsung 65" UHD 4K Smart TV',
        'precio' => 2699900,
        'imagen' => 'https://exitocol.vtexassets.com/arquivos/ids/29176139/Televisor-SAMSUNG-65-Pulgadas-LED-Uhd-4K-Smart-TV-UN65DU7000KXZL-3555752_a.jpg?v=638883826079300000',
        'marca' => 'Samsung',
        'descripcion' => 'Crystal UHD, Smart TV, modelo UN65DU7000KXZL'
    ],
    [
        'nombre' => 'Auriculares Xiaomi Earbuds Inalámbricos',
        'precio' => 249000,
        'imagen' => 'https://www.alkomprar.com/medias/6941812768471-001-750Wx750H?context=bWFzdGVyfGltYWdlc3wxNTI3MHxpbWFnZS93ZWJwfGFHVTFMMmczWWk4eE5EYzVOelE1TmpnME5ETXhPQzgyT1RReE9ERXlOelk0TkRjeFh6QXdNVjgzTlRCWGVEYzFNRWd8NzBlNDRhN2NiNzdiOTRiODYxMDc1MGRmOGFjYTZmNDhiNzNhMTU1YmExN2FjZGIzZmJjNmFhY2EyZTU0NDZkZg',
        'marca' => 'Xiaomi',
        'descripcion' => 'Cancelación de ruido, batería extendida, sonido envolvente'
    ]
];
?>

@extends('layouts.app')
@section('content')

<div class="contenedor">
        <h1>Productos Disponibles</h1>
        <div class="grid-productos">
            <?php foreach ($productos as $producto): ?>
                <div class="tarjeta">
                    <img src="<?php echo $producto['imagen']; ?>" alt="Imagen de <?php echo $producto['nombre']; ?>">
                    <div class="contenido">
                        <h2><?php echo $producto['nombre']; ?></h2>
                        <p>Marca: <?php echo $producto['marca']; ?></p>
                        <p><?php echo $producto['descripcion']; ?></p>
                        <p class="precio">$<?php echo number_format($producto['precio'], 0, ',', '.'); ?></p>
                    </div>
                    <a href="#" class="boton">Ver producto</a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

@endsection
