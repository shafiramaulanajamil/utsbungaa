<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Flower Shop')</title>
    <link rel="stylesheet" href="{{ asset('path/to/styles.css') }}">
    
@extends('layouts.app')
@section('content')
    <div id="admin-container">
        <main>
            @yield('admin-content')
            <a href="https://wa.me/62811027340762" target="_blank" class="whatsapp-link">
                <img src="images/whatsapp.png" alt="WhatsApp">
            </a>
        </main>
    </div>
@endsection
