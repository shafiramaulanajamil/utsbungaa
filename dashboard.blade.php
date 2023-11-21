<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Dashboard')</title>
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

        .dashboard-container {
            max-width: 800px;
            margin: 50px auto; /* Adjust the margin as needed */
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            background-color: #fff;
            text-align: center;
        }

        h2 {
            color: #333;
        }

        p {
            color: #555;
        }
    </style>
</head>

<body>
    <header>
        <h1>FlowerStore</h1>
    </header>

    <main>
        <div class="dashboard-container">
            <h2>Welcome to the Dashboard!</h2>
            <p>This is a simple dashboard layout. Customize it according to your needs.</p>
        </div>
    </main>

    <footer>
        <p>&copy; 2023 FlowerStore | Hubungi kami di <a href="mailto:flowerstore@gmail.com"> flowerstore@gmail.com</a></p>
    </footer>
</body>

</html>
