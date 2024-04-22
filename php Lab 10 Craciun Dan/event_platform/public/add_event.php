<?php
session_start();
if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'manager') {
    header("Location: login.php");
    exit;
}

include 'includes/db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Обработка добавления мероприятия
    $name = $_POST['name'];
    $price = $_POST['price'];
    $seats = $_POST['seats'];
    $date = $_POST['date'];

    $sql = "INSERT INTO events (name, price, number_seats, date) VALUES ('$name', $price, $seats, '$date')";
    if (mysqli_query($conn, $sql)) {
        header("Location: events.php");
        exit;
    } else {
        echo "Ошибка: " . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Добавление мероприятия</title>
</head>
<body>
    <h1>Добавление мероприятия</h1>
    <form action="add_event.php" method="post">
        <label for="name">Название:</label><br>
        <input type="text" id="name" name="name"><br>
        <label for="price">Цена:</label><br>
        <input type="text" id="price" name="price"><br>
        <label for="seats">Количество мест:</label><br>
        <input type="text" id="seats" name="seats"><br>
        <label for="date">Дата и время:</label><br>
        <input type="datetime-local" id="date" name="date"><br>
        <input type="submit" value="Добавить">
    </form>
</body>
</html>
