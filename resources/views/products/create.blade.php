@extends('admin.layouts.app')

@section('content')
    <h2>Add New Product</h2>

    <div class="card">
        <div class="card-body">
            <form action="{{ route('admin.products.store') }}" method="POST">
                @csrf

                <!--Nombre del producto-->
                @error('name')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
                <div class="input-group input-group-outline mb-3">
                    <label for="nombre" class="form-label">Name</label>
                    <input type="text" class="form-control" id="productName" name="name" value="{{old('name')}}">
                </div>

                <!--Descripción del producto-->
                @error('description')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
                <div class="input-group input-group-outline mb-3">
                    <label for="descripcion" class="form-label">Description</label>
                    <textarea class="form-control" id="productDescription" rows="4" name="description">{{old('description')}}</textarea>
                </div>

                <!--Precio del producto-->
                @error('price')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
                <div class="input-group input-group-outline mb-3">
                    <label for="precio" class="form-label">Price</label>
                    <input type="number" class="form-control" id="productPrice" name="price" value="{{old('price')}}">
                </div>

                <!--Categoria del producto-->
                @error('category')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
                <div class="input-group input-group-outline mb-3">
                    <select class="form-control" id="productCategory" name="category">
                        <option value="">-- Category --</option>
                        @foreach ($categories as $item)
                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                        @endforeach
                    </select>
                </div>

                <!--Marca del producto-->
                <!--Categoria del producto-->
                @error('brand')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
                <div class="input-group input-group-outline mb-3">
                    <select class="form-control" id="productBrand" name="brand">
                        <option value="">-- Brand --</option>
                        @foreach ($brands as $item)
                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                        @endforeach
                    </select>
                </div>

                <!--Imagen del producto-->
                <div class="input-group input-group-outline mb-3">
                    <label for="imagen" class="form-label">Image URL</label>
                    <input type="text" class="form-control" id="productImage">
                </div>

                <button type="submit" class="btn btn-dark">Create Product</button>
            </form>

        </div>
    </div>
@endsection
