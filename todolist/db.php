<?php
function connectDB() {
    $db = new SQLite3('todolist.db');
    return $db;
}

function getAllTasks() {
    $db = connectDB();
    $result = $db->query('SELECT * FROM tasks');
    $tasks = [];
    while ($row = $result->fetchArray(SQLITE3_ASSOC)) {
        $tasks[] = $row;
    }
    $db->close();
    return $tasks;
}

function addTask($task) {
    $db = connectDB();
    $stmt = $db->prepare('INSERT INTO tasks (title, creationDate, deadline, status) VALUES (:title, :creationDate, :deadline, :status)');
    $stmt->bindValue(':title', $task['title'], SQLITE3_TEXT);
    $stmt->bindValue(':creationDate', $task['creationDate'], SQLITE3_TEXT);
    $stmt->bindValue(':deadline', $task['deadline'], SQLITE3_TEXT);
    $stmt->bindValue(':status', $task['status'], SQLITE3_TEXT);
    $stmt->execute();
    $db->close();
}

function updateTask($task) {
    $db = connectDB();
    $stmt = $db->prepare('UPDATE tasks SET title = :title, creationDate = :creationDate, deadline = :deadline, status = :status WHERE id = :id');
    $stmt->bindValue(':title', $task['title'], SQLITE3_TEXT);
    $stmt->bindValue(':creationDate', $task['creationDate'], SQLITE3_TEXT);
    $stmt->bindValue(':deadline', $task['deadline'], SQLITE3_TEXT);
    $stmt->bindValue(':status', $task['status'], SQLITE3_TEXT);
    $stmt->bindValue(':id', $task['id'], SQLITE3_INTEGER);
    $stmt->execute();
    $db->close();
}

function deleteTask($taskId) {
    $db = connectDB();
    $stmt = $db->prepare('DELETE FROM tasks WHERE id = :id');
    $stmt->bindValue(':id', $taskId, SQLITE3_INTEGER);
    $stmt->execute();
    $db->close();
}