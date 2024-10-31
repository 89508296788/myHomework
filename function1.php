<?php
// Удаляет элемент из массива по его ключу.
function deleteItemFromArrayByKey(array $array, int $key): array
{
    unset($array[$key]);
    return $array;
}
$x = [45, 67, 73];

var_dump(deleteItemFromArrayByKey($x, 0));  