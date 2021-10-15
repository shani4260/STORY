<?php
  
    require_once('init.php');

    if (!$session->signed_in)
    {
        header('Location: login.php');
        exit;
    }
	$db->query("UPDATE `projects` SET `views`=`views`+1 WHERE `id`=6");
?>

<!DOCTYPE html>
<html lang="he">
<head>
    <meta charset="UTF-8">
    <title>Belle Spa</title>
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
            <img id="storeImg" src="../Images/bellespa.png" alt="logo">
        </section>
        
        <br>
        
        <section class="storelogo" id="barchart">
            <p>
                <?php
        			$id=6;
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
            <article class="bar" id="two">
                <div class="stats">
                    <div class="col">
                        85,000 <br>
                        <span class="small">מתוך 100,000</span>
                    </div>
                    <div class="col">3<br>
                        <span class="small">ימים נותרו</span>
                    </div>
                    
                    <div class="col">
                        522 <br>
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
            <b>אחרי התקופה הזו, פשוט נצטרך לנשום ולהרגע</b><br>
    		 המילה "ספא" מקורה בביטוי הלטיני  "sanus per aquam," שפירושו – בריאות דרך המים. <br> השורשים של בתי הספא המודרניים נעוציים בערים קדומות שהיו ידועות בכוחות הריפוי של המים המינרלים שלהם והמרחצאות החמים. <br>
            בעקבות הקורונה, אנחנו לא יכולים לקבל אתכם בשלבים אלו- אבל אנחנו רוצים להיות כאן אחרי שהכל יגמר.  <br>  אצלנו הבריאות נמצאת במרכז וככאלה אנחנו יודעים בדיוק מה אתם צריכים כרגע ואנחנו כאן כדי להעניק לכם הכל. <br> 
    	    </p>
            <article>   
                <video controls id="videoStore" autoplay loop muted> 
                    <source src="../Videos/belleSpaVideo.mp4" type="video/mp4">
                </video> 
            </article>
            <p><b>יחד איתכם ורק בתמיכתכם עכשיו, אנו נעבור את התקופה הזו ונחזור לשרת אתכם באהבה.</b>
            </p>
        </section>
        <!-- end of more information -->
    </main>    
       
    <aside>
        <!-- gifts -->
        <section class="gift"><h4>אהבת חינם</h4>
    	    <p>נתינה זאת הקבלה הגדולה ביותר</p>
            <p> 50₪ </p>

        </section>
            
        <section class="gift"><h4>שהייה במתקני הספא </h4>
    	    <p>בואו להנות משעה שלמה של רוגע ושלווה במתקני הספא</p>
            <p> 80₪ </p>
        </section>
            
        <section class= "gift">    
    	    <h4>מסאז' שוודי יחיד </h4>
    		<p>הגיע הזמן להתפנק ב45 דק' של מסאז מרגיע ומפנק</p>
            <p> 150₪ </p>
    	</section>
           
        <section class="gift"><h4>מסאז' שוודי זוגי</h4>
    	    <p> טובים השניים מהאחד- 45 דק' יגרמו לכם לשכוח את התקופה הזו </p>
            <p> 200₪ </p>
        </section>
            
        <section class= "gift"><h4> עיסוי רקמות עמוק יחיד</h4>
    	    <p>טכניקת עיסוי מערבית עמוקה וממוקדת לשחרור שרירים ונקודות מתח באזורים שונים בגוף.</p>
            <p> 300₪ </p>
    	</section>
           
        <section class= "gift"><h4>עיסוי אבנים חמות זוגי</h4>
    	    <p>אבני בזלת חמות. טיפול אינדיאני מקורי ומרגיע העוטף את הגוף בחום ורכות. חוויה בלתי נשכחת.</p>
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
    					<option value="2" >שהייה במתקני הספא</option>
    					<option value="3" >מסאז'שוודי יחיד</option>
    					<option value="4" >מסאז' שוודי זוגי</option>
    					<option value="5" >עיסוי רקמות עמוק יחיד</option>
    					<option value="6" >עיסוי אבנים חמות זוגי</option>
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