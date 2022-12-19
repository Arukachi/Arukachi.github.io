<?php
	$mysql = new mysqli('localhost', 'root', '', 'sign');
	$user = $_GET['uname'];
	$pass = $_GET['password'];
	$query = "SELECT * FROM `SING` WHERE `username` = '$user' AND `password` = '$pass'";
	$res = mysqli_query($mysql, $query);
	$text = "";
	foreach ($res as $a){
		foreach ($a as $value){
			 $text .= "$value"." ";
		}
	}
    
?>

<script>
		document.location.href = "http://localhost/final%20INF231/html/sign.html";
		var text = "<?=  $text ?>";
		if(text.trim().length === 0){
			alert("INCORRECT!");
		}		
		else{
			document.location.href = "../html/welcome.html";
		}
		
</script>
