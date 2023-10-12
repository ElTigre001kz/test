<?php

// Путь к файлу CSV
$csvFilePath = 'https://raw.githubusercontent.com/ElTigre001kz/test/main/cdn_base.csv';

// Запоминаем время начала выполнения скрипта
$start = microtime(true);

// Открытие файла CSV для чтения
$file = fopen($csvFilePath, 'r');

// Проверка, удалось ли открыть файл
if ($file) {
    // Массив для хранения данных из CSV
    $data = [];

    // Чтение файла построчно
    while (($row = fgetcsv($file)) !== false) {
        // Добавление строки в массив данных
        $data[] = $row;
    }

    // Закрытие файла
    fclose($file);

    // Вывод данных
    print_r($data);
} else {
    // Вывод сообщения об ошибке, если файл не удалось открыть
    echo 'Не удалось открыть файл CSV';
}

// Вычисляем время выполнения скрипта
$time = microtime(true) - $start;

// Выводим время выполнения в консоль
echo "Время выполнения скрипта: " . round($time, 4) . " секунд.";

?>
