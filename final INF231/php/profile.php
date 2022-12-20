<?php
session_start();
if (isset($_SESSION["username"])) {
    $mysql = new mysqli('localhost', 'root', '', 'sign');
    $sql = "SELECT * FROM `sing` WHERE `username` = '{$_SESSION["username"]}'";
    $result = $mysql->query($sql);
    $user = $result->fetch_assoc();
}
?>

<?php
if(isset($_POST["new_name"]) || isset($_POST["new_email"]) || isset($_POST["new_gender"]) || isset($_POST["new_password"])){
    $mysql = new mysqli('localhost', 'root', '', 'sign');
    if(!empty(trim($_POST["new_name"]))){
        $name = trim($_POST["new_name"]);
        $mysql->query("UPDATE `sing` SET `username` = '$name' WHERE `username` = '{$_SESSION["username"]}'");
        header("Location: http://localhost/final%20INF231/php/signIn.php");
    }
    if(!empty(trim($_POST["new_email"]))){
        $email = trim($_POST["new_email"]);
        $mysql->query("UPDATE `sing` SET `email` = '$email' WHERE `username` = '{$_SESSION["username"]}'");
        header("Refresh:0");
    }
    if(isset($_POST["new_gender"])){
        $gender = trim($_POST["new_gender"]);
        $mysql->query("UPDATE `sing` SET `gender` = '$gender' WHERE `username` = '{$_SESSION["username"]}'");
        header("Refresh:0");
    }
    if(!empty(trim($_POST["new_password"]))){
        $password = trim($_POST["new_password"]);
        $mysql->query("UPDATE `sing` SET `password` = '$password' WHERE `username` = '{$_SESSION["username"]}'");
        header("Location: http://localhost/final%20INF231/php/signIn.php");
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link rel="stylesheet" href="../css/profile.css" type="text/css"> -->
    <link rel="stylesheet" href="../css/profile.css?v=<?php echo time(); ?>">
</head>
<body>

    <h1>YOUR PROFILE!</h1>

    <div class="profile">
        <div class="photo">
            <div class="img"><img src="..\img\defaultPic.png" id="imgg" alt="img"></div>
            <button id="open">edit profile</button>
        </div>
            <div class="info">
                <h3>username</h3>
                <h2 id="usn"><?= htmlspecialchars($user["username"])?></h2>
                <h3>gender</h3>
                <h2 id="gen"><?= htmlspecialchars($user["gender"])?></h2>
                <h3>email</h3>
                <h2 id="em"><?= htmlspecialchars($user["email"])?></h2>
                <h3>password</h3>
                <h2 id="ps"><?= htmlspecialchars($user["password"])?></h2>
            </div>
    </div>

    <form action="" method="post">
        <div class="pop_edit" id="pop">
            <h2>EDIT</h2>
            <p>Username</p>
            <input class="a" type='username' name="new_name" autocomplete="off">
            <p>Email</p>
            <input class="a" type='email' id="e" autocomplete="off" name = "new_email">                        
            <p>Gender</p>
            <div class="radio">
                <label> Female <input type="radio" id="gender1" name="new_gender" value="female"></label>
            
                <label> Male <input type="radio" id="gender2" name="new_gender" value="male"></label>
                
                <label> Cat <input type="radio" id="gender3" name="new_gender" value="cat"></label>
            </div>
            <p>Password</p>
            <input class="a"  type='password' name="new_password" autocomplete="off" id="p" placeholder="  password">
            <input class="a"  type='password' autocomplete="off" id="p2" placeholder="  confirm password">
            <button id="close" >Submit</button>
        </div>
    </form>
    

</body>

<script src="../js/profile_pop.js"></script>
</html>