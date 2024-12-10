<?php
include './db/taskRepository.php';

$repository = new TaskRepository();

function deleteTask(int $taskId): void
{
    global $repository;
    $repository->deleteTask($taskId);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_REQUEST['taskId'])) {
    $taskId = intval($_REQUEST['taskId']);
    deleteTask($taskId);
    echo 'success';
    exit;
}