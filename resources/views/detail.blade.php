@extends('master')

@section('content')
    <h1 class="border p-3 mb-4">Detail Produk</h1>
    <div class="border p-4 w-100">
        <h2 class="text-info">{{ $product->name }}</h2>
        <div class="w-25 mx-auto mb-4">
            <img class="w-100" src="{{ asset($product->image) }}" alt="">
        </div>
        <h5 class="text-muted">{{ $product->description }}</h5>
    </div>
@endsection