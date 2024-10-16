<?php

$result = rand(1, 6);
$response = "Вам выпало ";
$int = ['один', 'два', 'три', 'четыре', 'пять'];

if ($result >= 1 && $result <= 5) {
    echo $response . $int[$result - 1];
} else if ($result == 6) {
    echo "Вы везунчик. Выпала шестерка";
}

?>