<?php
//  Выводит весь список покупок.
$shoppingList = [
    'Молоко',
    'Хлеб',
    'Яйца'
];

echo ($shoppingList) ;

// * Добавляет новый товар в список (например, "Масло").
$shoppingList = [
    'Молоко',
    'Хлеб',
    'Яйца',
    'Масло'
];

echo ($shoppingList) ;

// * Удаляет товар из списка (например, "Хлеб").
$shoppingList = [
    'Молоко',
    'Хлеб',
    'Яйца'
    
];

$key = array_search('Хлеб', $shoppingList);

if ($key !== false) {
    unset($shoppingList[$key]);
}
echo "Список покупок:\n";

foreach ($shoppingList as $item) {
    echo "- $item\n";
} 
       
// Выводит обновленный список покупок.
$shoppingList = [
    'Молоко',
    'Хлеб',
    'Яйца',
    'Масло'
];
$key = array_search("Хлеб", $shoppingList);

if ($key !== false) {
    unset($shoppingList[$key]);
}    

echo "Обновленный список покупок:\n";

foreach ($shoppingList as $item) {
    echo "- $item\n";
}