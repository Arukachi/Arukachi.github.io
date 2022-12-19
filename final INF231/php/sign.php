<?php
    $email = trim($_POST['email']);
    $username = trim($_POST['username']);
    $gender = $_POST["gender"];
    $pass = trim($_POST['password']);
    $mysql = new mysqli('localhost', 'root', '', 'sign');
    $mysql->query("INSERT INTO `sing` (`email`, `username`, `gender`, `password`) VALUES('$email', '$username', '$gender', '$pass')");
    $mysql->close();
    header("Location: http://localhost/final%20INF231/html/sign.html");
    exit();
?>
