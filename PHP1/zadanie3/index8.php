<?php
$arrayCity = [
    'Московская область' => ['Москва', 'Красногорск', 'Подольск', 'Коломна', 'Сергиев Посад', 'Климовск'],
    'Ленинградская область' => ['Санкт-Петербург', 'Кингисепп', 'Пушкин', 'Выборг', 'Кронштадт', "Гатчина", 'Колпино'],
    'Ярославская область' => ['Переславль-Залесский', 'Углич', 'Мышкин', 'Рыбинск', 'Ярославль'],
    'Новгородская область' => ['Великий Новгород', 'Старая Русса', 'Чудово', 'Крестцы', 'Валдай']
]; // массив областей с городами

ksort($arrayCity); //сортирует массив по ключам, сохраняя отношения между ключами и значениями

foreach ($arrayCity as $key => $value) {
    $cityK = []; //массив городов, начинающихся с буквы "К"
    sort($value); //сортирует массив в порядке возрастания

    foreach ($value as $keyCity => $valueCity) {
        if (strpos($valueCity, 'К') === 0 || strpos($valueCity, "к") === 0) {
            array_push($cityK, $valueCity);
        }
    }
    if (!empty($cityK)) {
        echo "<h2>$key:</h2>";
    }
    foreach ($cityK as $keyK => $valueK) {
        if ($keyK < count($cityK) - 1) {
            echo $valueK . ', ';
        } else {
            echo $valueK . '. ';
        }
    }
}
