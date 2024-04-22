<?php
session_start();
if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'manager') {
    header("Location: login.php");
    exit;
}

include 'includes/db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Обработка редактирования мероприятия
    // ...
}

mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Редактирование мероприятия</title>
</head>
<body>
    <h1>Редактирование мероприятия</h1>
    <!-- Форма для редактирования мероприятия -->
</body>
</html>
