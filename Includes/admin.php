<?php
    require_once('init.php');
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
	<title>admin</title>
    
    <?php 
        include "header.php";
    ?>
</head>

<body>
	<main style="direction: rtl;">
		<form class="regForm" action="" method="GET" enctype="multipart/form-data">
			<p>קובץ למחיקה:<span class="purple"></p>
			<input class="in" type= "text" name="filename">
			<input type="submit" class="translate" name="submit" value="מחיקה">
			
			<?php
				$mydir = '../uploads'; 
				$myfiles = array_diff(scandir($mydir), array('.', '..'));
				myprint_r($myfiles);
				function myprint_r($myfiles) {	
					if(is_array($myfiles)) {
						echo "<table border=1 cellspacing=0 cellpadding=3 width=50%>";
						echo '<tr><td colspan=2 style="background-color:#333333;"><strong><font color=white>רשימת קבצים</font></strong></td></tr>';
						foreach ($myfiles as $k => $v) {
							echo '<tr><td valign="top" style="width:40px;background-color:#F0F0F0;">';
							echo '<strong>' . $k . "</strong></td><td>";
							myprint_r($v);
							echo "</td></tr>";
					}
					echo "</table>";
					return;
					}
					echo $myfiles;		
				}
				if (isset($_GET["filename"])){
					$file=$_GET["filename"];
					chdir('../uploads');
					system("del ".$file);
				}
			?>
		</form>
		
		<section class="regForm">
			<?php
				$connection = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
				$sql_sel = "SELECT * FROM users";
				$result = $connection->query($sql_sel);

				echo "<h1 style=color:#BCB9DD;><b>רשימת משתמשים באתר STORY:</b></h1>";
				while ($row = $result->fetch_array(MYSQLI_ASSOC)) // using prepared staement
				{
					echo "<br><b> שם: </b>". $row["first_name"]."<br><b>שם משפחה:</b>". $row["last_name"]."<br><b>אימייל: </b>".
					$row["email"] ."<br><b> מגדר:</b>". $row["gender"]."<br><b> העדפה:</b>". $row["interest"]."<br><b> אזור:</b>". $row["area"]."<br><br>";
				}
			?>
		</section>
	</main>
	
	<?php 
		include "footer.php";
	?>
	
</body>
</html>