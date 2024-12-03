<?php
require_once './db/connection.php';

/**
 * Отвечает за операции сущностью task.
 * ctrl+alt+l выравнивание кода на странице.
 * include чем отличается
 */
class TaskRepository
{
    /**
     * Возвращает массив задач из базы данных
     * @return array
     *
     */
    public function getAllTasks(): array
    {
        $db = connectDB("./data.db");
        $result = $db->query('SELECT * FROM tasks');
        $tasks = [];
        while ($row = $result->fetchArray(SQLITE3_ASSOC)) {
            $tasks[] = $row;
        }
        $db->close();
        return $tasks;
    }

    public function addTask($task)
    {
        $db = connectDB("./data.db");
        $stmt = $db->prepare('INSERT INTO tasks (title, creationDate, deadline, status) VALUES (:title, :creationDate, :deadline, :status)');
        $stmt->bindValue(':title', $task['title'], SQLITE3_TEXT);
        $stmt->bindValue(':creationDate', $task['creationDate'], SQLITE3_TEXT);
        $stmt->bindValue(':deadline', $task['deadline'], SQLITE3_TEXT);
        $stmt->bindValue(':status', $task['status'], SQLITE3_TEXT);
        $stmt->execute();
        $db->close();
    }

    public function updateTask(array $task): void
    {
        $db = connectDB("./data.db");
        $stmt = $db->prepare('UPDATE tasks SET title = :title, creationDate = :creationDate, deadline = :deadline, status = :status WHERE id = :id');
        $stmt->bindValue(':title', $task['title'], SQLITE3_TEXT);
        $stmt->bindValue(':creationDate', $task['creationDate'], SQLITE3_TEXT);
        $stmt->bindValue(':deadline', $task['deadline'], SQLITE3_TEXT);
        $stmt->bindValue(':status', $task['status'], SQLITE3_TEXT);
        $stmt->bindValue(':id', $task['id'], SQLITE3_INTEGER);
        $stmt->execute();
        $db->close();
    }

    public function deleteTask($taskId)
    {
        $db = connectDB();
        $stmt = $db->prepare('DELETE FROM tasks WHERE id = :id');
        $stmt->bindValue(':id', $taskId, SQLITE3_INTEGER);
        $stmt->execute();
        $db->close();
    }

    public function getById(int $taskId): array
    {
        $db = connectDB("./data.db");
        $stmt = $db->prepare('SELECTE FROM tasks WHERE id = :id');
        $stmt->bindValue(':id', $taskId, SQLITE3_INTEGER);
        $stmt->execute();
        $db->close();
    }
}