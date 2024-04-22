<?php
session_start();
if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'manager') {
    header("Location: login.php");
    exit;
}

include 'includes/db.php';

// Получение списка зарегистрированных пользователей на мероприятие
$sql = "SELECT users.username, users.email FROM event_records
        JOIN users ON event_records.user_id = users.id";
$result = mysqli_query($conn, $sql);
$registrations = mysqli_fetch_all($result, MYSQLI_ASSOC);

mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Просмотр зарегистрированных на мероприятие</title>
</head>
<body>
    <h1>Просмотр зарегистрированных на мероприятие</h1>
    <table>
        <thead>
            <tr>
                <th>Имя</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($registrations as $registration): ?>
            <tr>
                <td><?php echo $registration['username']; ?></td>
                <td><?php echo $registration['email']; ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
