<?php
// Определение ассоциативного массива транзакций
$transactions = [
    [
        "transaction_id" => 1,
        "transaction_date" => "2019-01-01",
        "transaction_amount" => 100.00,
        "transaction_description" => "Payment for groceries",
        "merchant_name" => "SuperMart",
    ],
    [
        "transaction_id" => 2,
        "transaction_date" => "2020-02-15",
        "transaction_amount" => 75.50,
        "transaction_description" => "Dinner with friends",
        "merchant_name" => "Local Restaurant",
    ],
    // Добавлены новые транзакции
    [
        "transaction_id" => 3,
        "transaction_date" => "2021-03-22",
        "transaction_amount" => 50.00,
        "transaction_description" => "Books purchase",
        "merchant_name" => "Bookstore",
    ],
    [
        "transaction_id" => 4,
        "transaction_date" => "2021-04-01",
        "transaction_amount" => 150.00,
        "transaction_description" => "Monthly rent",
        "merchant_name" => "Apartment",
    ],
];

// Функции для работы с транзакциями
function calculateTotalAmount($transactions) {
    $total = 0;
    foreach ($transactions as $transaction) {
        $total += $transaction["transaction_amount"];
    }
    return $total;
}

function calculateAverage($transactions) {
    $total = calculateTotalAmount($transactions);
    return $total / count($transactions);
}

function mapTransactionDescriptions($transactions) {
    return array_map(function ($transaction) {
        return $transaction["transaction_description"];
    }, $transactions);
}

// Вывод транзакций
?>

<table border="1">
    <tr style="background-color: #a6a6a6; color: #252525">
        <th colspan="5">Данные о транзакциях</th>
    </tr>
    <tr style="background-color: #a6a6a6; color: #252525">
        <th>ID</th>
        <th>Дата</th>
        <th>Сумма транзакции</th>
        <th>Описание транзакции</th>
        <th>Название организации</th>
    </tr>
    <?php foreach ($transactions as $transaction) : ?>
    <tr>
        <td><?php echo $transaction["transaction_id"]; ?></td>
        <td><?php echo $transaction["transaction_date"]; ?></td>
        <td><?php echo $transaction["transaction_amount"]; ?></td>
        <td><?php echo $transaction["transaction_description"]; ?></td>
        <td><?php echo $transaction["merchant_name"]; ?></td>
    </tr>
    <?php endforeach; ?>
</table>

<?php
// Вывод результатов функций
echo "Общая сумма транзакций: " . calculateTotalAmount($transactions) . "<br>";
echo "Средняя сумма транзакции: " . calculateAverage($transactions) . "<br>";
echo "Описания транзакций: " . implode(", ", mapTransactionDescriptions($transactions)) . "<br>";
?>
