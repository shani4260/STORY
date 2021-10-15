<?php
     require_once('init.php');

    if (!$session->signed_in){
        header('Location: login.php');
        exit;
    }
	$db->query("UPDATE `projects` SET `views`=`views`+1 WHERE `id`=5");
?>
<!DOCTYPE html>
<html lang=he>
<head>
    <meta charset="UTF-8">
    <title>בוטיק קטן בכפר</title>
    <link rel="stylesheet" type="text/css" href="../CSS/storepagecss.css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
	<?php 
		include "header.php";
    ?>
</head>
<body>
    <main>
        <!-- details about the store -->
        <br>
        <br>
        <section class="storelogo">
            <img id="storeImg" src="../Images/katanbakfar.jpeg" alt="logo">
        </section>
        <br>
        <section class="storelogo" id="barchart">
            <p>
                <?php
    			    $id=5;
        			$project=new Project($id);
                    $precent=$project->percent_collected($project->id);
        			if($precent)
        			{
        				echo $precent."%";
        			}
                    else{
        				echo "error";
        			}
    			?>
			</p>
            <article class="bar" id="four">
                <div class="stats">
                    <div class="col">
                        12,000 <br>
                        <span class="small">מתוך 20,000</span>
                    </div>
                    
                    <div class="col">4<br>
                        <span class="small">ימים נותרו</span>
                    </div>
                    
                    <div class="col">
                        40 <br>
                        <span class="small">תומכים</span>
                    </div>
    	        </div>
    	    </article>
        </section>
        <!-- end of details about the store -->
        <!-- more information -->
    	<section class="content">
            <br>
            <p>
            <b>אנחנו לא שולטים על כלום, מלבד אהבת חינם</b><br>
    		 לפני כשנתיים הגשמנו חלום, פתחנו בוטיק קטן, אופנטי ואיניטימי בכפר אוריה. לפתע נאלצנו לחדול מעשייה ולסגור את הבוטיק הקטן שלנו <br> אצלנו כל דבר נעשה בעבודת יד עם התאמה אישית ללקוחות שכה חשובים לנו, אך כרגע הבוטיק נותר שומם.  <br>
            הקורונה עצרה את פעילות הסטודיו בזמן קריטי: בדיוק כשהתחלנו להרגיש שאנחנו מתקדמים בתחום המורכב והקשה הזה, הקורונה החזירה אותנו אחורה.<br> אנחנו מאמינים בכוח חברתי ויודעים שעכשיו אתם בשבילנו, שהכל יגמר אנחנו ניהיה שם בשבילכם <br> 
    	    </p>
            <article>   
                <video controls id="videoStore" autoplay loop muted> 
                    <source src="../Videos/boutiqueVideo.mp4" type="video/mp4">
                </video> 
            </article>
            <p><b>כעסק עצמאי ויוצר, דווקא עכשיו אנחנו חייבים אתכם איתנו.</b></p>
        </section>
        <!-- end of more information -->
    </main>    
    <aside>
        <!-- gifts -->
        <section class="gift">
            <h4>אהבת חינם</h4>
    	    <p>נתינה זאת הקבלה הגדולה ביותר</p>
            <p> 50₪ </p>
        </section>
            
        <section class="gift">
            <h4>שמלת מוניקה מתנה </h4>
    	    <p>שמלת מוניקה לבנה וחגיגית בשווי 150 ש"ח</p>
            <p> 80₪ </p>
        </section>
            
        <section class="gift">    
    	    <h4>סדנת סטיילינג אישית</h4>
    		<p>בואו לללמוד מה מתאים למבנה הגוף שלכם</p>
            <p> 150₪ </p>
    	</section>
           
        <section class="gift"><h4>סדנת סטיילינג זוגית</h4>
    	    <p>טובים השניים מן האחד- נלמד איך לשדרג את ההופעה וללבוש מה שנעים לכם </p>
            <p> 200₪ </p>
        </section>
            
        <section class="gift"><h4>תכשיט מתנה</h4>
    	    <p>תבחרו תכשיט איכותי מתנה!</p>
            <p> 300₪ </p>
    	</section>
           
        <section class="gift"><h4>קופון בשווי 500 ש"ח</h4>
    	    <p>מה יותר כיף מלקבל יותר ולשלם פחות? בקנייה זו תקבלו קופון על סך 500 ש"ח בפחות כסף!</p>
            <p> 350₪ </p>
        </section>
                
        <section class="priceForGift">
            <form method="post" action="">
                <h3>אני רוצה להיות חלק!</h3> 
                <h5 class="giftTitle">בחירת תשורה:</h5>
                
                <p> 
                    <select required class="selectGift" name="selectionID">
                        <option value="">--בחר תשורה--</option>
                     	<option value="1" >אהבת חינם</option>
    					<option value="2" >שמלת מוניקה מתנה</option>
    					<option value="3" >סדנת סטיילינג אישית</option>
    					<option value="4" >סדנת סטיילינג זוגית</option>
    					<option value="5" >תכשיט מתנה</option>
    					<option value="6" >קופון בשווי 500 ש"ח</option>
    				</select>	
    				<br>
                </p>
                
                <h5 class="giftTitle"> כמות:</h5>
        
                <input class="quantityOfGifts" type="number" min="1" required="" name="quantity">
                <br><br>
              
                <button type="submit" class="myButton displayPrice" >הצגת מחיר</button>
                <button type="button" class="myButton no" disabled>הוספה לסל התשורות</button>
            </form>
                <article class="price">
                    <?php
                        if($_POST){
                            $quantity=$_POST['quantity'];
    						$gift = new Gift();
    						$priceP = $gift->get_price();
                            $total=$priceP*$quantity;
                    ?>
                    <script type='text/javascript'>alert("המחיר עבור בחירתך הוא: "+ <?php echo $total; ?> + "₪");</script>
                    <?php
                        }
                    ?>
                </article>
        </section>
    </aside>
    
    <div id="clear"></div>
    <?php 
        include "footer.php";
    ?>
    
    <script src="JS/storePage.js"></script>
</body>
</html>