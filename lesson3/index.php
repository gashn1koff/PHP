<?php
// 1. Удалить из строки пробелы и определить, является ли она перевертышем

$string = 'abc cba';
$newStr = str_replace(' ', '', $string);

if ($newStr == strrev($newStr)) {
    echo 'Перевертыш';
} else {
    echo 'Не перевертыш';
}

// 2. Найти самое длинное слово в строке
$string = '444 3333333333 ab ccba 66666666666666';

$arr = explode(' ', $string);
$max = '';

foreach($arr as $item) {
    if (strlen($item) > strlen($max)){
        $max = $item;
    }
}

echo $max. ' '.strlen($max);

//3.  Посчтитать количество заглавных и прописных букв в строке

$string = 'Nikita Gashnikov';

$arr = str_split($string);
$sumUp = 0;
$sumLower = 0;
foreach($arr as $item) {
    if (ord($item) >= 65 && ord($item) <= 90) {
        $sumUp += 1;
    } else if (ord($item) >= 97 && ord($item) <= 122) {
        $sumLower += 1;
    }
}

echo "Заглавных - $sumUp, прописных - $sumLower,".' длина строки равна - '.strlen($string);


