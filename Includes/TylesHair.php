<?php
    require_once('init.php');
    if (!$session->signed_in){
        header('Location: login.php');
        exit;
    }
	$db->query("UPDATE `projects` SET `views`=`views`+1 WHERE `id`=8");
?>
<!DOCTYPE html>
<html lang="he">
<head>
    <meta charset="UTF-8">
    <title>Tyles Hair</title>
    <link rel="stylesheet" type="text/css" href="../CSS/storepagecss.css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous">
    </script>
    <?php 
        include "header.php";
    ?>
</head>
<body>
    <main>
        <!-- details about the store -->
        <br><br>
        <section class="storelogo">
            <img id="storeImg" src="../Images/TylesHair.png" alt="logo">
        </section>
        <br>
        <section class="storelogo" id="barchart">
            <p>
                <?php
        			$id=8;
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
            <article class="bar" id="one">
                <div class="stats">
                    <div class="col">
                        28,000 <br>
                        <span class="small">מתוך 40,000</span>
                    </div>
                    <div class="col">4<br>
                        <span class="small">ימים נותרו</span>
                    </div>
                    <div class="col">
                        212 <br>
                        <span class="small">תומכים</span>
                    </div>
    	        </div>
    	    </article>
        </section>
        <!-- end of details about the store -->
        <!-- more information -->
    	<section class="content">
            <br><p><b> המסע נמשך, ואתם מוזמנים להישאר איתנו עד סופו!</b><br>
    		 אנחנו היינו כאן בשבילכם עבור כל אירוע וחגיגה וכעת מבקשים את סיועכם כדי להיות שם בשבילכם בכל עת. <br> הקורונה הגיעה גם אלינו ואי אפשר להתעלם מזה, המספרה הכי נחשקת בעיר סגורה כבר המון זמן. <br> אנחנו צריכים את התמיכה שלכם היום כדי להיות עבורכם שם גם מחר.<br>
    	    </p>
            <article>   
                <video controls id="videoStore" autoplay loop muted> 
                    <source src="../Videos/hairVideo.mp4" type="video/mp4">
                </video> 
            </article>
            <p><b> התמיכה שלך היא הכי חשובה כי בלעדיך זה לא יקרה</b>
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
            <h4>תספורת מתנה</h4>
    	    <p>התחדשות מדהימה אחרי תקופה ארוכה</p>
            <p> 80₪ </p>
        </section>
            
        <section class="gift">    
    	    <h4>תסרוקת ואיפור לאירוע מיוחד</h4>
    		<p>אנחנו נגיע אליכם- אתם לא תצטרכו לדאוג משום דבר</p>
            <p> 150₪ </p>
    	</section>
           
        <section class="gift">
            <h4>סדנת איפור אישית</h4>
    	    <p>בואו ללמוד את הסודות הכמוסים של עולם האיפור תוך התאמת צבעים </p>
            <p> 200₪ </p>
        </section>
            
        <section class="gift">
            <h4>סדנת תסרוקות אישית</h4>
    	    <p>הקורס מכיל תכנים מקיפים אודות עולם התסרוקות, החל מהבסיס</p>
            <p> 300₪ </p>
    	</section>
           
        <section class="gift">
            <h4>סידור שיער כלה</h4>
    	    <p>אנחנו ניהיה איתך ביום הכי מיוחד שלך</p>
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
    					<option value="2" >תספורת מתנה</option>
    					<option value="3" >תסרוקת ואיפור לאירוע מיוחד</option>
    					<option value="4" >סדנת איפור אישית</option>
    					<option value="5" >סדנת תסרוקות אישית</option>
    					<option value="6" >סידור שיער כלה</option>
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