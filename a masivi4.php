<?php
// Определение массива строк с текстом
$texts = array(
    "Lorem ipsum dolor sit amet, consectetur adipiscing elit.",
    "Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
    "Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.",
    "Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.",
    "Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
);

// Инициализация переменных для хранения самой длинной строки и ее длины
$longest_text = "";
$longest_length = 0;

// Находим самую длинную строку в массиве
foreach ($texts as $text) {
    $length = strlen($text);
    if ($length > $longest_length) {
        $longest_text = $text;
        $longest_length = $length;
    }
}

// Выводим самую длинную строку
echo "Самая длинная строка:<br>";
echo $longest_text;
?>
