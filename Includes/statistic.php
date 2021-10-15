<?php
    require_once('init.php');

    if (!$session->signed_in){
        header('Location: login.php');
        exit;
    }
	$userurl = $_GET['id'];
	$connection = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
	$sql_sel = "SELECT * FROM `users` WHERE `id`='$userurl'";
	$result = $connection->query($sql_sel);
	if ($result->fetch_array(MYSQLI_ASSOC) == FALSE) {
		header('Location: login.php');
		exit();
	} 
	
	$results = $db->query("SELECT * FROM `projects` ORDER BY `views` DESC LIMIT 3");
?>
<!DOCTYPE html>
<html lang="he">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link rel="stylesheet" type="text/css" href="../CSS/statistic.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    
    <title>Statistics</title>
	
	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
		google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
			var data = google.visualization.arrayToDataTable([
                ['Project name', 'Views'],
                <?php
                while( $row = $results->fetch_assoc() ) {
                    echo "['".$row['name']."', ".$row['views']."],";
                }
                ?>
            ]);

            var options = {
                title: 'הכי נצפים שלנו'
            };

            var chart = new google.visualization.PieChart(document.getElementById('piechart'));

            chart.draw(data, options);
        }
    </script>
	
	<?php 
		include "header.php";
    ?>
</head>
<body>
    <main>
        <!-- graph -->
        <div class="title">
            <h1>הפרויקטים הנצפים ביותר </h1> 			
        </div>
        
		<section>
			<div id="piechart"></div>
		</section>
		
		<div class="title">
          
		<?php
			$userurl = $_GET['id'];
			$connection = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
			$sql_sel = "SELECT * FROM `users` WHERE `id`='$userurl'";
			$result = $connection->query($sql_sel);
			$row = $result->fetch_array(MYSQLI_ASSOC);
			$name = $row['username'];
			echo '<h1>'.$name.' הפרויקט הנצפה ביותר שמתאים עבור </h1>'; 
		?>
		
        </div>
        <!-- end of graph -->
		
        <!-- alorithm -->
	    <section class="algorithm">
				
			<?php
				$area = $row['area'];
				$interest = $row['interest'];
				$result=UserStoreProject::finding_user_preferences($area,$interest);
		
				while($row = $result->fetch_assoc()){
					echo '<div class="Custom_name">שם העסק:<br> '.$row['name'].'</div><br><div class="Custom_interest">תחום עניין: '.$row['interest'].'</div><br><div class="Custom_city">עיר: '.$row['city'].'</div><br>
					<a  href="'.$row['link'].'.php">קישור לפרויקט</a>';
				} 
				
				
			?> 
		</section>	
		<!-- end of alorithm -->
		
		<div id="popUpOverlay"></div>
			<div id="popUpBox">
				<div id="box">
					<div id="closeModal"></div>
        			<img src="../Images/storyLogo.png" alt="storyLogo" id="storyLogo">
        			<h1>
            			   לכל עסק באתר שלנו יש סיפור שלם מאחוריו. <br> אנחנו ב- STORY דואגים להתאים לכל פרויקט את התורם הרלוונטי בקורולציה מושלמת. המידע מתבסס על הפרופיל האישי שלך ועל פרמטרים נוספים. <br>
                           האלגוריתם אוסף מידע על הפרויקטים הנצפים ביותר באתר, ומציג את הפרויקט שתחושת הבטן שלנו אומרת שתרגיש איתו בבית- אנחנו מתבססים על אזור מגורים, תחומי עניין ופופולריות הפרויקט. <br>
                           שילוב פרמטרים אלו מעניקים לך את התוצאות הטובות ביותר וקולעים בדיוק לטעמך האישי.
                        <br>
                        <br> תמיד שלכם,<br>
                        <b>צוות STORY</b>
                        <br>
                        <br>
        			</h1>
    		    </div>
	        </div>
	        <button onclick="Alert.render('.')" class="popup_btn" id="popup_btn">אודות האלגוריתם</button>
        </section>
        <br>
        <br>
        
		<div class="title">
            <h1>מסעדות על פי אזור</h1> 			
        </div>
        
		<h3 id= "description_title">בטבלה זו ניתן לראות את אחוז המסעדות באזור מסוים מתוך כלל המסעדות באתר</h3>
		<!-- table -->
        <section>
			<article class="table_art">
			    <table class="table_statistic">
			        <thead>
                        <tr>
                            <th>אחוז המסעדות</th>
                            <th>אזור</th>
                        </tr>
    			    </thead>
    				<tr>
            			<?php
            				 $numOfResturants=Store::count_resturants();
            				 $numOfCenterResturants=Store::find_resturants_in_center();
            				 $numOfNorthResturants=Store::find_resturants_in_north();
            				 $numOfSouthResturants=Store::find_resturants_in_south();
            		    ?>
            			<td><?php
            					$precent_north=$numOfNorthResturants/$numOfResturants;
            					$precent_north=$precent_north*100;
            					echo $precent_north.'%';
            				?></td>
            			<td>צפון</td>
            		</tr>	
            			
    			    <tr>
        				<td><?php
        					$precent_center=$numOfCenterResturants/$numOfResturants;
        					$precent_center=$precent_center*100;
        					echo $precent_center.'%';
        				?></td>
    				    <td>מרכז</td>
    			    </tr>
    			    <tr>
    				<td>
    				    <?php
        					$precent_south=$numOfSouthResturants/$numOfResturants;
        					$precent_south=$precent_south*100;
        					echo $precent_south.'%';
        				?></td>
        				<td>דרום</td>
    			    </td>
			    </table>
		    </article>
	    </section>
        <!-- end of table -->
    </main>

    <?php 
	    include "footer.php";
    ?>
    <script src="../JS/statistic.js"></script>
</body>
</html>