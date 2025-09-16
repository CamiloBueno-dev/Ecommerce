@extends('layouts.app')

@section('content')
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
@endsection
