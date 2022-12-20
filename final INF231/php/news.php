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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nerko+One&display=swap" rel="stylesheet">
    <!-- <link rel="stylesheet" href="../css/news.css"> -->
    <link rel="stylesheet" href="../css/news.css?v=<?php echo time(); ?>">
</head>

<body>
    <div class="navbar">
        <img src="../img/paw.png" alt="">
        <header id="news">MURA NEWS</header>
        <img src="../img/paw.png" alt="">
        <div id="nav" class="sidenav">
            <img src="../img/defaultPic.png" id="profPicNav" onclick="home()">
            <div href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</div>
            <a class="user_name"><?= htmlspecialchars($name)?></a>
            <a href="#" id="navEl" onclick="pr()">Profile</a>
            <a href="#" id="navEl"  onclick="news()">News</a>
            <a href="#" id="navEl" onclick="blog()" >Blog</a>
            <a href="#" id="navEl" onclick="ab()">About us</a>
            <button class="logout" onclick="out()">log out</button>
        </div>
        <div id="navbarBG"><span id="navdot" onclick="openNav()">&#9776;</span></div>
    </div>

    <div class="main">
        <div id="cover" onclick="closeNav()"></div>
        <marquee class="marq" Scrollamount=15> BREAKING NEWS! RUNNING WORDS</marquee>

        <section class="posts">
            <ul class="post_lists" id="post_lists">
                <li>
                    <div class="post">
                        <img class="post_img" src="../img/icon4.png" alt="mura's photo">
                        <p class="post_title">Title</p>
                        <div class="txt">
                            <span class="teaser">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Earum nemo
                                repellat tempora cum asperiores</span>

                            <span class="complete"> laborum quo molestias, quae minus sequi distinctio quod magni odio est
                                perspiciatis placeat ea beatae error?</span>

                            <span class="more" onclick="toggleText(this)">more...</span>
                        </div>



                    </div>
                </li>
                <li>
                    <div class="post">
                        <img class="post_img" src="../img/icon5.png" alt="mura's photo">
                        <p class="post_title">Title</p>
                        <div class="txt">
                            <span class="teaser">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Earum nemo
                                repellat tempora cum asperiores</span>

                            <span class="complete"> laborum quo molestias, quae minus sequi distinctio quod magni odio est
                                perspiciatis placeat ea beatae error?</span>

                            <span class="more" onclick="toggleText(this)">more...</span>
                        </div>

                    </div>
                </li>
                <li>
                    <div class="post">
                        <img class="post_img" src="../img/icon6.png" alt="mura's photo">
                        <p class="post_title">Title</p>

                        <div class="txt">
                            <span class="teaser">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Earum nemo
                                repellat tempora cum asperiores</span>

                            <span class="complete"> laborum quo molestias, quae minus sequi distinctio quod magni odio est
                                perspiciatis placeat ea beatae error?</span>

                            <span class="more" onclick="toggleText(this)">more...</span>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="post">
                        <img class="post_img" src="../img/icon7.png" alt="mura's photo">
                        <p class="post_title">Title</p>

                        <div class="txt">
                            <span class="teaser">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Earum nemo
                                repellat tempora cum asperiores</span>

                            <span class="complete"> laborum quo molestias, quae minus sequi distinctio quod magni odio est
                                perspiciatis placeat ea beatae error?</span>

                            <span class="more" onclick="toggleText(this)">more...</span>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="post">
                        <img class="post_img" src="../img/icon8.png" alt="mura's photo">
                        <p class="post_title">Title</p>

                        <div class="txt">
                            <span class="teaser">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Earum nemo
                                repellat tempora cum asperiores</span>

                            <span class="complete"> laborum quo molestias, quae minus sequi distinctio quod magni odio est
                                perspiciatis placeat ea beatae error?</span>

                            <span class="more" onclick="toggleText(this)">more...</span>
                        </div>
                    </div>
                </li>
            </ul>
        </section>
    </div>
    <script src="../js/jquery.min.js"></script>
    <script src="../js/news.js"></script>

</body>

</html>