<?php
// update.php

// Получаем данные из формы
$taskId = $_POST['taskId'];
$title = $_POST['title'];
$creationDate = $_POST['creationDate'];
$deadline = $_POST['deadline'];
$status = $_POST['status'];

// Читаем данные из JSON файла
$json = file_get_contents('./db.json');
$tasks = json_decode($json, true);

// Обновляем задачу
foreach ($tasks as &$task) {
    if ($task['number'] == $taskId) {
        $task['title'] = $title;
        $task['creationDate'] = $creationDate;
        $task['deadline'] = $deadline;
        $task['status'] = $status;
        break;
    }
}

// Сохраняем обновленные данные обратно в JSON файл
file_put_contents('./db.json', json_encode($tasks, JSON_PRETTY_PRINT));

// Перенаправляем пользователя на главную страницу
header('Location: /todolist/index.php');
exit();
?>