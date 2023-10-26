<?php
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="shortcut icon" href="https://www.itu.int/wrc-23/wp-content/uploads/sites/12/2021/12/WRC-23-icons-180x180-12.png">
    <title>Регистрация</title>
    <style>
        .input1 {
            background-color: rgb(0, 21, 255);
            color: rgb(255, 254, 248);
            width: 100%;
        }
        .input3 {
            width: 100%;
            border: 1.5px solid rgb(0, 4, 105);
        }
        fieldset {
            width: 50%;
            margin: 6% 25%;
        }
        body {
            background: url(https://i.stack.imgur.com/94lQI.png);
        }
        .input1:hover {
            color: black;
            padding: 2px;
            background-color: rgb(0, 149, 255);
        }

        .para {
            color: red;
            text-align: center;
            font-size: 20px;
            border: 2px solid blue;
            padding: 5px;
        }
    </style>
</head>
<body>
    <form action="baza/signup.php" method="post">
        <fieldset>
            <label>Фио</label><br>
            <input class="input3" type="text" name='fullname'><br><br>
            <label>Логин</label><br>
            <input required class="input3" type="email" name='login'><br><br>
            <label>Пароль</label><br>
            <input required class="input3" type="password" name='parol'><br><br>
            <label>Подтверждение пароля</label><br>
            <input required class="input3" type="password" name='podparol'><br><br>
            <input class="input1" type="submit" value="Зарегестрироваться!">
            <center><label>У вас уже есть аккаунт? <a href="reg.php">Войти!</a></label></center>
            <?php
                if ($_SESSION['soobsh']) {
                    echo '<p class="para"> ' . $_SESSION['soobsh'] . ' </p>';
                }
                unset($_SESSION['soobsh']);
            ?>
        </fieldset>
    </form>
</body>
</html>