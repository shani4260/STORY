<?php
    require_once('init.php');
    if (!$session->signed_in)
    {
        header('Location: login.php');
        exit;
    }
    $db->query("UPDATE `projects` SET `views`=`views`+1 WHERE `id`=9");
?>

<!DOCTYPE html>
<html lang="he">
<head>
    <meta charset="UTF-8">
    <title>פלאפל בריבוע</title>
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
        <br><br>
        <section class="storelogo">
			<img id="storeImg" src="../Images/falafel.jpeg" alt="logo">
        </section>
        <br>
        <section class="storelogo" id="barchart">
			<p>
				<?php
					$id=9;
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
						<span class="small"> מתוך 100,000</span>
					</div>
					<div class="col">
						3 ימים <br>
						<span class="small">נותרו</span>
					</div>
					<div class="col">
						444 <br>
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
				<b>אחרי התקופה הזו, פשוט נצטרך לאכול ולהרגע</b><br>
				הסיפור שלנו מתחיל ב 1995 בבחור צעיר בשם גיא יקר, היום מנכ"ל הרשת, אז – חייל משוחרר עם חלום וחזון לעשות  מהפיכה בחווית הצריכה של המאכל הלאומי. <br> החזון של גיא היה להפוך את חווית הקניה של פלאפל ברחוב לחוויות לקוח בסטנדרטים בינלאומיים. <br> חוויה של טעם ישראלי לצד איכות וטריות, נוחות ושירות מצויין מכל הלב. <br>
            </p>
			
            <article>   
                <video controls id="videoStore" autoplay loop muted> 
                    <source src="../Videos/falafel.mp4" type="video/mp4">
                </video> 
            </article>
			
            <p>
				<b>יחד איתכם ורק בתמיכתכם עכשיו, אנו נעבור את התקופה הזו ונחזור לשרת אתכם באהבה.</b>
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
				<h4>כרטיסייה של 5 מנות פלאפל </h4>
				<p>מה יותר טוב מלעצור לרגע ולאכול פלאפל?</p>
				<p> 80₪ </p>
			</section>
				
			<section class="gift">    
				<h4> אכול כפי יכולתך</h4>
				<p>כמה שתרצה- עלינו!</p>
				<p> 150₪ </p>
			</section>
			   
			<section class="gift">
				<h4>סדנת פלאפל מקצועית</h4>
				<p> בואו ללמוד מהטובים ביותר איך לעשות את המאכל האהוב ביותר בישראל </p>
				<p> 200₪ </p>
			</section>
				
			<section class="gift">
				<h4>שולחן פלאפל עד הבית</h4>
				<p>שולחן פלאפל עם מלא דברים טובים</p>
				<p> 300₪ </p>
			</section>
			   
			<section class="gift">
				<h4>קופון בשווי 500 ש"ח לקניית פלאפל</h4>
				<p>מה יותר כיף משלם פחות ולקבל יותר?</p>
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
							<option value="32" >כרטיסייה של 5 מנות פלאפל</option>
							<option value="33" >אכול כפי יכולתך</option>
							<option value="34" >סדנת פלאפל מקצועית</option>
							<option value="35" >שולחן פלאפל עד הבית</option>
							<option value="36" >קופון בשווי 500 ש"ח לקניית פלאפל</option>
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