<?php
    session_start();
    require_once 'connect.php';

    $login = $_POST['login'];
    $parol = $_POST['parol'];

    $sql = mysqli_query($connection, "SELECT * FROM `zareg` WHERE login = '$login' AND parol = '$parol'");
    if (mysqli_num_rows($sql) > 0) {
        header('location: ../site9.html');
    } else {
        $_SESSION['soobsh'] = 'Неверный логин или пароль!';
        header('location: ../reg.php');
    }
?>
