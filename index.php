<?php
// task 1 Сделайте функцию, которая принимает параметром число от 1 до 7, а возвращает день недели на русском языке.

function showDay($a){
    if (($a >= 1 || $a <= 7) && gettype($a) == "integer"){
        $days = [1 => 'Понедельник', 'Вторник', 'Среда', 'Четверг', 'Пятница', 'Суббота', 'Воскресенье'];
        foreach ($days as $key => $value){
            if($key === $a){
                echo "$value"."</br>";
            }
        }
    } else {
        echo 'Такого дня не существует';
    }
}

showDay(5);
showDay(1);


//task 2 Создайте функцию, которая обрезает строку до нужного размера.
//  Необходимо учесть, что слово в конце строки не должно быть обрезано


$string = 'nikita olegovich gashnikov';

function getSubStr($string, $length){

    $arr = explode(' ', $string);
    $new = substr($string, 0, $length);

    if (strlen($new) < strlen($arr[0])){
        return "ПУСТАЯ СТРОКА!!!";
    } else if (strlen($new) === strlen($arr[0])){
        return $arr[0];
    } else if (strlen($new) >= strlen($string)){
        return $string;
    } else {
        $new = substr($string, 0, $length);
        return substr($new, 0, strrpos($new, ' '));
    }
}

echo(getSubStr($string, 10));


//task 3 Написать функцию, которая будет менять порядок слов в строке на обратный


$string = 'Nikita(pervoe), Olegovich(vtoroe), Gashnikov(tretje)';

function changeStr($string){
    $arr = explode(', ', $string);
    $new_arr = [];
    foreach ($arr as $item) {
        array_unshift($new_arr, $item);
    }
    return implode(' ', $new_arr);
}

echo(changeStr($string));


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


// task 5 Написать функцию, которая генерирует массив случайных значений.
// Количество элементов массива передается в качестве аргумента

function genRandInt($n){
    $arr = [];
    for($i = 0; $i < $n; $i++){
        $arr[] = rand(0, 15);
    }
    return $arr;
}

var_dump(genRandInt(5));
