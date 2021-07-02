<?php
//tasks 1-3

$my_name = 'Gashnikov Nikita';
$my_age = 24;
$foo = true;
$float_number = 3.14;
const MY_NULL = null;

echo "$my_name $my_age \n".MY_NULL." \n $foo $float_number";

//task4

var_dump($my_age * 3);
var_dump($float_number / 4);
var_dump($float_number + $my_age);
var_dump($float_number ** 4);
var_dump($my_age - $float_number);

//task5
var_dump($my_age >= $float_number);
var_dump($float_number > $float_number);
var_dump($my_name === 'Gashnikov Nikita');
var_dump(MY_NULL == 0);
var_dump(5 <=> 4);