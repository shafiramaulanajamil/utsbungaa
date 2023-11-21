<?php
// Simulated user credentials (replace this with your actual user data from a database)
$validUsername = 'bwifira@gmail.com';
$validPassword = '123';

// Simulated authentication logic
function authenticate($username, $password) {
    global $validUsername, $validPassword;
    
    // Compare the entered credentials with the valid ones
    return $username === $validUsername && $password === $validPassword;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Assuming your form has 'email' and 'password' fields
    $enteredUsername = $_POST['email'];
    $enteredPassword = $_POST['password'];

    if (authenticate($enteredUsername, $enteredPassword)) {
        // Redirect to the dashboard if authentication is successful
        header("Location: /dashboard");
        exit();
    } else {
        // Handle authentication failure (e.g., display an error message)
        echo "Invalid email or password!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Flower Shop')</title>
    <link rel="stylesheet" href="{{ asset('path/to/styles.css') }}">
    <style>
        .login-container {
            max-width: 400px;
            margin: auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            background-color: #ffc0cb;
            text-align: center;
            margin-top: 50px; /* Sesuaikan jarak antara login dengan tampilan atas */
        }

        .login-container h1 {
            font-size: 24px;
            margin-bottom: 20px;
            color: #333;
        }

        .form-group {
            margin-bottom: 15px;
        }

        label {
            display: block;
            font-size: 14px;
            margin-bottom: 5px;
            color: #555;
        }

        .input-container {
            position: relative;
        }

        input {
            width: calc(100% - 22px);
            padding: 10px;
            font-size: 14px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        .show-password {
            position: absolute;
            right: 0;
            top: 50%;
            transform: translateY(-50%);
            padding: 5px;
            cursor: pointer;
        }

        button {
            background-color: #4caf50;
            color: #fff;
            padding: 10px 15px;
            font-size: 16px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin-top: 10px; /* Sesuaikan jarak antara input dan tombol login */
        }

        button:hover {
            background-color: #45a049;
        }
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
            display: none; /* Hide the WhatsApp link */
        }
    </style>
</head>

<body>
    <header>
        <h1>FlowerStore</h1>
    </header>

    <main>
        <div class="login-container">
            <h1>Login Admin</h1>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" name="email" id="email" required>
            </div>

            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" name="password" id="password" required>
            </div>

            <div class="form-group">
                <button type="submit">Login</button>
            </div>
        </div>
    </main>

    <footer>
        <p>&copy; 2023 FlowerStore | Hubungi kami di <a href="mailto:flowerstore@gmail.com"> flowerstore@gmail.com</a></p>
    </footer>

    <script>
        function login() {
            // Perform your login logic here
            // For simplicity, let's assume the login is successful
            var isLoggedIn = true;

            if (isLoggedIn) {
                // Redirect to the dashboard after successful login
                window.location.href = '/dashboard'; // Update the URL as needed
            }
        }
    </script>
</body>

</html>
