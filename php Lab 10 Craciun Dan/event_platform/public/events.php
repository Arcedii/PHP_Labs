<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Текущие мероприятия</title>
</head>
<body>
    <h1>Текущие мероприятия</h1>
    <ul>
        <?php
        // Подключение к базе данных
        include 'includes/db.php';

        // Запрос для получения текущих мероприятий
        $sql = "SELECT * FROM events";
        $result = mysqli_query($conn, $sql);

        // Вывод каждого мероприятия в списке
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<li>{$row['name']} - Цена: {$row['price']}, Дата: {$row['date']}</li>";
        }

        // Закрытие соединения с базой данных
        mysqli_close($conn);
        ?>
    </ul>
</body>
</html>
