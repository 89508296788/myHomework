<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_REQUEST['taskId'])) {
    $taskId = intval($_REQUEST['taskId']);
    deleteTask($taskId);
    echo 'success';
    exit;
}
?>