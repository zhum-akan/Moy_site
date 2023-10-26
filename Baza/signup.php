<?php
    session_start();
    require_once 'connect.php';
    $connection = mysqli_connect($host, $user, $password, $database);

    $fullname = $_POST['fullname'];
    $login = $_POST['login'];
    $parol = $_POST['parol'];
    $podparol = ($_POST['podparol']);
    if ($parol === $podparol) {
        $sql = "INSERT INTO zareg (login, parol) VALUES ('$login', '$parol')";
        $result = mysqli_query($connection, $sql);
        $connection-> close();
        $_SESSION['regmsg'] = 'успешно зарегестрирован!';
        if ($_SESSION['regmsg']) {
            $_SESSION['regmsg'] = 'успешно зарегестрирован!';
            header('location: ../reg.php');
        }
    } else {
        $_SESSION["ms"] = 'Пароли не совпадают';
        header('Location: ../zareg.php');
    }
?>
