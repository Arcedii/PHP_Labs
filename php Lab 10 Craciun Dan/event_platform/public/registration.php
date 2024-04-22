<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Регистрация</title>
</head>
<body>
    <h1>Регистрация</h1>
    <form action="submit_registration.php" method="post">
        <label for="username">Имя пользователя:</label><br>
        <input type="text" id="username" name="username"><br>
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email"><br>
        <label for="password">Пароль:</label><br>
        <input type="password" id="password" name="password"><br>
        <input type="submit" value="Зарегистрироваться">
    </form>
</body>
</html>
