<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GroomRoom</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php
    ?>
    <div class="register">
        <form action="registeraction.php" class="form" method="POST" id="regform">
            <input type="text" placeholder="FIO" name="fio" required id="fio" class="validate">
            <input type="text" placeholder="login" name="login" required class="validate" id="login">
            <input type="password" placeholder="password" name="password" required class="validate" id="password">
            <button>Register</button>
            <p id="error" class="error"></p>
        </form>
    </div>
</body>
</html>