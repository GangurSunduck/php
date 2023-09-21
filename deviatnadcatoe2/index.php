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
        <h1>Введите контактные данные и адресс доставки</h1>
        <p>Контактное лицо: <input placeholder="Введите имя и фамилию" type="text" name="litco" required></p><p>Ваш адрес: <input type="text" name="address" required placeholder="Введите ваш адрес"></p>
        <p>Телефон: <input placeholder="Введите ваш телефон" type="text" name="telephon" required></p><p>E-mail: <input type="email" name="mail" required placeholder="e-mail"></p>
        <h1>Выберите дату доставки</h1>
        <p>Дата доставки <input type="date" name="data" required></p>
        <h1>Оплата</h1>
        <p><input type="radio" value="nal" name="oplata">Наличными</p>
        <p><input type="radio" value="beznal" name="oplata">По крате</p>
        <h1>Прочие параметры</h1>
        <p><input type="radio" value="domophon" name="parametr">Домофон</p>
        <p><input type="radio" value="pes vo dvor" name="parametr">Собака во дворе</p>
        <p><input type="radio" value="fasadd" name="parametr">Вход с фасада</p>
        <p><input type="radio" value="torets" name="parametr">Вход с торца</p>
        <p>Выберите пожелание <select name="pojelai" class="pole" id="">
                <option value="Приз One">Приз 1</option>
                <option value="Приз Two">Приз 2</option>
                <option value="Приз Three">Приз 3</option>
            </select></p>
        <input type="submit" name="knop" placeholder="Отправить">
    </form>
</body>

</html>