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
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Nerko+One&display=swap" rel="stylesheet">
    <!-- <link rel="stylesheet" href="../css/blog.css"> -->
    <link rel="stylesheet" href="../css//blog.css?v=<?php echo time(); ?>">

</head>
<body >
    <div class="navbar">
        
        <div id="nav" class="sidenav">
            <img src="../img/defaultPic.png" id="profPicNav" onclick="home()">
            <div href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</div>
            <a class="user_name"><?= htmlspecialchars($name)?></a>
            <a href="#" id="navEl" onclick="pr()">Profile</a>
            <a href="#" id="navEl"  onclick="news()">News</a>
            <a href="#" id="navEl" onclick="blog()">Blog</a>
            <a href="#" id="navEl" onclick="ab()">About us</a>
            <button class="logout" onclick="out()">log out</button>
        </div>
        <div id="navbarBG"><span id="navdot" onclick="openNav()">&#9776;</span></div>
    </div>

    <div class="main">
    
        <div id="cover" onclick="closeNav()"></div>
        <img id="bg" src="../img/bgcat.png" alt="" style="top: 0px;">
        <div class="navbar">
            <img id="tscat" src="../img/lapki1.png" alt="lapki1">
        </div>
        
        <header id="mura_blog">BLOG</header>
        <hr>
        <div id="1" class="post" onclick="formond(this)">
            <p id="being_born" class="post_name">23/4/21 &emsp; &emsp; &emsp; &ensp;BEING BORN</p>
            <div class="hidden">
                <img src="../img/icon1.png" class="blog_photos" alt="FOTKA MURA">
                <p class="blog_text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nulla debitis odit consectetur a quos repellat nam minus officiis fugiat repellendus doloremque dolorem eligendi architecto dolores, necessitatibus in laboriosam enim magnam.</p>
            </div>
            
        </div>
        <div id="2" class="post" onclick="formond(this)">
            <p id="being_born" class="post_name">20/11/21 &emsp; &emsp; &emsp; &ensp;GETTING ADOPTED</p>
            <div class="hidden">
                <img src="../img/icon1.png" class="blog_photos" alt="FOTKA MURA">
                <p class="blog_text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nulla debitis odit consectetur a quos repellat nam minus officiis fugiat repellendus doloremque dolorem eligendi architecto dolores, necessitatibus in laboriosam enim magnam.</p>
            </div>
        </div>
        <div id="3" class="post" onclick="formond(this)">
            <p id="being_born" class="post_name">BEING BORN</p>
            <div class="hidden">
                <img src="../img/icon1.png" class="blog_photos" alt="FOTKA MURA">
                <p class="blog_text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nulla debitis odit consectetur a quos repellat nam minus officiis fugiat repellendus doloremque dolorem eligendi architecto dolores, necessitatibus in laboriosam enim magnam.</p>
            </div>
        </div>
        <div id="4" class="post" onclick="formond(this)">
            <p id="being_born" class="post_name">BEING BORN</p>
            <div class="hidden">
                <img src="../img/icon1.png" class="blog_photos" alt="FOTKA MURA">
                <p class="blog_text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nulla debitis odit consectetur a quos repellat nam minus officiis fugiat repellendus doloremque dolorem eligendi architecto dolores, necessitatibus in laboriosam enim magnam.</p>
            </div>
        </div>
        <div id="5" class="post" onclick="formond(this)">
            <p id="being_born" class="post_name">BEING BORN</p>
            <div class="hidden">
                <img src="../img/icon1.png" class="blog_photos" alt="FOTKA MURA">
                <p class="blog_text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nulla debitis odit consectetur a quos repellat nam minus officiis fugiat repellendus doloremque dolorem eligendi architecto dolores, necessitatibus in laboriosam enim magnam.</p>
            </div>
        </div>
        <div id="6" class="post" onclick="formond(this)">
        <p id="being_born" class="post_name">BEING BORN</p>
        <div class="hidden">
            <img src="../img/icon1.png" class="blog_photos" alt="FOTKA MURA">
            <p class="blog_text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nulla debitis odit consectetur a quos repellat nam minus officiis fugiat repellendus doloremque dolorem eligendi architecto dolores, necessitatibus in laboriosam enim magnam.</p>
        </div>
    </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="../js/blog.js"></script>
</body>
</html>