<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <form action="action.php" method="post" class="figa">
        <p>Заявка <input type="text" name="name" required></p>
        <p>Выберите отдел <select name="otdel" class="pole" id="">
                <option value="OtdelOne">Отдел 1</option>
                <option value="OtdelTwo">Отдел 2</option>
                <option value="OtdelThree">Отдел 3</option>
            </select></p>
        <p>Дата подачи <input type="date" name="data" required></p>
        <p>Уровень сложности</p>
        <p><input type="radio" value="visok" name="slogh">Высокий</p>
        <p><input type="radio" value="sred" name="slogh">Средний</p>
        <p><input type="radio" value="nizk" name="slogh">Низкий</p>
        <p>Описание</p>
        <p><textarea name="opisanie" id="" cols="30" rows="10" required></textarea></p>
        <input type="submit" name="knop" placeholder="Отправить">
    </form>
</body>

</html>