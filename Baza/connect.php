<?php
    $host = "localhost";
    $user = "root";
    $password = "";
    $database = "akkaunt";
    
    $connection = mysqli_connect($host, $user, $password, $database);
    if (!$connection) {
        die('Error connect to DataBase');
    }
?>
