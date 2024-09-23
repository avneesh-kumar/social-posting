<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login with Facebook</title>
    <style>
        body, html {
            height: 100%;
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f0f0f0;
        }

        .login-box {
            text-align: center;
            padding: 30px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .facebook-btn {
            background-color: #4267B2;
            color: white;
            padding: 15px 30px;
            font-size: 18px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
        }

        .facebook-btn:hover {
            background-color: #365899;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="login-box">
            <h2>Login with Facebook</h2>
            <a href="{{ url('/auth/facebook') }}" class="facebook-btn">Login with Facebook</a>
        </div>
    </div>
</body>
</html>
