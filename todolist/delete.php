<?php
// TODO Реализовать алгоритм удаления задачи из db.json по ее number, используя суперглобальную переменную $_REQUEST.
// Почитать что таклое супер глобальные переменные.
// Реализовать запрос к этой странице из функции deleteTask используя нейронку. <?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_REQUEST['taskId'])) {
    $taskId = intval($_REQUEST['taskId']);

    // Загружаем данные из db.json
    $json = file_get_contents('./db.json');
    $tasks = json_decode($json, true);

    // Ищем задачу по идентификатору и удаляем её
    foreach ($tasks as $key => $task) {
        if ($task['number'] === $taskId) {
            unset($tasks[$key]);
            break;
        }
    }

    // Сохраняем обновленный список задач обратно в db.json
    file_put_contents('./db.json', json_encode(array_values($tasks)));

    // Возвращаем успешный ответ
    echo 'success';
    exit;
}
?>

