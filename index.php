<?php
    require_once('Includes/init.php');
	if (!$session->signed_in){
        header('Location: Includes/login.php');
        exit;
    }
	else{
		$connection1 = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
		$username = $_SESSION["username"];
		$sql_get = "SELECT * FROM users WHERE username='$username'";
		$result1 = $connection1->query($sql_get);
		$row1= $result1->fetch_assoc();
		if ($row1['is_admin'] == "1"){
			echo '<script>window.location.href = "Includes/admin.php";</script>';
			exit;
		}		
	}
?>

<!DOCTYPE html>
<html lang="he">
<head>
    <meta charset="UTF-8">
    <title>STORY</title>

    <link rel="stylesheet" type="text/css" href="CSS/storycss.css"/>
    <link rel="stylesheet" type="text/css" href="CSS/header.css"/>
    <link rel="stylesheet" type="text/css" href="CSS/footer.css">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

    <?php 
        include "Includes/header.php";
    ?>
</head>

<body>
	<main>
	
		<section>
			<video  id="mainVideo" autoplay loop muted>
				<source src="Videos/video.mov" type="video/mp4">
            </video>
        </section>
		
		<section>
			<div class="title"><b style=font-size:30px;>שעון מקומי</b><a id="link" href="index.php?time=Includes/time.php">לצפייה</a></div>
			<?php 
				if(isset($_GET['time'])) {
					include($_GET['time']); 
				}
			?>
		</section>

        <!-- process explanation -->
        <div class="title">
            <h1>ככה תורמים היום</h1>
        </div>

        <div class="process row" style="--bs-gutter-x:0;">
		
			<section  class="col-4">
				<div class="explanation right">
                    <legend>3</legend>
                    <img class="processImg" src="Images/MAGEN.png">
                    <p>נהנים ומסייעים לעסקים ישראליים </p>
                </div>
            </section>

            <section  class= "col-4">
				<div  class="explanation center" >
                    <legend>2</legend>
                    <img class="processImg" src="Images/BUY.png">
                    <p> בוחרים תשורה לקנייה</p>
                </div>
            </section>

            <section class= "col-4">
                <div  class="explanation left" >
                    <legend>1</legend>
                    <img class="processImg" src="Images/searching.png">
                    <p> מחפשים עסק שקרוב ללבם</p>
                </div>
            </section>
        </div>
        <!-- end of process explanation -->
		
        <!-- quick access to store pages -->
        <section>
		
            <div class="title">
				<h2>הזדמנות אחרונה לתת יד</h2>
            </div>

            <div class="gallery">
				<article class="store">
                    <figure>
					
                        <a target="_blank" href="Includes/Rustico.php">
                            <img src="Images/rustico.jpg" alt="Rustico">
                        </a>
						
                        <figcaption class="storeName">
                            <p>Rustico</p>
                            <p>תל אביב</p>
                            <p>70%</p>
                            <div class="bar" id="one"></div>
                            <div class="stats">
							
								<div class="col">
                                    70,000 <br>
                                    <span class="small"> מתוך 100,000</span>
                                </div>
								
                                <div class="col">
                                    2 ימים <br>
                                    <span class="small">נותרו</span>
                                </div>
								
                                <div class="col">
                                    100 <br>
                                    <span class="small">תומכים</span>
                                </div>
								
                            </div>
                        </figcaption>
						
                    </figure>
                </article>

                <article class="store">
					<figure>
					
                        <a target="_blank" href="Includes/falafelbaribua.php">
                            <img src="Images/falafel.jpeg" alt="פלאפל בריבוע">
                        </a>
						
                        <figcaption class="storeName">
                            <p>פלאפל בריבוע</p>
                            <p>חיפה</p>
                            <p>85%</p>
                            <div class="bar" id="two"></div>
                            <div class="stats">
							
                                <div class="col">
                                    85,000 <br>
                                    <span class="small"> מתוך 100,000</span>
                                </div>
								
                                <div class="col">
                                    3 ימים <br>
                                    <span class="small">נותרו</span>
                                </div>
								
                                <div class="col">
                                    123 <br>
                                    <span class="small">תומכים</span>
                                </div>
								
                            </div>
                        </figcaption>
                    </figure>
                </article>

                <article class="store">
                    <figure>
                        <a target="_blank" href="#" class="no" title="לא פעיל">
                            <img src="Images/play.png" alt="toy store" >
                        </a>
                        <figcaption class="storeName">
                            <p>PLAY</p> 
                            <p>תל אביב</p>
                        	<p>92%</p>
                            <div class="bar" id="three"></div>
                            <div class="stats">
							
                                <div class="col">
                                    460,000 <br>
                                    <span class="small"> מתוך 500,000</span>
                                </div>
								
                                <div class="col">
                                    2 ימים <br>
                                    <span class="small">נותרו</span>
                                </div>
								
                                <div class="col">
                                    250 <br>
                                    <span class="small">תומכים</span>
                                </div>
								
                            </div>
                        </figcaption>
                    </figure>
                </article>

                <article class="store firsthide">
                    <figure>
                        <a target="_blank" href="Includes/boutique.php">
                            <img src="Images/katanbakfar.jpeg" alt="Mountains">
                        </a>
                        <figcaption class="storeName">
                            <p>בוטיק קטן בכפר</p>
                            <p>אוריה</p>
                            <p>60%</p>
                            <div class="bar" id="four"></div>
                            <div class="stats">
							
                                <div class="col">
                                    120,000 <br>
                                    <span class="small"> מתוך 200,000</span>
                                </div>
								
                                <div class="col">
                                    4 ימים <br>
                                    <span class="small">נותרו</span>
                                </div>
								
                                <div class="col">
                                    148 <br>
                                    <span class="small">תומכים</span>
                                </div>
								
                            </div>
                        </figcaption>
                    </figure>
                </article>

                <article class="store secondhide">
                    <figure>
                        <a target="_blank" href="#" class="no" title="לא פעיל">
                            <img src="Images/roses.jpeg" alt="roses" >
                        </a>
                        <figcaption class="storeName">
                            <p>Roses</p>
                            <p>רעננה</p>
                            <p>97%</p>
                            <div class="bar" id="five"></div>
                            <div class="stats">
							
                                <div class="col">
                                    97,000 <br>
                                    <span class="small"> מתוך 100,000</span>
                                </div>
								
                                <div class="col">
                                    1 יום <br>
                                    <span class="small">נותרו</span>
                                </div>
								
                                <div class="col">
                                    330 <br>
                                    <span class="small">תומכים</span>
                                </div>
								
                            </div>
                        </figcaption>
                    </figure>
                </article>
            </div>
        </section>

        <section>
            <div class="title">
                <h2>פרויקטים חדשים</h2>
            </div>

            <div class="gallery">
                <article class="store">
                    <figure>
                        <a target="_blank" href="#" class="no" title="לא פעיל">
                            <img src="Images/andylove.jpeg" alt="Andy lous">
                        </a>
                        <figcaption class="storeName">
                            <p>Andy lous</p>
                            <p>מגדל העמק</p>
                            <p>10%</p>
                            <div class="bar" id="six"></div>
                            <div class="stats">
                                <div class="col">
                                    15,000 <br>
                                    <span class="small"> מתוך 150,000</span>
                                </div>
                                <div class="col">
                                    30 ימים <br>
                                    <span class="small">נותרו</span>
                                </div>
                                <div class="col">
                                    5 <br>
                                    <span class="small">תומכים</span>
                                </div>
                            </div>
                        </figcaption>
                    </figure>
                </article>

                <article class="store">
                    <figure>
                        <a target="_blank" href="#" class="no" title="לא פעיל">
                            <img src="Images/hair.jpeg" alt="Hair stylist">
                        </a>
                        <figcaption class="storeName"> 
                            <p>Hair stylist</p>
                            <p>ראשון לציון</p>
                            <p>30%</p>
                            <div class="bar" id="seven"></div>
                            <div class="stats">
                                <div class="col">
                                    30,000 <br>
                                    <span class="small"> מתוך 100,000</span>
                                </div>
                                <div class="col">
                                    15 ימים <br>
                                    <span class="small">נותרו</span>
                                </div>
                                <div class="col">
                                    10 <br>
                                    <span class="small">תומכים</span>
                                </div>
                            </div>
                        </figcaption>
                    </figure>
                </article>

                <article class="store">
                    <figure>
                        <a target="_blank" href="#" class="no" title="לא פעיל">
                            <img src="Images/zalig.jpeg" alt="זליג הקטן">
                        </a>
                        <figcaption class="storeName">
                            <p>זליג הקטן</p>
                            <p>מבשרת ציון</p>
                	        <p>15%</p>
                            <div class="bar" id="eight"></div>
                            <div class="stats">
                                <div class="col">
                                    30,000 <br>
                                    <span class="small"> מתוך 200,000</span>
                                </div>
                                <div class="col">
                                    40 ימים <br>
                                    <span class="small">נותרו</span>
                                </div>
                                <div class="col">
                                    14 <br>
                                    <span class="small">תומכים</span>
                                </div>
                            </div>
                        </figcaption>
                    </figure>
                </article>


                <article class="store firsthide" >
                    <figure>
                        <a target="_blank" href="#" class="no" title="לא פעיל">
                            <img src="Images/nagarbakfar.jpeg" alt="נגר בכפר">
                        </a>
                        <figcaption class="storeName"> 
                            <p>נגר אמן</p>
                            <p>כפר יודפת</p>
                            <p>25%</p>
                            <div class="bar" id="nine"></div>
                            <div class="stats">
                                <div class="col">
                                    25,000 <br>
                                    <span class="small"> מתוך 100,000</span>
                                </div>
                                <div class="col">
                                    20 ימים <br>
                                    <span class="small">נותרו</span>
                                </div>
                                <div class="col">
                                    12 <br>
                                    <span class="small">תומכים</span>
                                </div>
                            </div>
                        </figcaption>
                    </figure>
                </article>

                <article class="store secondhide">
                    <figure>
                        <a target="_blank" href="Includes/balloon.php">
                            <img src="Images/ballon.png" alt="KB ballon">
                        </a>
                        <figcaption class="storeName">
                            <p>KB ballon</p>
                            <p>חולון</p>
                            <p>20%</p>
                            <div class="bar" id="ten"></div>
                            <div class="stats">
                                <div class="col">
                                    60,000 <br>
                                    <span class="small"> מתוך 300,000</span>
                                </div>
                                <div class="col">
                                    14 ימים <br>
                                    <span class="small">נותרו</span>
                                </div>
                                <div class="col">
                                    26 <br>
                                    <span class="small">תומכים</span>
                                </div>
                            </div>
                        </figcaption>
                    </figure>
                </article>
            </div>
        </section>
        <!-- end of quick access to store pages -->
		
        <!-- Queries -->
		<section>
            <div class="title">
                <h2>נתונים שתרצו לדעת</h2>
            </div>

            <div class="gallery">
                <article class="queryStore">
                        <p><b>פרויקטים בעיר תל אביב שתחום העיסוק שלהם הוא מסעדנות:</b></p>
						<div class="query">
    						<?php
								$result=Store::find_resturants_in_telaviv();
    							while($row = $result->fetch_assoc()){
    							echo $row['name'].'<br>';
    							}
    						?>
    						<figure>
    						    <img src="Images/restaurant.jpg" alt="restaurant" id="resturantImg">
    						</figure>
						</div>

                </article>

                <article class="queryStore">
                    <p><b>פרויקטים שעבורם נאסף כל סכום התרומות הנדרש להגעה ליעד:</b></p>
					<div class="query">
    					<?php
							$result=Project::find_closed_projects();
    						 while($row = $result->fetch_assoc()){
    							echo '<b>'.$row['name'].'</b><br> סכום שנאסף: '.$row['collected'].'<br>תאריך סיום הפרויקט: '.$row['end_date'].'<br>';
    						}
    					?>
    					<figure>
    						  <img src="Images/target.png" alt="target" id="targetImg">
    					</figure>
					</div>
                </article>

				<article class="queryStore">
                    <p><b>תחום העניין הנפוץ ביותר:</b></p>
					<br>
					<div class="query">
					    <?php
					        $result=User::find_common_interest();
						    while($row = $result->fetch_assoc()){
							    echo $row['interest'];
						    }
					    ?>
				    	<figure>
					    	  <img src="Images/3star.png" alt="stars" id="popular">
				    	</figure>
					</div>
                </article>

                <article class="queryStore">
                    <p><b> שלושת התשורות הנמכרות ביותר:</b></p>
					<div class="query">
					    <?php
					        $result=Gift::find_highest_gift();
						    while($row = $result->fetch_assoc()){
							    echo $row['name'].'<br>';
						    }
					    ?>
    					<figure>
    						  <img src="Images/best.jpg" alt="best seller" id="best">
    					</figure>
					</div>
                </article>
				
            </div>
        </section>
        <!-- end of Queries -->
		
    </main>
    
    <?php 
	    include "Includes/footer.php";
    ?>

</body>
</html>