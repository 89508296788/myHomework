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
    </tr>
    <?php
    $json = file_get_contents('./db.json');
    $tasks = json_decode($json, true);
    
    foreach ($tasks as $task){
    echo '<tr>';
    echo $task["title"];
    echo '</tr>';
    }
    
    // todo вывести список задач из базы сделать красивый список
    ?>
</table>
</body>
</html>