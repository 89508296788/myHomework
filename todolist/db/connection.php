<?php
// Метод подключения к базе данных зачистую инкапсулируется в классе реализующем паттерн singleton(одиночка).
// О том ка работает этот паттерн постоянно спрашивают на собеседованиях.
// В будующем это подключение к базе данных нужно реализовать как синглтон.

function connectDB(string $path ):SQLite3 {
    return new SQLite3($path);
}