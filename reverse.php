<?php
// Створюємо масив чисел від 1 до 10
$numbers = range(1, 10);

// Виводимо масив у зворотному порядку
$reversed = array_reverse($numbers);

echo "<h2>Завдання 1: Реверс масиву</h2>";
echo "Масив у зворотному порядку: <br>";
foreach ($reversed as $num) {
    echo $num . " ";
}
?>
