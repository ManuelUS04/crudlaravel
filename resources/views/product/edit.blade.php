@extends('layout')

@section('content')
<div class="container">
    <h1>Editar Producto</h1>
    <a href="{{ route('productos.index') }}" class="btn btn-secondary mb-3">Atrás</a>

    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif

    <form action="{{ route('productos.update', $product->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="name">Nombre:</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $product->name) }}" >
            @error('name')
            <div class="alert alert-danger mt-1">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="description">Descripción:</label>
            <textarea class="form-control" id="description" name="description" >{{ old('description', $product->description) }}</textarea>
            @error('description')
            <div class="alert alert-danger mt-1">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="price">Precio:</label>
            <input type="number" class="form-control" id="price" name="price" value="{{ old('price', $product->price) }}" >
            @error('price')
            <div class="alert alert-danger mt-1">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="stock">Stock:</label>
            <input type="number" class="form-control" id="stock" name="stock" value="{{ old('stock', $product->stock) }}" >
            @error('stock')
            <div class="alert alert-danger mt-1">{{ $message }}</div>
            @enderror
        </div>

        <div class="text-center mt-2 mb-5">
            <button type="submit" class="btn btn-primary">Actualizar</button>
        </div>
    </form>
</div>
@endsection