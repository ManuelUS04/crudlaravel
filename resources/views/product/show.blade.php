@extends('layout')

@section('content')
    <div class="container">
        <h1>Detalles del Producto</h1>
        <p><strong>Nombre:</strong> {{ $product->name }}</p>
        <p><strong>Descripción:</strong> {{ $product->description }}</p>
        <p><strong>Precio:</strong> {{ $product->price }}</p>
        <p><strong>Stock:</strong> {{ $product->stock }}</p>
        <a href="{{ route('productos.index') }}" class="btn btn-secondary">Volver</a>
    </div>
@endsection
