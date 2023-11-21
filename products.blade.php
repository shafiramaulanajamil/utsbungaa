@extends('layouts.app')

@section('content')
    <style>
        body {
            font-family: 'Arial', sans-serif;
        }

        .product-container {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: space-around;
        }

        .product-card {
            border: 1px solid #ddd;
            padding: 15px;
            width: 300px;
            text-align: center;
        }

        .product-image {
            max-width: 100%;
            height: auto;
        }

        .product-title {
            margin-top: 10px;
        }

        .product-price {
            font-weight: bold;
            color: #4CAF50;
        }

        .buy-button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
        }

        .center-heading {
            text-align: center;
        }
    </style>

    <div style="margin-top: 30px; margin-bottom: 80px;">
        <h1 class="center-heading">Daftar Produk Bunga</h1>
        <div class="product-container">
            @foreach($products as $product)
                <div class="product-card">
                <img src="{{ asset('images/produk1.jpeg') }}" alt="Product 2" class="product-image">
                    <h2 class="product-title">{{ $product->name }}</h2>
                    <p>{{ $product->description }}</p>
                    <p class="product-price">{{ $product->price }}</p>
                    <button class="buy-button">Beli Sekarang</button>
                </div>
            @endforeach
        </div>
    </div>
<script>
    function redirectToCheckout(productId) {
        window.location.href = `/checkout?product=${productId}`;
    }

    const buyButtons = document.querySelectorAll('.buy-button');

    buyButtons.forEach((button, index) => {
        button.addEventListener('click', () => redirectToCheckout(index + 1)); // Sesuaikan dengan logika id produk Anda
    });
</script>

@endsection
