<?php

    require_once('init.php');

    if (!$session->signed_in){
        header('Location: ../login.php');
        exit;
    }
    $db->query("UPDATE `projects` SET `views`=`views`+1 WHERE `id`=1");
?>
<!DOCTYPE html>
<html lang="he">
<head>
    <meta charset="UTF-8">
    <title>Rustico</title>
    <link rel="stylesheet" type="text/css" href="../CSS/storepagecss.css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous"></script>
</head>

<body>
    <?php
        include "header.php";
    ?>
    <main>
        <!-- details about the store -->
        <br>
        <br>
        <section class="storelogo">
            <img id="storeImg" src="../Images/rustico.jpg" alt="logo">
        </section>
        <br>
        <section class="storelogo" id="barchart">
            <p>
                <?php
        			$id=1;
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
                        15,400 <br>
                        <span class="small">מתוך 22,000</span>
                    </div>
                    <div class="col">8<br>
                        <span class="small">ימים נותרו</span>
                    </div>
                    <div class="col">
                        85 <br>
                        <span class="small">תומכים</span>
                    </div>
    	        </div>
    	    </article>
        </section>
        <!-- end of details about the store -->
		
        <!-- more information -->
    	<section class="content">
            <br><p><b>הקורונה הפתיעה גם אותנו</b><br>
    		 בפתאומיות ובלי התראה מוקדמת נאלצנו לסגור את דלתות המסעדה שנבנתה בעשר אצבעות לפני כעשור מתוך חזון של ציונות ואהבת הארץ. <br> עשרות עובדים הפסידו את מקור עבודתם והמקום נותר שומם.
                האיטלקים, כל דבר אצלם מתחיל ונגמר באיזה פתגם. <br> ולא סתם, רוב הפתגמים שלהם מתחילים ונגמרים באוכל. רוצים דוגמא? בבקשה: "דַאיֶיר פָּאנֶה אַל פָּאנֶה, אֶה וִינוֹ אַל וִינוֹ", ובעברית – קוראים ללחם לחם וליין יין. <br> כלומר כל דבר שיהיה הוא עצמו. הפיצה היא פיצה, הפסטה – פסטה. אנחנו לא משחקים עם אוכל. פשוט עושים אותו כמו שצריך. <br>
                מסעדת RUSTICO בתל אביב היא בית לחגיגת השמחות הגדולות או הקטנות באווירה חגיגית, משולבת באוכל מצוין ואווירה אינטימית.
    	    </p>
            <article>
                <video controls id="videoStore" autoplay loop muted>
                    <source src="../Videos/video.mp4" type="video/mp4">
                </video>
            </article>
            <p><b>אנחנו קוראים לכם להצטרף אלינו ולתמוך בפרויקט, כדי שהמקום יפתח מחדש בתום המשבר, כי RUSTICO זה בית ובית לא סוגרים. </b>
            </p><br><br>
			<p><b>מתי אירוע ההתרמה הבא?</b><a href="Rustico.php?view=../config/countdown.php">לצפייה</a></p>
			<?php 
				if(isset($_GET['view'])) {
					include($_GET['view']); 
				 }
			?>
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
            <h4>סיור קולינארי בשרונה מרקט</h4>
    	    <p>סיור מודרך עם מקומי במסעדות שחייב להכיר</p>
            <p> 80₪ </p>
        </section>

        <section class="gift">
    	    <h4>ארוחת בוקר זוגית </h4>
    		<p>בואו להנות מארוחת בוקר זוגית מפנקת,יינות מובחרים ואווירה פסטורלית</p>
            <p> 150₪ </p>
    	</section>

        <section class="gift">
            <h4>כרטיסייה של 5 ארוחות צהריים</h4>
    	    <p>מה יותר כיף מלקבל הרבה תמורת מעט? בואו להנות מארוחות צהריים מפנקות שמשאירות טעם של עוד</p>
            <p> 200₪ </p>
        </section>

        <section class="gift">
            <h4>ארוחת שף פרטית</h4>
    	    <p>השף הכי טוב בעיר מגיע עד אליכם הביתה לבשל מהלב!</p>
            <p> 300₪ </p>
    	</section>

        <section class="gift">
            <h4>סדנת אפייה אישית</h4>
    	    <p>בואו לגלות את הסודות הכמוסים של השף אצלכם בבית</p>
            <p> 350₪ </p>
        </section>
        <section class="priceForGift">
            <form method="POST" action="">
                <h3>אני רוצה להיות חלק!</h3>
                <h5 class="giftTitle">בחירת תשורה:</h5>
                <p>
					<select required class="selectGift" name="selectionID">
						<option value="">--בחר תשורה--</option>
						<option value="1" >אהבת חינם</option>
						<option value="2" >סיור קולינארי בשרונה מרקט</option>
						<option value="3" >ארוחת בוקר זוגית</option>
						<option value="4" >כרטיסייה של 5 ארוחות צהריים</option>
						<option value="5" >ארוחת שף פרטית</option>
						<option value="6" >סדנת אפייה אישית</option>
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