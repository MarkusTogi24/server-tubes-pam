@extends('master')

@section('content')
    <h1 class="border p-3 mb-4">Semua Produk</h1>
    <div class="border p-2">
        @foreach ($products as $product)
            <a href="detail/{{ $product->id }}" class="text-decoration-none border p-2 mb-2 d-flex justify-content-evenly align-items-center">
                <div style="width: 10%;">
                    <img class="w-100" src="{{ asset($product->image) }}" alt="">
                </div>
                <div style="width: 88%;">
                    <h3 class="text-info">{{ $product->name }}</h3>
                    <h6 class="text-muted">{{ $product->description }}</h6>
                </div>
            </a>
        @endforeach
    </div>
@endsection