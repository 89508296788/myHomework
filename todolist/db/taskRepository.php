<?php
require_once './db/connection.php';

class TaskRepository
{
    private static $instance = null;
    private $db;

    // Приватный конструктор, чтобы предотвратить создание объекта через new
    private function __construct()
    {
        $this->db = connectDB("./data.db");
    }

    // Метод для получения единственного экземпляра класса
    public static function getInstance(): TaskRepository
    {
        if (self::$instance === null) {
            self::$instance = new TaskRepository();
        }
        return self::$instance;
    }

    // Запрещаем клонирование объекта
    private function __clone() {}

    // Запрещаем десериализацию объекта
    public function __wakeup() {}

    /**
     * Возвращает массив задач из базы данных
     * @return array
     */
    public function getAllTasks(): array
    {
        $result = $this->db->query('SELECT * FROM tasks');
        $tasks = [];
        while ($row = $result->fetchArray(SQLITE3_ASSOC)) {
            $tasks[] = $row;
        }
        return $tasks;
    }

    public function addTask($task)
    {
        $stmt = $this->db->prepare('INSERT INTO tasks (title, creationDate, deadline, status) VALUES (:title, :creationDate, :deadline, :status)');
        $stmt->bindValue(':title', $task['title'], SQLITE3_TEXT);
        $stmt->bindValue(':creationDate', $task['creationDate'], SQLITE3_TEXT);
        $stmt->bindValue(':deadline', $task['deadline'], SQLITE3_TEXT);
        $stmt->bindValue(':status', $task['status'], SQLITE3_TEXT);
        $stmt->execute();
    }

    public function updateTask(array $task): void
    {
        $stmt = $this->db->prepare('UPDATE tasks SET title = :title, creationDate = :creationDate, deadline = :deadline, status = :status WHERE id = :id');
        $stmt->bindValue(':title', $task['title'], SQLITE3_TEXT);
        $stmt->bindValue(':creationDate', $task['creationDate'], SQLITE3_TEXT);
        $stmt->bindValue(':deadline', $task['deadline'], SQLITE3_TEXT);
        $stmt->bindValue(':status', $task['status'], SQLITE3_TEXT);
        $stmt->bindValue(':id', $task['id'], SQLITE3_INTEGER);
        $stmt->execute();
    }

    public function deleteTask($taskId)
    {
        $stmt = $this->db->prepare('DELETE FROM tasks WHERE id = :id');
        $stmt->bindValue(':id', $taskId, SQLITE3_INTEGER);
        $stmt->execute();
    }

    public function getById(int $taskId): ?array
    {
        $stmt = $this->db->prepare('SELECT * FROM tasks WHERE id = :id');
        $stmt->bindValue(':id', $taskId, SQLITE3_INTEGER);
        $result = $stmt->execute();
        $task = $result->fetchArray(SQLITE3_ASSOC);
        return $task ?: null;
    }

    public function close()
    {
        $this->db->close();
    }
}




//Прочитать про преобразование типов данных.
// Инициализировать composer, и добавить в зависимости guzzle. Создать индексный файл.
// прочитать про тернарные выражения и про Елвиса( ?:). И про космический корабль <=>.