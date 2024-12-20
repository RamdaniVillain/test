<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin</title>
<style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #c0c0c0;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            margin: 0;
            align-items: center;
        }

        .container {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 30px;
            width: 80%;
            max-width: 400px;
            background: linear-gradient(to right, #f4f4f4, #e0e0e0);
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-top: 5%;
        }

        .login-box {
            text-align: center;
            max-width: 350px;
        }

        .logo img {
            width: 40%;
            max-width: 150px;
            margin-bottom: 20px;
        }

        h2 {
            margin-top: 0;
            color: #333;
            font-size: 2.5rem;
        }

        .input-group {
            margin-bottom: 15px;
            position: relative;
            width: 100%;
        }

        .input-group input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
            font-size: 1rem;
        }

        .input-group input:focus {
            outline: none;
            border-color: #4CAF50;
        }

        button {
            background-color: #4CAF50;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
            font-size: 16px;
            box-sizing: border-box;
            transition: background-color 0.3s ease;
            display: block;
        }

        button:hover {
            background-color: #45a049;
        }

        .error {
            color: red;
            margin-top: 10px;
        }

        /* Style untuk tombol kembali */
        .btn-kembali {
            display: block;
            background-color: #909090;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
            font-size: 16px;
            text-align: center;
            box-sizing: border-box;
            transition: background-color 0.3s ease;
            margin-top: 10px;
            text-decoration: none;
        }

        .btn-kembali:hover {
            background-color: #606060;
        }

        /* Media Query untuk Layar Mobile */
        @media (max-width: 768px) {
            .container {
                padding: 20px;
            }

            .logo img {
                margin-bottom: 0px;
            }

            h2 {
                font-size: 1.8rem;
            }

            .input-group input {
                padding: 8px;
                font-size: 14px;
            }

            button,
            .btn-kembali {
                padding: 10px 15px;
                font-size: 14px;
                width: 100%;
            }
        }

        /* Media Query untuk Layar yang Lebih Kecil */
        @media (max-width: 480px) {
            .container {
                padding: 15px;
                margin: auto;
            }

            .logo img {
                width: 30%;
            }

            h2 {
                font-size: 1.5rem;
            }

            .input-group input {
                padding: 8px;
                font-size: 14px;
            }

            button,
            .btn-kembali {
                padding: 8px 10px;
                font-size: 14px;
                width: 100%;
            }
        }
    </style>
</head>
<body>
    <h1>Login Admin</h1>
    <form action="login.php" method="POST">
        <label for="username">Username:</label><br>
        <input type="text" id="username" name="username" required><br><br>
        
        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password" required><br><br>
        
        <button type="submit">Login</button>
    </form>
</body>
</html>
