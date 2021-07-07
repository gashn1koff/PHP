<?php
//task 1-2
$arr = ['name' => 'Nikita',
    'secondName' => 'Gashnikov',
    1 => 'first',
    'age' => 19,
    'country' => 'Minsk',
    'bool' => true,
    'education' => 'BSUIR',
    'dateOfBirth'=> '4.02.1997',
    'customArray' => [1, 2, 3],
    10 => 'last item'
];

foreach ($arr as $a){
    print_r ($a);
    echo "<br>";
};

//task3

$my_arr = [];
for ($i = 0; $i < 20; $i++) {
    $my_arr[] = rand(1, 40);
}
print_r($my_arr);
echo "<br>";

foreach ($my_arr as $key => $value){
    echo $key." key of value: ".$value;
    echo "<br>";
}

//task4

foreach ($my_arr as $item) {
    if ($item % 3 == 0 && $item % 5 == 0){
        echo $item." делится на 3 и на 5!";
    }
}