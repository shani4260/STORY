<?php
    require_once('init.php');

    if (!$session->signed_in){
        header('Location: login.php');
        exit;
    }
    $db->query("UPDATE `projects` SET `views`=`views`+1 WHERE `id`=7");
?>
<!DOCTYPE html>
<html lang="he">
<head>
    <meta charset="UTF-8">
    <title>Loren</title>
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
            <img id="storeImg" src="../Images/LOREN.png" alt="logo">
        </section>
        <br>
        <section class="storelogo" id="barchart">
            <p>
                <?php
            		$id=7;
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
                        42,000 <br>
                        <span class="small">מתוך 70,000</span>
                    </div>
                    <div class="col">4<br>
                        <span class="small">ימים נותרו</span>
                    </div>
                    <div class="col">
                        277 <br>
                        <span class="small">תומכים</span>
                    </div>
    	        </div>
    	    </article>
        </section>
        <!-- end of details about the store -->
        <!-- more information -->
    	<section class="content">
            <br><p><b>כדי שנוכל להעניק לכם מחר, את מה שאתם כה אוהבים היום.</b><br>
    		 בימים האחרונים מצאנו את עצמנו במצב האחרון בו אנחנו מעוניינים להיות, מתקשרים לספקים ומבקשים שיתחשבו בנו.<br> ברגעים של משבר כל משפחה מתכנסת כדי להשאר. גם המשפחה שלנו. <br> התמיכה שלכם תאפשר לנו לעמוד בהתחייבותינו ולהיות הוגנים אל מול העובדים והספקים שלנו וגם להצליח לפתוח את הגלידריה מחדש<br>  
    	    </p>
            <article>   
                <video controls id="videoStore" autoplay loop muted> 
                    <source src="../Videos/lorenVideo.mp4" type="video/mp4">
                </video> 
            </article>
            <p><b>תודה רבה, נתראה בפתיחה. אנחנו נביא את השמפניה! </b>
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
            <h4>אכול גלידה כפי יכולתך </h4>
    	    <p>תקבלו שני גביעים ותהנו כמה פעמים שרק תרצו</p>
            <p> 80₪ </p>
        </section>
            
        <section class="gift">    
    	    <h4>שני משלוחים גלידה עד אליכם</h4>
    		<p>אנחנו נגיע אליכם- אתם לא תצטרכו לדאוג משום דבר חוץ מלבחור את הטעמים האהובים עליכם</p>
            <p> 150₪ </p>
    	</section>
           
        <section class="gift">
            <h4>סדנת מתוקים</h4>
    	    <p>בואו ללמוד איך עושים גלידה ביתית משובחת - חומרי הגלם עלינו! </p>
            <p> 200₪ </p>
        </section>
            
        <section class="gift">
            <h4>כרטיסייה של 20 גביעי גלידה</h4>
    	    <p>מה יותר כיף מגלידה ללא הפסקה? בואו להנות מתי שתרצו וכמה שתרצו!</p>
            <p> 300₪ </p>
    	</section>
           
        <section class="gift">
            <h4>שולחן קינוחים</h4>
    	    <p>מה יותר כיף מלקבל יותר ולשלם פחות? אנחנו מגיעים עד אליכם עם שולחן קינוחים שיעיף אתכם!</p>
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
    					<option value="2" >אכול גלידה כפי יכולתך</option>
    					<option value="3" >שני משלוחים גלידה עד אליכם</option>
    					<option value="4" >סדנת מתוקים</option>
    					<option value="5" >כרטיסייה של 20 גביעי גלידה</option>
    					<option value="6" >שולחן קינוחים</option>
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