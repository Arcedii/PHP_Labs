<?php
/* task1

$lastName = 'Иванов';
$firstName = 'Николай';
echo "Фамилия клиента: $lastName, а его имя: $firstName.";
$age = 30;
echo "<br /> Возраст клиента: $age."; 

*/

/* TASK 2

$d = date("D");
if ($d == "Fri")
  echo "<br />Хороших вам выходных!";
else
  echo "<br />Приятного рабочего дня,
вам!";

//________________________________

$d = date("D");

echo ($d == "Sat" || $d == "Sun") ? "Хороших вам выходных!" : "Приятного рабочего дня, вам!";


//______________________________________

// Получаем день недели
$d = date("D");

// Определяем сообщение в зависимости от дня недели
if ($d == "Sat" || $d == "Sun") {
  // Выходные
  echo "Хороших вам выходных!";
} else {
  // Рабочий день
  echo "Приятного рабочего дня, вам!";
}

// Добавляем elseif для обработки понедельника
if ($d == "Mon") {
  echo "Завтра начинается новая рабочая неделя!";
}


//_______________________________________________

// Получаем день недели
$d = date("w");

// Определяем сообщение в зависимости от дня недели
if ($d == 0 || $d == 6) {
  echo "Хороших вам выходных!";
} else {
  echo "Приятного рабочего дня, вам!";
}

// Добавляем elseif для обработки понедельника
if ($d == 1) {
  echo "Завтра начинается новая рабочая неделя!";
}


//________________________________


// Получаем день недели
$d = date("w");

// Определяем сообщение в зависимости от дня недели
switch ($d) {
  case 0:
  case 6:
    echo "Хороших вам выходных!";
    break;
  case 1:
    echo "Завтра начинается новая рабочая неделя!";
    break;
  default:
    echo "Приятного рабочего дня, вам!";
}

*/


//task 3 ______________________________________________________________

/*

//пример с if
$varsta = 22;
if (($varsta > 12) && ($varsta < 20)) {
  $mesaj = " вы подросток!";
} elseif ($varsta > 40) {
  $mesaj = " вы взрослый человек!";
} else {
  $mesaj = " вы в рассвете сил ...
приступайте к работе!";
}
//тернарный оператор
$nume = "Аня";
echo ($nume) ? $nume . ', ' . $mesaj : 'Anonymous,
' . $mesaj;


*/

//task 4 ____________________________________________

/*


// Получить текущий день недели
$деньНедели = date("w");

// Оператор switch для проверки дня недели
switch ($деньНедели) {
  case 0:
    echo "Сегодня, воскресенье, " . date("d.m.Y");
    break;
  case 1:
    echo "Сегодня, понедельник, " . date("d.m.Y");
    break;
  case 2:
    echo "Сегодня, вторник, " . date("d.m.Y");
    break;
  case 3:
    echo "Сегодня, среда, " . date("d.m.Y");
    break;
  case 4:
    echo "Сегодня, четверг, " . date("d.m.Y");
    break;
  case 5:
    echo "Сегодня, пятница, " . date("d.m.Y");
    break;
  case 6:
    echo "Сегодня, суббота, " . date("d.m.Y");
    break;
}

*/


//_______________________ homework

// Функция для определения графика работы
function getSchedule($day)
{
  switch ($day) {
    case 'П.н.':
    case 'Ср.':
    case 'Пт.':
      return '8:00-12:00';
    case 'Вт.':
    case 'Чт.':
    case 'Сб.':
      return '12:00-16:00';
    default:
      return 'Нерабочий день';
  }
}

// Получаем текущий день недели
$day = date('D');

?>

<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <title>График работы докторов</title>
</head>

<body>
  <h1>График работы докторов, каб. 333</h1>
  <table>
    <tr>
      <th>П.н.</th>
      <th>Фамилия, имя</th>
      <th>График</th>
    </tr>
    <tr>
      <td>1.</td>
      <td>Аксенти Елена</td>
      <td><?php echo getSchedule($day); ?></td>
    </tr>
    <tr>
      <td>2.</td>
      <td>Петрова Мария</td>
      <td><?php echo getSchedule($day); ?></td>
    </tr>
  </table>
</body>

</html>