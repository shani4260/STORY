<?php
	if (isset($_GET['url'])){	
		$redirect_url=$_GET['url'];
		header("Location: " . $redirect_url);
	}	
?>

<!DOCTYPE html>
<html lang="he">
<head>
    <meta charset="UTF-8">
    <title>Story - Login </title>
	<link rel="stylesheet" type="text/css" href="../CSS/login.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    
	<header>
		<div id="logo">
				<img id="storyImg" src="../Images/storyLogo.png" class="center" alt= "logo">
				</div>
		<div id="error" class="error"></div>
	</header>
</head>
<body>
	<main>
		<section class="main_section">
			<form class="form">
				<h5>שם משתמש</h5>
				<label><input type="text" id="user" value="<?php if( isset( $_COOKIE['username'])) { echo $_COOKIE['username'];} ?>"></label>
				<h5>סיסמה</h5>
				<label><input type="password" id="password"></label>
				<br><br>
				<input type="button" class="button1" value="כניסה" onclick='login()'>
				<a href="register.php" class="button2">הרשמה</a>
				<br>
				 <a style = "margin-right:2% " href="login.php?url=https://wa.me/%2B972547688648?text=%D7%94%D7%99%D7%99%20STORY!%20%D7%94%D7%92%D7%A2%D7%AA%D7%99%20%D7%90%D7%9C%D7%99%D7%9B%D7%9D%20%D7%9E%D7%94%D7%90%D7%AA%D7%A8%20(-%3A">דברו איתנו בוואטסאפ</a>
			</form>
		</section>
	</main>
    <?php 
	    include "footer.php";
    ?>
    <script src="../JS/login.js"></script>
</body>
</html>