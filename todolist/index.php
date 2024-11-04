<!DOCTYPE html>
<html lang="en">
<head>
    <link href="/todolist/styles.css" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todolist</title>
</head>
<body>
  <h3>Мои задачи</h3> 
  <table>
    <tr>
        <th>№</th>
        <th>Название</th>
        <th>Дата создания</th>
        <th>Дедлайн</th>
        <th>Статус</th>
        <th>Действия</th>
    </tr>
    <?php
    $json = file_get_contents('./db.json');
    $tasks = json_decode($json, true);
    
    foreach ($tasks as $task){
    echo '<tr>';
    echo "<td>{$task['number']} </td>";
    echo "<td>{$task['title']} </td>";
    echo "<td>{$task['creationDate']} </td>";
    echo "<td>{$task['deadline']} </td>";
    echo "<td>{$task['status']} </td>";
    echo "<td><button onClick='deleteTask({$task['number']})'>Удалить</button></td>";
    echo '</tr>';
    }
    
    ?>
</table>
<script>
    function deleteTask(taskId){
        if (confirm('Вы уверены, что хотите удалить эту задачу?')) {
            fetch('index.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded',
                },
                body: 'taskId=' + taskId
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
</script>
</body>
</html>


