<?php
  
    require_once('init.php');

    if (!$session->signed_in)
    {
        header('Location: login.php');
        exit;
    }
    $db->query("UPDATE `projects` SET `views`=`views`+1 WHERE `id`=10");
?>
<!DOCTYPE html>
<html lang="he">
<head>
    <meta charset="UTF-8">
    <title>אושרת גרפיקאית</title>
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
            <img id="storeImg" src="../Images/graphical.png" alt="logo">
        </section>
        <br>
        <section class="storelogo" id="barchart">
            <p>
                <?php
        			$id=10;
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
            <article class="bar" id="thirteen">
                <div class="stats">
                    <div class="col">
                          47,000 <br>
                        <span class="small"> מתוך 100,000</span>
                    </div>
                    <div class="col">
                          5 ימים <br>
                        <span class="small">נותרו</span>
                    </div>
                    <div class="col">
                          162 <br>
                        <span class="small">תומכים</span>
                    </div>
                </div>
            </article>
        </section>
        <!-- end of details about the store -->
        <!-- more information -->
    	<section class="content">
            <br><p><b>אתם מתארים לי את החלומות שלכם ואני מגשימה אותם עבורכם</b><br><p>
            היי, אני אושרת, הבעלים של סטודיו אושרת אברהם. והתשוקה שלי היא עיצוב גרפי ומיתוג עסקי. <br>
            זה אומר קודם כל שאני חיה בכל רגע את העבודה ושואפת למקסם כל רגע. <br> הפרויקטים שאני מובילה יהיו תמיד כאלו שאתעקש בהם על ערך מוסף, חדשנות, ייחודיות ומעל לכל, הבנה כוללת ומלאה גם של צרכי הלקוח וגם של המטרות אותן הוא שואף להציג. <br>
            אוסקר וויילד כתב פעם ”אם אתה אוהב את זה, זו לא באמת עבודה“, אז מסתבר שאני פשוט לא עובדת כל יום. <br
            </p>
            <article>   
                <video controls id="videoStore" autoplay loop muted> 
                    <source src="../Videos/Graphic.mp4" type="video/mp4">
                </video> 
            </article>
            <p><b>תעזרו לי - לעזור לכם </b> 
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
            <h4>עיצוב לוגו </h4>
    	    <p>נייצר יחד לוגו שיתאים בדיוק לחלומות שלכם</p>
            <p> 80₪ </p>
        </section>
            
        <section class="gift">    
    	    <h4>סדנת צילום בסמארטפון</h4>
    		<p>מה יותר חשוב בימינו מאשר לדעת לצלם? בואו לגלות את כל הסודות שיהפכו אתכם לצלמים מקצועיים</p>
            <p> 150₪ </p>
    	</section>
           
        <section class="gift">
            <h4>בוק אישי</h4>
    	    <p> בואו לצלם את הרגעים היפים של החיים </p>
            <p> 200₪ </p>
        </section>
            
        <section class="gift">
            <h4>עיצוב דף נחיתה</h4>
    	    <p>תמיד חלמתם על דף נחיתה מעוצב? עכשיו יש לכם הזדמנות</p>
            <p> 300₪ </p>
    	</section>
           
        <section class="gift">
            <h4>ייעוץ גרפיקאי לכל מצב</h4>
    	    <p>אהיה כאן לעזרתכם בכל שאלה או בעיה ונפתור יחד הכל</p>
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
    					<option value="37" >עיצוב לוגו</option>
    					<option value="38" >סדנת צילום בסמארטפון</option>
    					<option value="39" >בוק אישי</option>
    					<option value="40" >עיצוב דף נחיתה</option>
    					<option value="41" >ייעוץ גרפיקאי לכל מצב</option>
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