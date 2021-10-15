<?php
  
    require_once('init.php');

    if (!$session->signed_in){
        header('Location: login.php');
        exit;
    }
	$db->query("UPDATE `projects` SET `views`=`views`+1 WHERE `id`=4");
?>
<!DOCTYPE html>
<html lang="he">
<head>
    <meta charset="UTF-8">
    <title>Edval</title>
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
            <img id="storeImg" src="../Images/adval.png" alt="logo">
        </section>
        <br>
        <section class="storelogo" id="barchart">
            <p>
                <?php
        			$id=4;
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
            <article class="bar" id="three">
                <div class="stats">
                    <div class="col">
                       92,000 <br>
                        <span class="small">מתוך 100,000</span>
                    </div>
                    
                    <div class="col">2<br>
                        <span class="small">ימים נותרו</span>
                    </div>
                    
                    <div class="col">
                        540 <br>
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
            <b>תעזרו לנו להמשיך להגן עליכם מכל</b><br>
    		 כמו שאתם יודעים, אנחנו כאן בשביל להגן על היקר לכם מכל- ומבקשים להשאר. <br> העסק שלנו מושתת על עקרונות של מקצועיות, הגינות והכי חשוב אמינות. אנחנו מבטיחים לתת לכם את הטיפול הראוי .<br>  אבטחה זה הכרחי- בשביל השקט הנפשי, בשביל המשפחה שלכם. <br>
    	    </p>
            <article>   
                <video controls id="videoStore" autoplay loop muted> 
                    <source src="../Videos/Edval.mp4" type="video/mp4">
                </video> 
            </article>
            <p><b>התמיכה שלך היא הכי חשובה - כי בלעדיך זה לא יקרה</b>
            </p>
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
            <h4>אינטרקום מתנה</h4>
    	    <p>אינטרקום משוכלל שיאפשר לכם לראות ולשמוע מי בשער</p>
            <p> 80₪ </p>
        </section>
            
        <section class="gift">    
    	    <h4>מצלמת אבטחה לחצר</h4>
    		<p>אנחנו שם- כדי להבטיח שאתם תדעו הכל, גם שאתם לא שם</p>
            <p> 150₪ </p>
    	</section>
           
        <section class="gift">
            <h4>דוד חשמלי חכם</h4>
    	    <p>התקנת דוד חשמלי עם אפליקציה לשליטה מרחוק </p>
            <p> 200₪ </p>
        </section>
            
        <section class="gift">
            <h4>מצלמת חצר ואיטרקום</h4>
    	    <p>בואו לשכלל את הבית שלכם עם המוצרים האיכותיים שלנו</p>
            <p> 300₪ </p>
    	</section>
           
        <section class="gift">
            <h4>חבילת אבטחה</h4>
    	    <p>אנחנו מביטיחים לכם שתיהיו בטוחים עם מצלמות במעגל סגור, מצלמת חצר, איטרקום ודוד חשמלי</p>
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
                     	<option value="2" >אינטרקום מתנה</option>
    					<option value="3" >מצלמת אבטחה לחצר</option>
    					<option value="4" >דוד חשמלי חכם</option>
    					<option value="5" >מצלמת חצר ואיטרקום</option>
    					<option value="6" >חבילת אבטחה</option>
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
        <!-- end of gifts -->
    </aside>
    
    <div id="clear"></div>
   <?php 
        include "footer.php";
   ?>
   
    <script src="JS/storePage.js"></script>
</body>
</html>