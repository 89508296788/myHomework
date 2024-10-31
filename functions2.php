<?php

// Нужно написать и вызвать функцию которая получает на вход массив целых чисел 4 строка а на выход отдает самое большое из них 13 строка.
function getLargestElementFromArray(array $intArray): int
{
    $memory = 0;
   foreach ($intArray as $value) {
        if ($memory < $value) {
            $memory = $value;
        }
   }

   return $memory;
}

$array = [56, 101, 57, 89, 75];

echo getLargestElementFromArray($array);

