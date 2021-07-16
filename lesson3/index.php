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
