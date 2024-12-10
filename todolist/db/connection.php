<?php
// Метод подключения к базе данных зачистую инкапсулируется в классе реализующем паттерн singleton(одиночка).
// О том как работает этот паттерн постоянно спрашивают на собеседованиях.
// В будующем это подключение к базе данных нужно реализовать как синглтон.
/**
 * @param string $path путь к базе данных.
 * @return SQLite3
 * @throws Exception
 */
class DatabaseConnection
{
    /**
     * @var SQLite3|null
     */
    private static ?SQLite3 $instance = null;

    /**
     * @var string
     */
    private static string $path;

    /**
     * Конструктор скрыт, чтобы предотвратить создание объекта через new.
     */
    private function __construct() {}

    /**
     * Запрещаем клонирование объекта.
     */
    private function __clone() {}

    /**
     * Запрещаем десериализацию объекта.
     */
    private function __wakeup() {}

    /**
     * Метод для получения единственного экземпляра класса.
     *
     * @param string $path Путь к базе данных.
     * @return SQLite3
     * @throws Exception
     */
    public static function getInstance(string $path): SQLite3
    {
        if (self::$instance === null) {
            self::$path = $path;
            self::$instance = new SQLite3(self::$path);

            // Проверка на ошибки подключения
            if (self::$instance->lastErrorCode()) {
                throw new Exception("Ошибка подключения к базе данных: " . self::$instance->lastErrorMsg());
            }
        }

        return self::$instance;
    }

    /**
     * Метод для закрытия соединения с базой данных.
     */
    public static function closeConnection(): void
    {
        if (self::$instance !== null) {
            self::$instance->close();
            self::$instance = null;
        }
    }
}