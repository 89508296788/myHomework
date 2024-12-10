<?php
require_once './db/connection.php';

class TaskRepository
{
    /**
     * Возвращает массив задач из базы данных
     * @return array
     */
    public function getAllTasks(): array
    {
        $db = DatabaseConnection::getInstance("./data.db");
        $result = $db->query('SELECT * FROM tasks');
        $tasks = [];
        while ($row = $result->fetchArray(SQLITE3_ASSOC)) {
            $tasks[] = $row;
        }
        return $tasks;
    }

    public function addTask($task): void
    {
        $db = DatabaseConnection::getInstance("./data.db");
        $stmt = $db->prepare('INSERT INTO tasks (title, creationDate, deadline, status) VALUES (:title, :creationDate, :deadline, :status)');
        $stmt->bindValue(':title', $task['title'], SQLITE3_TEXT);
        $stmt->bindValue(':creationDate', $task['creationDate'], SQLITE3_TEXT);
        $stmt->bindValue(':deadline', $task['deadline'], SQLITE3_TEXT);
        $stmt->bindValue(':status', $task['status'], SQLITE3_TEXT);
        $stmt->execute();
    }

    public function updateTask(array $task): void
    {
        $db = DatabaseConnection::getInstance("./data.db");
        $stmt = $db->prepare('UPDATE tasks SET title = :title, creationDate = :creationDate, deadline = :deadline, status = :status WHERE id = :id');
        $stmt->bindValue(':title', $task['title'], SQLITE3_TEXT);
        $stmt->bindValue(':creationDate', $task['creationDate'], SQLITE3_TEXT);
        $stmt->bindValue(':deadline', $task['deadline'], SQLITE3_TEXT);
        $stmt->bindValue(':status', $task['status'], SQLITE3_TEXT);
        $stmt->bindValue(':id', $task['id'], SQLITE3_INTEGER);
        $stmt->execute();
    }

    public function deleteTask($taskId): void
    {
        $db = DatabaseConnection::getInstance("./data.db");
        $stmt = $db->prepare('DELETE FROM tasks WHERE id = :id');
        $stmt->bindValue(':id', $taskId, SQLITE3_INTEGER);
        $stmt->execute();
    }

    public function getById(int $taskId): ?array
    {
        $db = DatabaseConnection::getInstance("./data.db");
        $stmt = $db->prepare('SELECT * FROM tasks WHERE id = :id');
        $stmt->bindValue(':id', $taskId, SQLITE3_INTEGER);
        $result = $stmt->execute();
        $task = $result->fetchArray(SQLITE3_ASSOC);
        return $task ? $task : null;
    }
}



//Прочитать про преобразование типов данных.
// Инициализировать composer, и добавить в зависимости guzzle. Создать индексный файл.
// прочитать про тернарные выражения и про Елвиса( ?:). И про космический корабль <=>.