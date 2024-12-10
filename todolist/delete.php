<?php
include './db/taskRepository.php';

$repository = new TaskRepository();

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_REQUEST['taskId'])) {
    $taskId = intval($_REQUEST['taskId']);
    $repository->deleteTask($taskId);
    echo 'success';
    exit;
}