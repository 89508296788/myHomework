<?php
/** 
 * Получить данные из формы
 * Подготовить их для записи в базу
 * Записать в базу
 * Вернуть пользователя на страницу со списком задач
 * 
 */ 
function getLastTaskId(): int 
{
    $json = file_get_contents('./db.json');
    $tasks = json_decode($json, true); 
    $lastTask = count($tasks) -1;
    return $tasks[$lastTask]['number'];
}

function saveTask(array $task): void 
{
    $json = file_get_contents('./db.json');// данные из файла
    $tasks = json_decode($json, true); // данные превращаем в массив
    $tasks[]=$task;// к массиву задач добавляем новые данные
    $encodedTasks = json_encode($tasks, JSON_PRETTY_PRINT);// массив задач снова кодируем в json строку
    file_put_contents('./db.json',  $encodedTasks);// снова сохраняем файл
    
}
