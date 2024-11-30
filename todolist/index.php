<?php

include './db/taskRepository.php';

$repository = new TaskRepository();
$tasks = $repository->getAllTasks();// запустить код в репозитории. отладка кода.
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link href="/todolist/styles.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todolist</title>
</head>
<body>
<div class="container">
    <h3 class="mt-4">Мои задачи</h3>
    <button class="btn btn-primary mb-3" onClick='addTask()'>Добавить новую задачу</button>
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>№</th>
            <th>Название</th>
            <th>Дата создания</th>
            <th>Дедлайн</th>
            <th>Статус</th>
            <th>Действия</th>
            <th>Редактирование</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($tasks as $task): ?>
            <tr>
                <td><?php echo $task['id']; ?></td>
                <td><?php echo $task['title']; ?></td>
                <td><?php echo $task['creationDate']; ?></td>
                <td><?php echo $task['deadline']; ?></td>
                <td><?php echo $task['status']; ?></td>
                <td><button class='btn btn-danger' onClick='deleteTask(<?php echo $task['id']; ?>)'>Удалить</button></td>
                <td><button class='btn btn-warning' onClick='editTask(<?php echo $task['id']; ?>)'>Редактировать задачу</button></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
    function deleteTask(taskId){
        if (confirm('Вы уверены, что хотите удалить эту задачу?')) {
            fetch('/todolist/delete.php?taskId='+taskId, {
                method:'POST',
            })
                .then(response => response.text())
                .then(data => {
                    if (data === 'success') {
                        alert('Задача успешно удалена');
                        location.reload(); // Обновляем страницу
                    } else {
                        alert('Ошибка при удалении задачи');
                    }
                });
        }
    }

    function addTask(){
        location.replace('/todolist/add.php')
    };

    function editTask(taskId) {
        location.replace('/todolist/edit.php?taskId=' + taskId);
    };
</script>
</body>
</html>
 // Доделать SQlite с json. Ознакомиться с константами ютуб. пересмотри видосы.