<?php
if (isset($_POST['register'])) {
    if (!empty($_POST['login']) && !empty($_POST['password'])) {
        $login = $_POST['login'];
        $password = md5($_POST['password']);
        $file = fopen('users.txt', 'a+');
        fwrite($file, $login . ":" . $password . "\n");
        fclose($file);
        http_response_code(201);
        echo 'Пользователь успешно зарегистрирован!';
    } else {
        echo 'Пожалуйста, заполните все поля.';
    }
}
?>
