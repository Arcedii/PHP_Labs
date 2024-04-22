<?php
// Подключение к базе данных
$conn = mysqli_connect('localhost', 'username', 'password', 'event_platform');

// Проверка соединения
if (!$conn) {
    die("Ошибка подключения: " . mysqli_connect_error());
}
?>
