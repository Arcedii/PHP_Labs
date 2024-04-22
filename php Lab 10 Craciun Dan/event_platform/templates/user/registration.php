<?php
include 'includes/db.php';

session_start();
$user_id = $_SESSION['user_id'];
$event_id = $_POST['event_id'];

$sql = "INSERT INTO event_records (user_id, event_id) VALUES ($user_id, $event_id)";
if (mysqli_query($conn, $sql)) {
    // Успешно зарегистрировано
} else {
    echo "Ошибка: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
