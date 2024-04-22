<?php
include 'includes/db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $price = $_POST['price'];
    $seats = $_POST['seats'];
    $date = $_POST['date'];

    $sql = "INSERT INTO events (name, price, number_seats, date) VALUES ('$name', $price, $seats, '$date')";
    if (mysqli_query($conn, $sql)) {
        // Успешно добавлено
    } else {
        echo "Ошибка: " . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>
