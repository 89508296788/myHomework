<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Добавить новую задачу</title>
    <link href="/todolist/styles.css" rel="stylesheet">
</head>
<body>
    <h3>Добавить новую задачу</h3>
    <form action="/todolist/backandAdd.php" method="POST">
        <label for="title">Название:</label>
        <input type="text" id="title" name="title" required><br><br>

        <label for="creationDate">Дата создания:</label>
        <input type="date" id="creationDate" name="creationDate" required><br><br>

        <label for="deadline">Дедлайн:</label>
        <input type="date" id="deadline" name="deadline" required><br><br>

        <label for="status">Статус:</label>
        <select id="status" name="status" required>
            <option value="В работе">В работе</option>
            <option value="Завершено">Завершено</option>
            <option value="Отложено">Отложено</option>
        </select><br><br>

        <button type="submit">Добавить задачу</button>
    </form>
    <br>
    <a href="/todolist/index.php">Вернуться к списку задач</a>
</body>
</html>


реализовать файл 
    бэк энд энд php написав в нем логику обработки запроса от фронта и добавления задачи в db.json.