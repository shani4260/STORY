<?php
  
     require_once('init.php');

    if (!$session->signed_in){
        header('Location: login.php');
        exit;
    }
    $db->query("UPDATE `projects` SET `views`=`views`+1 WHERE `id`=11");
?>

<!DOCTYPE html>
<html lang="he">
<head>
    <meta charset="UTF-8">
    <title>KB Ballon</title>
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
        <br>
        <br>
        <!-- details about the store -->
        <section class="storelogo">
            <img id="storeImg" src="../Images/ballon.png" alt="logo">
        </section>
        <br>
        <section class="storelogo" id="barchart">
            <p>
            <?php
    			$id=11;
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
            <article class="bar" id="ten">
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
                      285 <br>
                      <span class="small">תומכים</span>
                    </div>
                </div> 
            </article>
        </section>
        <!-- end of details about the store -->
        <!-- more information -->
    	<section class="content">
            <p>
            <b>זה הזמן לשמח ולרגש</b><br>
    		 רשת חנויות הבלונים של ישראל טומנת בחובה תפיסה חדשה וייחודית, אשר מעניקה לרוכשי הבלונים והמתנות בישראל חווית קניה אחרת מזו שהייתה קיימת עד כה בישראל. <br> החברה מציעה ללקוחותיה שרות מעולה, מגוון מוצרים רחב וייחודי והזדמנויות רכישה אטרקטיביות לכל אירוע. <br> אנחנו צריכים את עזרתכם כדי להמשיך להעניק לכם חיוך ענק על הפנים- גם בימים אלו. <br>      
    	    </p>
            <article>   
                <video controls id="videoStore" autoplay loop muted> 
                    <source src="../Videos/Balloon.mp4" type="video/mp4">
                </video> 
            </article>
            <p><b>אנחנו היינו אתכם ברגעים השמחים של החיים- תעזרו לנו להשאר שם </b>
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
            <h4>זר בלונים</h4>
    	    <p>זר בלונים מוכן לבחירתכם</p>
            <p> 80₪ </p>
        </section>
            
        <section class= "gift">    
    	    <h4>שער בלונים עם משלוח עד הבית</h4>
    		<p>שער בלונים ישדרג כל אירוע</p>
            <p> 150₪ </p>
    	</section>
           
        <section class= "gift">
            <h4>קופון בשווי 400 ש"ח</h4>
    	    <p> מה יותר כיף משלם פחות ולהרוויח יותר? </p>
            <p> 200₪ </p>
        </section>
            
        <section class= "gift">
            <h4>סידור בלונים אצלכם בבית</h4>
    	    <p>סידור בחדר לכל מטרה- ימי הולדת, הצעת נישואין ועוד</p>
            <p> 300₪ </p>
    	</section>
           
        <section class= "gift">
            <h4>הפעלת יום הולדת</h4>
    	    <p>בלונים בצורות ובצבעים- מיוחד לילדים</p>
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
    					<option value="37" >זר בלונים</option>
    					<option value="38" >שער בלונים עם משלוח עד הבית</option>
    					<option value="39" >קופון בשווי 400 ש"ח</option>
    					<option value="40" >סידור בלונים אצלכם בבית</option>
    					<option value="41" >הפעלת יום הולדת</option>
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