<?php
    require_once('init.php');
    if (!$session->signed_in){
        header('Location: login.php');
        exit;
	}
	$name_err = null;
    $to_email_err = null;
    $from_email_err = null;
    $greeting_err = null;
    $nameformat = "/^[A-Za-z ]+$/";
    $error=true;
    
   if(isset($_POST['submit'])) {
        $error=false;
       
        if(!$_POST['name']){
            $name_err = "זהו שדה חובה";
            $error=true; 
        }
        elseif(!preg_match($nameformat, $_POST['name']) ) {
            $name_err = "הזנת שם לא תקין - נא להזין שם מלא באנגלית";
            $error=true;  
        }
        if(!$_POST['to_email']){
             $to_email_err ="זהו שדה חובה";
             $error=true;  
        }

         if(!$_POST['comment']){
            $comment_err = "זהו שדה חובה";
            $error=true;  
        }
   }
 
?>
<!DOCTYPE html>
<html lang="he">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="../CSS/greeting.css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/d3js/5.15.1/d3.min.js"></script>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="jquery-3.2.1.min.js"></script>
	<script type="text/javascript"></script>

	<title>Reviews</title>
    
    <?php 
        include "header.php";
    ?>
</head>

<body>
    <main>
		<!-- form -->
        <section class="form">
            <form class="regForm" action="" method="post" enctype="multipart/form-data">
                <h1 class="send"><b>כתיבת ביקורת על עסקים</b></h1>
                <br>
                <label class= "lableForm" for="name">
                    <p>שם:<span class="purple">*</span></p>
                    <input class="in" type= "text" placeholder="שמך באנגלית" name="name" id="name">
                    <?php if(isset($name_err)){echo $name_err;}?>
                </label>
                
                <label class= "lableForm" for="email">
                    <p>כתובת מייל:<span class="purple">*</span> </p>
                    <input class="in" type= "text" name="to_email" id="to_mail">
                    <?php if(isset($to_email_err)){echo $to_email_err;}?>
                </label>
                
                
				<label class= "lableForm" for="bless"> תגובה : <span id="message-info"></span>
				<textarea class="form-field" id="comment" name="comment" rows="4" cols="50"></textarea>
                    
                    <?php if(isset($comment_err)){echo $comment_err;}?>
                </label>

                <label class= "lableForm in" for="pic">
                    <p>העלאת קובץ:</p>
                    <input class="in" type="file" name="file1" >
                </label>
                <br>
                <input type="submit" class="translate" name="submit" value="שליחת טופס">
				
                <br> 
				<div id= "send_success">
					<?php if(!$error) {echo 'התגובה נשלחה בהצלחה!';}?>
				</div>
				<?php 
					if (!empty($_FILES) && isset($_FILES['file1'])) {
						$dest = '../uploads/';
						$filename = $_FILES['file1']['name'];
						$sucess = 0;
						if(move_uploaded_file($_FILES['file1']['tmp_name'], $dest . $_FILES['file1']['name'])){ $sucess = 1;}
						function message(){ 
							global $sucess;
							global $filename;
							if($sucess == 1){ 
								return "<h1 style=background:> הקובץ הועלה בהצלחה<br><a href= ../uploads/$filename> לחץ לצפייה</a></h1>";
							}
						}
					}
					if(!empty($_FILES) && isset($_FILES['file1']))
						echo message(); 
				?>
            </form>
			<?php
				if ($_POST) {
					$name = $_POST['name'];
					$comment = $_POST['comment'];
					$connection = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
					if ($connection->connect_error){
						$connection=null;
					}

					$sql = "INSERT INTO comments(name,comment) VALUES ('$name','$comment')";
					if ($connection->query($sql) == FALSE) {
						echo "Can not continue.  Error is: " . $connection->error;
						exit();
					} 
				} 
				
				$connection = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
				$sql_sel = "SELECT * FROM comments ORDER BY id DESC";
				$result = $connection->query($sql_sel);
				$count = $result->num_rows;

				if($count > 0) {
			?>
			<div id="comment-count">
			<span id="count-number">תגובות</span> 
							
			<?php } ?>
			<div id="response">
			<?php
				while ($row = $result->fetch_array(MYSQLI_ASSOC)) // using prepared staement
				{
			?>
			<div id="comment-<?php echo $row["id"];?>" class="comment-row">
			<div class="comment-user"><?php echo $row["name"];?></div>
			<div class="comment-msg" id="msgdiv-<?php echo $row["id"];?>"><?php echo $row["comment"];?></div>
			<?php
				$connection1 = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
				$username = $_SESSION["username"];
				$sql_get = "SELECT * FROM users WHERE username='$username'";
				$result1 = $connection1->query($sql_get);
				$row1= $result1->fetch_assoc();
				if ($row1['is_admin'] == "1"){
					echo "<form action='comment-delete.php' method='POST'>
						<input type='hidden' name='comment_id' value=" . $row['id'] . ">
						<input type='submit' name='submit' value='Delete'></form>";				
				}
			}
			?>	
			</div>
		</div>
	</section>

    <?php 
	    include "footer.php";
    ?>

</body>
</html>