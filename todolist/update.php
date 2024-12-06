<?php
require_once './db/taskRepository.php';

$repository = new TaskRepository();


// Получаем данные из формы
$taskId = $_POST['taskId'];
$title = $_POST['title'];
$creationDate = $_POST['creationDate'];
$deadline = $_POST['deadline'];
$status = $_POST['status'];


$taskForUpdate = $repository->getById($taskId);

$taskForUpdate['title'] = $title;
$taskForUpdate['creationDate'] = $creationDate;
$taskForUpdate['deadline'] = $deadline;
$taskForUpdate['status'] = $status;
$repository->updateTask($taskForUpdate);

// Перенаправляем пользователя на главную страницу
header('Location: /todolist/index.php');
exit();
