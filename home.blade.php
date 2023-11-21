@extends('layouts.app')

@section('content')
    <div style="text-align: center; margin-top: 20px;">
        <h1>Hallo, Selamat datang di FlowerStore!</h1>
        <p>Nikmati keindahan dan keharuman bunga berbagai jenis</p>
        <img src="{{ asset('images/bunga.png') }}" alt="FlowerStore" style="max-width: 100%; height: auto; margin-top: 20px; width: 150px; height: 150px">
        <p>Temukan koleksi bunga eksklusif kami yang dirawat dengan cinta</p>
        <a href="{{ route('products.index') }}" style="padding: 10px 20px; background-color: #FFC0CB; color: white; text-decoration: none; display: inline-block; margin-top: 20px;">Lihat Produk Kami</a>
    </div>
@endsection
