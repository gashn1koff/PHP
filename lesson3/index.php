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


// 5. Посчитать количество четных и нечетных элементов массива

$arr = [1, 2, 3, 3];
$countEven = 0;
$countOdd = 0;
foreach($arr as $item) {
    if ($item % 2 == 0){
        $countEven += 1;
    } else {
        $countOdd += 1;
    }
}

echo "Нечетные - $countOdd, четные - $countEven";


// 6. Вывести на экран те элементы массива, которые выше среднего значения

$array = [55, 3.05, 3, 41, 5];
$mean = array_sum($array) / count($array);
echo "$mean - среднее значение"."\n";

foreach($array as $item){
    if ($item > $mean) {
        echo $item."\n";
    }
}


// 7.  Найти наибольший и наименьший элементы массива (не используя стандартные ф-ции min и max)

$arr = [100, 2, -553, 4, -55, 10, 24, -111, 123];

$min = $arr[0];
$max = $arr[0];

for($i = 1; $i < count($arr); $i++){
    if ($arr[$i] < $min){
        $min = $arr[$i];
    }
    if ($arr[$i] > $max){
        $max = $arr[$i];
    }
}
echo "Минимальное число = $min, Максимальное число = $max";


// 8. Преобразовать двумерный массив в одномерный

$arr = [
    [100, 2, -553],
    [4, -55, 10],
    [24, -111, 123]
];

$result = [];

foreach($arr as $item){
    foreach($item as $i){
        $result[] = $i;
    }
}

var_dump($result);