<?php

    require_once('init.php');
    
    global $session;
    
    $error=null;
    $username_error = null;
    
    if( isset($_POST['register'])) {
    
    	if (!$_POST['username']){
    		$username_error='יש להזין שם משתמש';
    		$error=1;
    	}
    	else{
    		if(!preg_match('/^[a-zA-Z0-9]{4,}$/', $_POST['username'])) {
                $username_error=' יש להזין שם משתמש תקין באנגלית הכולל מינימום 4 אותיות/מספרים';
    			$error=1;
    		}
    		elseif(User::find_username($_POST['username']) == 1)
    		{
    		    $username_error='שם המשתמש קיים במערכת - נא להזין שם משתמש אחר';
    		    $error=1;
    		}
    	}
    
        if (!$_POST['password']){
    		$password_error='יש להזין סיסמה';
    		$error=1;
    	}
    	else{
    		if(!preg_match('/^[a-zA-Z0-9]{4,}$/', $_POST['password'])) {
    			$password_error='יש להזין סיסמה תקינה הכוללת מינימום 4 אותיות/ספרות';
    			$error=1;
    		}
    	}
    
    	if (!$_POST['email']){
    		$email_error='יש להזין כתובת מייל';
    		$error=1;
    	}
    	else{
    		if(! filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))
    		{
    			$email_error = "יש להזין מייל תקין";
    			$error=1;
    		}
    	}
    	if (!$_POST['firstName']){
    		$firstName_error='יש להזין שם פרטי';
    		$error=1;
    	}
    	else{
    		if(!preg_match('/^[א-ת]{2,}$/', $_POST['firstName'])) {
    			$firstName_error='יש להזין שם פרטי תקין';
    			$error=1;
    		}
    
    	}
    	if (!$_POST['lastName']){
    		$lastName_error='יש להזין שם משפחה';
    		$error=1;
    	}
    	else{
    		if(!preg_match('/^[א-ת]{2,}$/', $_POST['lastName'])) {
    			$lastName_error='יש להזין שם משפחה תקין';
    			$error=1;
    		}
    	}
    	if (!$_POST['gender']){
    	    $gender_error='יש לבחור מגדר';
    		$error=1;
    	}
    	
    	if (!$_POST['area']){
    	    $area_error='יש לבחור אזור מגורים';
    		$error=1;
    	}
    
    	if (!$_POST['interest']){
    		$interest_error='יש לבחור קטגוריית תרומה מועדפת';
    		$error=1;
    	}
    
        if(!$error){
    
    	    $error=User::add_user($_POST['username'],$_POST['password'],$_POST['email'],$_POST['firstName'],$_POST['lastName'],$_POST['area'],$_POST['gender'],$_POST['interest']);
            if ($error)
                echo '<p>'.$error.'</p>';
            else{
		        $session->login($user);
			    header('location:../index.php');
		    }
    	}
    }

?>
<!DOCTYPE html>
<html lang="he">
<head>
    <meta charset="UTF-8">
    <title>Story - Registration </title>
	<link rel="stylesheet" type="text/css" href="../CSS/register.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
	<header>
		<div id="logo">
			<img id="storyImg" src="../Images/storyLogo.png" alt= "logo">
		</div>
		<div id="error" class="error"></div>
	</header>
</head>
<body>
    <main>
    	<section class="main_section">	
    	    <form id="regForm" action="register.php" method="post">
        	    
                <h2><b>הרשמה לאתר</b></h2>
                <label class= "lableForm">
                    <div>שם משתמש:</div><input type="text" name="username">
                    <?php
                        if( isset($username_error)) {
                            echo '<div class="error">'.$username_error.'</div>';
                        }
                    ?>
                </label>
    			<br>
                <label class= "lableForm">
    				<div>סיסמה:</div><input type="password" name="password">
    				<?php
                        if( isset($password_error)) {
                            echo '<div class="error">'.$password_error.'</div>';
                        }
                    ?>
    			</label>
    			<br>
                <label class= "lableForm">
    				<div>כתובת מייל:</div><input type="mail" name="email">
    				<?php
                        if( isset($email_error)) {
                            echo '<div class="error">'.$email_error.'</div>';
                        }
                    ?>
    			</label>
    			<br>
    			<label class= "lableForm">
    				<div>שם פרטי:</div><input type="text" name="firstName" placeholder="שם פרטי בעברית בלבד">
    				<?php
                        if( isset($firstName_error)) {
                            echo '<div class="error">'.$firstName_error.'</div>';
                        }
                    ?>
    			</label>
    			<br>
    			<label class= "lableForm">
    				<div>שם משפחה:</div><input type="text" name="lastName" placeholder="שם משפחה בעברית בלבד">
    				<?php
                        if( isset($lastName_error)) {
                            echo '<div class="error">'.$lastName_error.'</div>';
                        }
                    ?>
    			</label>
    			<br>
    			<label class="lableForm">מגדר: 
    				<input type="radio" name="gender" value="ז">
    				זכר
    				<input type="radio" name="gender" value="נ">
    				  נקבה
    				<?php
                        if( isset($gender_error)) {
                            echo '<div class="error">'.$gender_error.'</div>';
                        }
                    ?>
    			</label>
    			<br>
    			<label class= "lableForm">
    			    <select name="area">
    				    <option value="">--אזור מגורים--</option>
    			    	<option value="מרכז" >מרכז</option>
    				    <option value="צפון" >צפון</option>
    			    	<option value="דרום" >דרום</option>
                    </select> 
            	<?php
                    if( isset($area_error)) {
                        echo '<div class="error">'.$area_error.'</div>';
                    }      
                ?>
                </label>
    			<br>
    			<label class= "lableForm"><select name="interest">
    				<option value="">--קטגוריית תרומה מועדפת--</option>
    				<option value="מסעדות" >מסעדות</option>
    				<option value="אופנה" >אופנה</option>
    				<option value="טיפוח" >טיפוח</option>
    				<option value="פנאי" >פנאי</option>
    				<option value="טכנולוגיה" >טכנולוגיה</option>
    				<option value="בעלי מקצוע" >בעלי מקצוע</option>
                </select>
               	<?php
                    if( isset($interest_error)) {
                        echo '<div class="error">'.$interest_error.'</div>';
                    }
                ?>
                </label>
    			<br>
                <input type="submit" class="button" name="register" value="הרשמה">
                <a class="button2" href="login.php">התחברות</a>
            	<br>
            </form>
        </section>
    </main>
    <?php 
	    include "footer.php";
    ?>
</body>
</html>