<?php
// Создание файла и ввод данных в файл
file_put_contents("file.txt", "1. William Smith, 1990, 2344455666677\n");
file_put_contents("file.txt", "2. John Doe, 1988, 4445556666787\n", FILE_APPEND);
file_put_contents("file.txt", "3. Michael Brown, 1991, 7748956996777\n", FILE_APPEND);
file_put_contents("file.txt", "4. David Johnson, 1987, 5556667779999\n", FILE_APPEND);
file_put_contents("file.txt", "5. Robert Jones, 1992, 99933456678888\n", FILE_APPEND);

// Добавление в файл еще 3 записей
file_put_contents("file.txt", "6. James Davis, 1993, 1234567890123\n", FILE_APPEND);
file_put_contents("file.txt", "7. Brian Wilson, 1994, 2345678901234\n", FILE_APPEND);
file_put_contents("file.txt", "8. Richard Taylor, 1995, 3456789012345\n", FILE_APPEND);

// Чтение из файла
$file = fopen("file.txt", "r") or die("Ошибка открытия файла для чтения!");
if (!$file) {
 echo("Не был найден файл для чтения данных!");
} else { ?>
 <div>Данные из файла: </div>
 <?php
 while (!feof($file)) {
 echo fgets($file); ?>
 <br/>
 <?php
 }
 fclose($file);
}
?>
