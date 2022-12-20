<?php
    $email = trim($_POST['email']);
    $username = trim($_POST['username']);
    $gender = $_POST["gender"];
    $pass = trim($_POST['password']);
    $pass2 = trim($_POST["password2"]);
    $mysql = new mysqli('localhost', 'root', '', 'sign');
    if ($pass === $pass2) {
        $mysql->query("INSERT INTO `sing` (`email`, `username`, `gender`, `password`) VALUES('$email', '$username', '$gender', '$pass')");
        $mysql->close();
        header("Location: http://localhost/final%20INF231/php/signIn.php");
        exit();
    }
    else{
        echo "<script> alert('Passwords are not the same!');
        document.location.href = 'http://localhost/final%20INF231/php/signIn.php' </script>";

    };
?>
