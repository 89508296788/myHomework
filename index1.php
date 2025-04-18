<?php
//1 задача
/*
$array = ['html', 'css', 'php', 'js', 'jq'];

foreach ($array as $arr)
    echo $arr . '<br>';*/

// 2 задача

/*$array = [1, 20, 15, 17, 24, 35];

$result = 0;

foreach ($array as $arr){
    $result = $result + $arr;
}
echo $result;*/

// Задача 3

/*$array = [26, 17, 136, 12, 79, 15];

$result = 0;

foreach ($array as $arr){
    $kvadr = $arr * $arr;
    $result = $result + $kvadr;
}
echo $result;*/

// 4 Задача

/*$arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');

foreach ($arr as $key => $array)

echo $key . '<br>';

echo '<br>';

foreach ($arr as $key => $array)

echo $array . '<br>';*/


// 5 задача 

/*$arr = array('Коля' => '200', 'Вася' => '300', 'Петя' => '400');

foreach ($arr as $key => $array)
    echo $key .  ' зарплата ' .  $array .  ' долларов ' . '<br>';*/

// 6 задача

/*
$arr = array('green' => 'Зеленый', 'red' => 'Красный', 'blue' => 'Синий');

$en = array();
$ru = array();

foreach ($arr as $key => $val){
    $en[] = $key;
    $ru[] = $val;
}

echo "<pre>";
print_r($en);
print_r($ru);*/

// 7 задача

/*$array = [2, 5, 9, 15, 0, 4];

foreach( $array as $arr) {
    if ($arr > 3 && $arr < 10)
    echo $arr . '<br>';
}*/

// 8 задача

/*$array = [1, 2, 3, 4, 5, 6, 7, 8, 9];

foreach ($array as $arr)
    echo "$arr";*/

// 9 задача

/*$array = [4, 2, 5, 19, 13, 0, 10];

foreach ($array as $e){
    if ($e > 1 && $e < 5){
        echo 'Есть!';
    } else {
        echo 'Нет!';
    }

}*/

// 10 задача

/*$arr = [4, 2, 5, 19, 13, 0, 10];
$count = 0;
foreach ($arr as $array) {
    $count ++;
}
echo $count;*/

// 11 задача

/*$array = [1, 2, 3, 4, 5, 6, 7, 8, 9];

foreach ($array as $arr) {
    if ($arr % 3 == 0){
        echo $arr ."<br/>";
    }else{
        echo $arr .", ";
    }
}*/

// 12 задача

/*$array = ['Январь', 'Февраль', 'Март', 'Апрель', 'Май', 'Йюнь', 'Йюль', 'Август', 'Сентябрь', 'Октябрь', 'Ноябрь','Декабрь'];

$month = 'Апрель';

foreach ($array as $arr){
    if ($arr == $month){
        echo '<b>' . $arr . '</b> ';
    } else {
        echo $arr . ' ';
    }
}*/

// 13 задача

/*$array = ['Понедельник', 'Вторник', 'Среда', 'Четверг', 'Пятница', 'Суббота', 'Воскресенье'];

foreach ($array as $arr) {
    if ($arr == 'Суббота' || $arr == 'Воскресенье') {
        echo '<b>' . $arr . '</b> ';
    } else {
        echo $arr . ' ';
    }
}*/

// 14 задача

/*$array = ['Понедельник', 'Вторник', 'Среда', 'Четверг', 'Пятница', 'Суббота', 'Воскресенье'];

$day = 'Вторник';

foreach ($array as $arr){
    if ($arr == $day){
        echo '<i>' . $arr . '</i> ';
    } else {
        echo $arr . ' ';
    }
}*/

// 15 задача 

