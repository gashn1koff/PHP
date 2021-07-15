<?php
// 1. Удалить из строки пробелы и определить, является ли она перевертышем

$string = 'abc cba';
$newStr = str_replace(' ', '', $string);

if ($newStr == strrev($newStr)) {
    echo 'Перевертыш';
} else {
    echo 'Не перевертыш';
}

