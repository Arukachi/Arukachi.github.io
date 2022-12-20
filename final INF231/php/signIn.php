<?php
    if(isset($_POST['password']) && isset($_POST['uname'])){
    	$mysql = new mysqli('localhost', 'root', '', 'sign');
        $user = $_POST['uname'];
        $pass = $_POST['password'];
        $query = "SELECT * FROM `SING` WHERE `username` = '$user' AND `password` = '$pass'";
        $res = mysqli_query($mysql, $query);
        $user = $res->fetch_assoc();
        $text = " ";
        foreach ($res as $a){
            foreach ($a as $value){
                $text .= "$value"." ";
            }
        }   
        $check = trim($text);
        if (!empty($check)) {
            session_start();
            session_regenerate_id();
            $_SESSION["email"] = $user["email"];
            $_SESSION["username"] = $user["username"];
            $_SESSION["gender"] = $user["gender"];
            $_SESSION["password"] = $user["password"];
        }       
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style_sign.css">
    <title>Final</title>
</head>
<body>

    <div class="container">
        <div class="sign" id="sign">
            <section class="SignIn">
                <form action="signIn.php" method="post">
                    <div class="signin">
                        <p class="text">Sign In</p>
                        <input  type='username' name="uname" id="e" autocomplete="off" placeholder="  username">
                        <input type='password' name="password" autocomplete="off" id="password" placeholder="  password">
                        <button id="submit" >Submit</button>
                    </div>
                </form>

                <p class="no">Don't have an account? <a id="click">Sign up here</a></p>
                <div class="incorrect" id="inc">
                    <center> Password! </center>
                    <button id="ok">OK</button>
                </div>
            </section>

            <section class="SignUp">
                <form action="sign.php" method="POST">
                    <div class="signup">
                        <p class="text">Sign UP</p>
                        <input  type='email' id="e" autocomplete="off" placeholder="  email" name = "email">
                        <input  type='username' name="username" id="uname" autocomplete="off" placeholder="  username">
                        
                            <p>Gender</p>
                                <div class="radio">
                                    <label> Female <input type="radio" id="gender1" name="gender" value="female"></label>
                                
                                    <label> Male <input type="radio" id="gender2" name="gender" value="male"></label>
                                    
                                    <label> Cat <input type="radio" id="gender3" name="gender" value="cat"></label>
                                </div>
                        <input type='password' name="password" autocomplete="off" id="p" placeholder="  password">
                        <input type='password' name = "password2" autocomplete="off" id="p2" placeholder="  confirm password">
                        <button id="subm" >Submit</button>
                    </div>
                </form>

                <p class="no">Already have an account? <a id="rev_click">Sign in here</a></p>
            </section>
        </div>
    </div>

</body>
<script src="../js/signIn.js"></script>
<script src="..\js\sign.js"></script>

</html>


<script>
    var url = "<?= $text ?>";
    myScriptFunction(url);
</script>