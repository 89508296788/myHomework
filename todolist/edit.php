php
Copy

<?php
// edit.php

// Получаем идентификатор задачи из URL
$taskId = $_GET['taskId'];

// Читаем данные из JSON файла
$json = file_get_contents('./db.json');
$tasks = json_decode($json, true);

// Находим задачу по идентификатору
$task = null;
foreach ($tasks as $t) {
    if ($t['number'] == $taskId) {
        $task = $t;
        break;
    }
}

if (!$task) {
    die('Задача не найдена');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Редактирование задачи</title>
    <link href="/todolist/styles.css" rel="stylesheet">
</head>
<body>
    <h3>Редактирование задачи</h3>
    <form action="/todolist/update.php" method="POST">
        <input type="hidden" name="taskId" value="<?php echo $task['number']; ?>">
        <label for="title">Название:</label>
        <input type="text" id="title" name="title" value="<?php echo $task['title']; ?>" required><br>
        <label for="creationDate">Дата создания:</label>
        <input type="date" id="creationDate" name="creationDate" value="<?php echo $task['creationDate']; ?>" required><br>
        <label for="deadline">Дедлайн:</label>
        <input type="date" id="deadline" name="deadline" value="<?php echo $task['deadline']; ?>" required><br>
        <label for="status">Статус:</label>
        <select id="status" name="status" required>
            <option value="В процессе" <?php if ($task['status'] == 'В процессе') echo 'selected'; ?>>В процессе</option>
            <option value="Завершено" <?php if ($task['status'] == 'Завершено') echo 'selected'; ?>>Завершено</option>
            <option value="Отложено" <?php if ($task['status'] == 'Отложено') echo 'selected'; ?>>Отложено</option>
        </select><br>
        <button type="submit">Сохранить изменения</button>
    </form>
</body>
</html>