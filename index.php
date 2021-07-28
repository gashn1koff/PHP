<?php
// task 1 Сделайте функцию, которая принимает параметром число от 1 до 7, а возвращает день недели на русском языке.

function showDay($a){
    if ($a < 1 || $a > 7 || gettype($a) != 'int'){
        echo 'Такого дня не существует';
    } else {
        switch ($a){
            case 1:
                echo 'Понедельник';
                break;
            case 2:
                echo 'Вторник';
                break;
            case 3:
                echo 'Среда';
                break;
            case 4:
                echo 'Четверг';
                break;
            case 5:
                echo 'Пятница';
                break;
            case 6:
                echo 'Суббота';
                break;
            case 7:
                echo 'Воскресенье';
                break;
        }
    }
}

showDay(1);


//task 3 Написать функцию, которая будет менять порядок слов в строке на обратный


$string = 'Nikita(pervoe)      , Olegovich(vtoroe),   2223,Gashnikov(tretje)';

function changeStr($string){
    $arr = preg_split("/[\d,\s,]+/", $string);
    $new_arr = [];
    foreach ($arr as $item) {
        array_unshift($new_arr, $item);
    }
    echo implode(' ', $new_arr);
}

changeStr($string);


//task 4  Написать функцию, которая вычисляет среднее арифметическое элементов массива, переданного ей в качестве аргумента.
//  Не использовать array_sum и т.д. Простым перебором через цикл


$myArray = [1, 2, 3, 5];
function getAvg($arr){
    $sum = 0;
    foreach ($arr as $item){
        $sum += $item;
    }
    echo $sum / count($arr);
}

getAvg($myArray);

