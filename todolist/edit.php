<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $updatedTask = [
        "id" => $_POST['taskId'],
        "title" => $_POST['title'],
        "creationDate" => $_POST['creationDate'],
        "deadline" => $_POST['deadline'],
        "status" => $_POST['status'],
    ];
    updateTask($updatedTask);
    header('Location: /todolist/index.php');
    exit();
}

$taskId = $_GET['taskId'];
$db = connectDB();
$stmt = $db->prepare('SELECT * FROM tasks WHERE id = :id');
$stmt->bindValue(':id', $taskId, SQLITE3_INTEGER);
$result = $stmt->execute();
$task = $result->fetchArray(SQLITE3_ASSOC);
$db->close();

if (!$task) {
    header('Location: /todolist/index.php');
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