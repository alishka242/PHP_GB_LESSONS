<?php
echo "<h3>Задание 1.</h3>С помощью цикла while вывести все числа в промежутке от 0 до 100, 
которые делятся на 3 без остатка.<br><b>Решение: </b>";
$i = 0;
while ($i <= 100) {
    if (!($i % 3)) {
        echo $i;
        if ($i < 99) {
            echo "; ";
        } else {
            echo ".";
        }
    }
    $i++;
}

echo "<h3>Задание 2.</h3> С помощью цикла do…while написать функцию для вывода чисел 
от 0 до 10, чтобы результат выглядел так:<br>
0 – ноль.<br>
1 – нечетное число.<br>
2 – четное число.<br>
3 – нечетное число.<br>
…<br>
10 – четное число.<br><br><b>Решение:</b><br>";
$i = 0;
do {
    if ($i === 0) {
        echo $i . " - ноль.<br>";
    } elseif (!($i % 2)) {
        echo $i . " - четное число.<br>";
    } else {
        echo $i . " - нечетное число.<br>";
    }
    $i++;
} while ($i <= 10);

echo "<h3>Задание 3.</h3> Объявить массив, в котором в качестве ключей будут использоваться 
названия областей, а в качестве значений – массивы с названиями городов из соответствующей 
области. Вывести в цикле значения массива, чтобы результат был таким:<br>
Московская область:<br>
Москва, Зеленоград, Клин.<br>
Ленинградская область:<br>
Санкт-Петербург, Всеволожск, Павловск, Кронштадт.<br>
Рязанская область … <br>
(названия городов можно найти на maps.yandex.ru) 
строго соблюдать формат вывода выше, т.е. двоеточие и точка в конце.<br><br><b>Решение:</b><br>";
$arr = [
    "Московская область" => [
        "Москва", "Зеленоград", "Клин"
    ],
    "Ленинградская область" => [
        "Санкт-Петербург", "Всеволожск", "Павловск", "Кронштадт"
    ],
    "Рязанская область" => [
        "Рязань", "Сасово", "Скопин", "Касимов"
    ]
];

foreach ($arr as $keyArr => $valueArr) {
    echo $keyArr . ":<br>";
    foreach ($valueArr as $key => $value) {
        if ($key < count($valueArr) - 1) {
            echo $value . ", ";
        } else {
            echo $value . ".<br>";
        }
    }
}

echo "<h3>Задание 4.</h3> Объявить массив, индексами которого являются буквы русского языка, 
а значениями – соответствующие латинские буквосочетания 
(‘а’=> ’a’, ‘б’ => ‘b’, ‘в’ => ‘v’, ‘г’ => ‘g’, …, ‘э’ => ‘e’, ‘ю’ => ‘yu’, ‘я’ => ‘ya’).
<br>Написать функцию транслитерации строк. Она должна учитывать и заглавные буквы.<br><br><b>Решение:</b><br>";

$alfabet = array(
    'а' => 'a',   'б' => 'b',   'в' => 'v',
    'г' => 'g',   'д' => 'd',   'е' => 'e',
    'ё' => 'e',   'ж' => 'zh',  'з' => 'z',
    'и' => 'i',   'й' => 'y',   'к' => 'k',
    'л' => 'l',   'м' => 'm',   'н' => 'n',
    'о' => 'o',   'п' => 'p',   'р' => 'r',
    'с' => 's',   'т' => 't',   'у' => 'u',
    'ф' => 'f',   'х' => 'h',   'ц' => 'c',
    'ч' => 'ch',  'ш' => 'sh',  'щ' => 'sch',
    'ь' => '\'',  'ы' => 'y',   'ъ' => '\'',
    'э' => 'e',   'ю' => 'yu',  'я' => 'ya'
);

function FunctionName($string, $arr = [])
{   //Все что в комментарии - решение преподавателя.
    $engWord = [];
    //$result = "";
    for($val = 0; $val < mb_strlen($string); $val++){

        $letter =  mb_substr($string, $val, 1);

        foreach ($arr as $key => $value) {
            if ($key === $letter){
                $engWord[] = $value;
            }  elseif (mb_strtoupper($key) === $letter){
                $engWord[] = strtoupper($value);
            }
        }

        /*
        if (isset($alfabet[mb_strtolower($letter)])){
            if($letter === mb_strtolower($letter)){
                $latin_letter = $alfabet[$letter];
            } else {
                $latin_letter = mb_strtoupper($alfabet[mb_strtolower($letter)]);
            }
        } else {
            $latin_letter = $letter;
        }
        $result .= $latin_letter;
        */
    }
    return implode("", $engWord);
}   

echo FunctionName("прИВет", $alfabet);
