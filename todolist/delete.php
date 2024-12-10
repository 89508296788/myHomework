<?php
include './db/taskRepository.php';

// Используем Singleton для получения экземпляра TaskRepository
$repository = TaskRepository::getInstance();

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_REQUEST['taskId'])) {
    $taskId = intval($_REQUEST['taskId']);
    $repository->deleteTask($taskId);
    echo 'success';
    exit;
}