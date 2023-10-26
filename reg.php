<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="shortcut icon" href="data:image/png;base64,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">
        <!-- css -->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Войти в аккаунт</title>
        <style>
        .input{
            border: solid 1.5px rgb(55, 101, 129);
            width: 100%;
        }
        .submit {
            margin-top: 5px;
            width: 100%;
            background-color: #316fff;
            color: rgb(255, 255, 255);
        }
        .submit:hover {
            background-color: rgb(25, 0, 255);
            padding: 2px;
        }
        fieldset {
            width: 35%;
            margin: 16% 25%;
        }
        a:hover {
            color: rgb(0, 110, 255);
        }
        body {
            background-image: url(https://i.stack.imgur.com/94lQI.png);
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
    <form action="baza/signin.php" method="post">
        <fieldset>
            <label>Логин</label><br>
            <input class="input" type="email" placeholder="Введите логин" name='login'><br><br>
            <label>Пароль</label><br>
            <input class="input" type="password" placeholder="введите пароль" name='parol'><br><br>
            <input class="submit" type="submit" value="Войти">
            <label>У вас нет аккаунта? <a href="zareg.php">Зарегестрируйтесь!</a> </label><br>
            <?php
                if ($_SESSION['soobsh']) {
                    echo '<p class="para"> ' . $_SESSION['soobsh'] . '</p>';
                };
                unset($_SESSION['soobsh']);
            ?>
            </fieldset>
    </form>
</body>
</html>