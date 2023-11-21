<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Flower Shop')</title>
    <link rel="stylesheet" href="{{ asset('path/to/styles.css') }}">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #FFFFFF;
            color: #333;
        }

        header {
            background-color: #ffc0cb;
            color: white;
            padding: 0.001em;
            text-align: center;
        }

        main {
            padding: 20px;
            max-width: 800px;
            margin: 0 auto;
        }

        footer {
            background-color: #ffc0cb;
            color: white;
            text-align: center;
            padding: 0.0001em; 
            position: fixed;
            bottom: 0;
            width: 100%;
        }

        .whatsapp-link {
            position: fixed;
            bottom: 20px;
            right: 20px;
            display: flex;
            align-items: center;
        }

        .whatsapp-link img {
            width: 40px;
            height: 40px;
            margin-right: 20px;
            margin-bottom: 50px;
            align-items: center
        }
    </style>
</head>
<body>
    <header>
        <h1>FlowerStore</h1>
    </header>

    <main>
        @yield('content')
        <a href="https://wa.me/628123456789" target="_blank" class="whatsapp-link">
            <img src="images/whatsapp.png" alt="WhatsApp">
        </a>
    </main>

    <footer>
        <p>&copy; 2023 FlowerStore | Hubungi kami di <a href="mailto:flowerstore@gmail.com"> flowerstore@gmail.com</a></p>
    </footer>
</body>
</html>
