<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Index Site</h1>

    <form action="showInfo.php" method="POST">
        <div>
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" placeholder="Username...">
        </div>
        <div>
            <label for="password">Password...</label>
            <input type="password" name="password" id="password" placeholder="Password...">
        </div>
        <div>
            <label for="email">Email...</label>
            <input type="email" name="email" id="email" placeholder="Email...">
        </div>
        <button type="submit">Sign In</button>
    </form>
</body>
</html>