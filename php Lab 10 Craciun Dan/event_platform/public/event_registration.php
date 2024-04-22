<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Запись на мероприятие</title>
</head>
<body>
    <h1>Запись на мероприятие</h1>
    <form action="submit_registration.php" method="post">
        <label for="name">Имя:</label><br>
        <input type="text" id="name" name="name"><br>
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email"><br>
        <label for="event">Выберите мероприятие:</label><br>
        <select id="event" name="event">
            <option value="1">Мероприятие 1</option>
            <option value="2">Мероприятие 2</option>
            <!-- Добавьте остальные мероприятия в соответствии с вашей базой данных -->
        </select><br>
        <input type="submit" value="Записаться">
    </form>
</body>
</html>
