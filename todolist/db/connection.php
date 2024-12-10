<?php
// Метод подключения к базе данных зачистую инкапсулируется в классе реализующем паттерн singleton(одиночка).
// О том как работает этот паттерн постоянно спрашивают на собеседованиях.
// В будующем это подключение к базе данных нужно реализовать как синглтон.
/**
 * @param string $path путь к базе данных.
 * @return SQLite3
 * @throws Exception
 */
function connectDB(string $path): SQLite3 {
    static $instance = null;

    if ($instance === null) {
        $instance = new SQLite3($path);

        // Проверка на ошибки подключения
        if ($instance->lastErrorCode()) {
            throw new Exception("Ошибка подключения к базе данных: " . $instance->lastErrorMsg());
        }
    }

    return $instance;
}