<!DOCTYPE html>
<html>
<head>
    <title>Form Login</title>
    <style>
        body {
            background-image: url('https://radarpekanbaru.com/assets/berita/original/61085595469-baju_lebaran.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            font-family: Arial, sans-serif;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }
        .container {
            max-width: 700px;
            margin: 0 auto;
            padding: 50px;
            background-color: rgba(47, 33, 13, 0.1);
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            text-align: center;
            color: rgba(245, 222, 179);
        }
        label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
            color: beige;
        }
        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 5px;
            border: 1px solid #ccc;
            border-radius: 4px;

        }
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #4caf50;
            border: none;
            color: #fff;
            cursor: pointer;
            border-radius: 4px;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
        a {
            text-align: center;
            display: block;
            margin-top: 10px;
            color: lightgrey;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Form Login User</h2>
        <form method="POST" action="proseslogin.php">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" placeholder="username" required><br><br>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" placeholder="password" required><br><br>
            <input type="submit" value="Login">
        </form>
        <br>
        <a href="regist.html">Don't have an account? Register</a>
    </div>
</body>
</html>
