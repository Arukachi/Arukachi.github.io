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
    <title>Final</title>
    <!-- <link rel="stylesheet" href="../css/welcome.css"> -->
    <link rel="stylesheet" href="../css/welcome.css?v=<?php echo time(); ?>">

</head>

<body>
    <div id="nav" class="sidenav">
        <img src="../img/defaultPic.png" id="profPicNav">
        <div href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</div>
        <a class="user_name"><?= htmlspecialchars($name)?></a>
        <a class="navEl" id="nav1">Profile</a>
        <a class="navEl" id="nav2">News</a>
        <a class="navEl" id="nav3">Blog</a>
        <a class="navEl" id="nav4">About Us</a>
        <button class="logout" id="nav5">log out</button>
    </div>
    <div id="navbarBG"><span id="navdot" onclick="openNav()">&#9776;</span></div>

    <div class="main">
        <div id="cover" onclick="closeNav()"></div>
        <img src="../img/lapki.png" id="lapki">
        <div id="headerText">
            <h1>Welcome to the club, buddy!</h1>
            <h2>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae eligendi modi perspiciatis aliquid</h2>
        </div>
        <div id="windows">
            <div id="box" class="box1">
                <img id="windPic" src="../img/defaultPic.png">
                <h3>Your Own Profile!</h3>
                <p id="boxText">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolorum laudantium soluta
                    molestias aspernatur ducimus neque optio</p>
                <p id="more"><a id="more" class="moreLink"> More</a></p>
            </div>
            <div id="box" class="box2">
                <img id="windPic" src="../img/murBlog.jpeg">
                <h3>Mura's blog!</h3>
                <p id="boxText">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolorum laudantium soluta
                    molestias aspernatur ducimus neque optio</p>
                <p id="more"><a id="more2" class="moreLink"> More</a></p>
            </div>
            <div id="box" class="box3">
                <img id="windPic" src="../img/murNews.jpeg">
                <h3>News!</h3>
                <p id="boxText">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolorum laudantium soluta
                    molestias aspernatur ducimus neque optio</p>
                <p id="more"><a id="more3" class="moreLink"> More</a></p>
            </div>
        </div>

        <div class="bd">
            <div id="time">
            </div>
            <div class="bdMuraPic">
            </div>
        </div>

        <p id="gameRules">Press "Enter" to play and jump!</p>

        <div id="game">
            <div id="character"></div>
            <div id="block"></div>
            <div id="gameOver">Game Over</div>
        </div>
    </div>

    <footer class="footer">
        <div class="waves">
            <div class="wave" id="wave1"></div>
            <div class="wave" id="wave2"></div>
            <div class="wave" id="wave3"></div>
            <div class="wave" id="wave4"></div>
        </div>
        <ul class="icons">
            <li class="icon"><a class="iconLink" href="https://www.instagram.com/_arukachi_/"><img src="../img/insta.png" id="iconPic"></a></li>
            <li class="icon"><a class="iconLink" href="https://linksharing.samsungcloud.com/9iEzH3ETf2Jn"><img src="../img/telega.png" id="iconPic"></a></li>
            <li class="icon"><a class="iconLink" href="https://youtu.be/2HVKizgcfjo"><img src="../img/tube.png" id="iconPic"></a></li>
        </ul>
        <ul class="menu">
            <li class="fItem"><a class="fLink" href="#">Home</a></li>
            <li class="fItem"><a class="fLink" href="http://localhost/final%20INF231/php/about.php">About</a></li>
            <li class="fItem"><a class="fLink" href="../img/whatsUp.jpeg">Contact</a></li>
        </ul>
    </footer>
    <script type="text/javascript" src="..\js\welcomee.js"></script>
</body>

</html>