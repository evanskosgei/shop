<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration</title>
    <style>
        body {
            font-family: sans-serif;
        }

        form {
            margin: 0 auto;
            width: 500px;
        }

        input {
            padding: 10px;
            margin-bottom: 10px;
            width: 100%;
        }

        button {
            padding: 10px 20px;
            background-color: #007bff;
            color: white;
            border: none;
            cursor: pointer;
        }
    </style>
</head>
<body>

    <h1>User Registration</h1>

    <form action="register.php" method="post">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <button type="submit">Register</button>
    </form>
</body>
</html>
