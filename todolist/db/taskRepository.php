<?php
require_once './connection.php';
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

}

