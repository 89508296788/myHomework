<?php
require_once './db/taskRepository.php';

function update(array $updatedTask): void
{
    $repository = TaskRepository::getInstance();
    $repository->updateTask($updatedTask);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $updatedTask = [
        "id" => intval($_POST['taskId']),
        "title" => $_POST['title'],
        "creationDate" => $_POST['creationDate'],
        "deadline" => $_POST['deadline'],
        "status" => $_POST['status'],
    ];
    update($updatedTask);
    header('Location: /todolist/index.php');
    exit();
}

$taskId = $_GET['taskId'];
$repository = TaskRepository::getInstance(); // Используем Singleton
$task = $repository->getById(intval($taskId));

// Проверяем, существует ли задача
if (!$task) {
    header('Location: /todolist/index.php'); // Переадресация на главную страницу
    exit();
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
<form action="/todolist/edit.php" method="POST">
    <input type="hidden" name="taskId" value="<?php echo $task['id']; ?>">
    <label for="title">Название:</label>
    <input type="text" id="title" name="title" value="<?php echo $task['title']; ?>" required><br><br>

    <label for="creationDate">Дата создания:</label>
    <input type="date" id="creationDate" name="creationDate" value="<?php echo $task['creationDate']; ?>" required><br><br>

    <label for="deadline">Дедлайн:</label>
    <input type="date" id="deadline" name="deadline" value="<?php echo $task['deadline']; ?>" required><br><br>

    <label for="status">Статус:</label>
    <select id="status" name="status" required>
        <option value="В работе" <?php echo $task['status'] == 'В работе' ? 'selected' : ''; ?>>В работе</option>
        <option value="Завершено" <?php echo $task['status'] == 'Завершено' ? 'selected' : ''; ?>>Завершено</option>
        <option value="Отложено" <?php echo $task['status'] == 'Отложено' ? 'selected' : ''; ?>>Отложено</option>
    </select><br><br>

    <button type="submit">Сохранить изменения</button>
</form>
<br>
<a href="/todolist/index.php">Вернуться к списку задач</a>
</body>
</html>