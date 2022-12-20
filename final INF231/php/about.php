<?php
session_start();
if (isset($_SESSION["username"])) {
    $mysql = new mysqli('localhost', 'root', '', 'sign');
    $name = $_SESSION["username"];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Josefin+Sans&family=Montserrat&family=Nerko+One&family=Secular+One&display=swap"
        rel="stylesheet">
    <title>About</title>
    <!-- <link rel="stylesheet" href="../css/aboutus.css"> -->
    <link rel="stylesheet" href="../css/aboutus.css?v=<?php echo time(); ?>">
    
</head>

<body>

    <div class="navbar">
        <div id="nav" class="sidenav">
            <img src="../img/defaultPic.png" id="profPicNav" onclick="home()">
            <div href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</div>
            <a class="user_name"><?= htmlspecialchars($name)?></a>
            <a id="navEl" onclick="pr()">Profile</a>
            <a id="navEl" onclick="news()">News</a>
            <a id="navEl" onclick="blog()">Blog</a>
            <a id="navEl" onclick="ab()">About us</a>
            <button class="logout" onclick="out()">log out</button>
        </div>
        <div id="navbarBG"><span id="navdot" onclick="openNav()">&#9776;</span></div>
    </div>
    

    <audio src="../sound.mp3"></audio>
    <button id="btn">
        <img id="music" src="../img/mute.png" alt="off">
    </button>

    <div class="main">
        <div id="cover" onclick="closeNav()"></div>
        <div class='wrapper'>
            <h1>Murachkala Team</h1>
            <div id="title">Login: Rabina</div>
            <div id="title">Profile: Rabina </div>
            <div id="title">Sign Up: Rabina </div>
            <div id="title">Blog: Aruzhan </div>
            <div id="title">News: Aruzhan </div>
            <div id="title">Welcome Page: Ulday </div>
            <div id="title">About Us: Ulday </div>
            <div id="title">Design: All </div>
            <div id="title">Idea: All </div>
            <div id="title">Team Lead: Mura </div>
            <div id="title">Sponsor: Mura </div>
            <div id="title">Best Hug Giver: Mura </div>
            <img src="../img/M1.jpg" id="m" alt="M"> 
            <img src="../img/M2.jpg" id="m" alt="M">
            <img src="../img/M3.jpg" id="m" alt="M">
            <img src="../img/M4.jpg" id="m" alt="M">
            <img src="../img/M5.jpg" id="m" alt="M">
            <img src="../img/M6.jpg" id="m" alt="M">
            <img src="../img/M7.jpg" id="m" alt="M">
            <img src="../img/M8.jpg" id="m" alt="M">
            <img src="../img/M9.jpg" id="m" alt="M">
            <img src="../img/M10.jpg" id="m" alt="M">
            <div class="ap" id="ap"></div>
        </div>
    </div>


    <script type="text/javascript" src="../js/aboutus.js"></script>

</body>

</html>