<?php
// Функція перевірки парності
function isEven($number) {
    return $number % 2 === 0;
}

echo "<h2>Завдання 2: Перевірка парності</h2>";
for ($i = 1; $i <= 10; $i++) {
    if (isEven($i)) {
        echo "$i — парне<br>";
    } else {
        echo "$i — непарне<br>";
    }
}
?>
