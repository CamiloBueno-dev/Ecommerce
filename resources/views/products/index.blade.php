@extends('layouts.app')
@section('content')
    <div class="contenedor">
        <h1 class="display-4 fw-bold text-center mb-4">Productos Disponibles</h1>

        {{-- Filtros de categoría --}}
        <div class="text-center mb-4">
            {{-- Botón TODOS --}}
            <a href="{{ route('products.index') }}" class="btn btn-secondary m-3 {{ !$selectedCategory ? 'activo' : '' }}">
                Todos
            </a>

            {{-- Botones por categoría --}}
            @foreach ($categories as $category)
                <a href="{{ route('products.index', ['category' => $category->id]) }}"
                    class="btn btn-secondary s-1 {{ $selectedCategory == $category->id ? 'activo' : '' }}">
                    {{ $category->name }}
                </a>
            @endforeach
        </div>

        <div class="grid-productos mb-4">
            @foreach ($products as $product)
                <div class="tarjeta">
                    <img src="https://http2.mlstatic.com/D_NQ_NP_877891-MLA88103811437_072025-O.webp" alt="">
                    <div class="contenido">
                        <h2>{{ $product->name }}</h2>

                        {{-- Nombre de la categoría --}}
                        <p>Categoría: {{ $product->category->name }}</p>

                        {{-- Nombre de la marca --}}
                        <p>Marca: {{ $product->brand->name }}</p>

                        <p>{{ $product->description }}</p>
                        <p class="precio">$ {{ $product->price }}</p>
                    </div>
                    <a href="#" class="boton">Agregar al carrito</a>
                </div>
            @endforeach
        </div>

        {{ $products->links() }}
    </div>
@endsection
