<?php
    require_once('init.php');
    if (!$session->signed_in){
        header('Location: login.php');
        exit;
    }
?>
<!DOCTYPE html>
<html lang=he>
<head>
	<meta charset="UTF-8">
	<title>Stores</title>
	<link rel="stylesheet" type="text/css" href="../CSS/stores.css"/>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> 
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
	<?php 
		include "header.php";
	 ?>
</head>
<body>    
	<main>
		<!-- navigate to store pages -->
		<section> 
			<div class="title">
				<h2>מסעדות</h2>
			</div>
			
			<div class="gallery">
				<div class="scrollmenu">
					<article class="store">
						<figure>
							<a href="Rustico.php">
								<img src="../Images/rustico.jpg" alt="Rustico">
							</a>
							<figcaption class="storeName">
								<p>Rustico</p>
								<p>תל אביב</p>
								<div class="description"><p> מסעדה איטלקית עם אוכל מצויין, יינות ואווירה אינטימית וקסומה</p>
								</div>
								<p>70%</p>
								<div class="bar one"></div>
								<div class="stats">
									<div class="col">
										15,400 <br>
										<span class="small"> מתוך 22,000</span>
									</div>
									<div class="col">
										8 ימים <br>
										<span class="small">נותרו</span>
									</div>
									<div class="col">
										85 <br>
										<span class="small">תומכים</span>
									</div>
								</div>
							</figcaption>
						</figure>
					</article>
				
					<article class="store">
						<figure>
							<a href="falafelbaribua.php">
								<img src="../Images/falafel.jpeg" alt="פלאפל בריבוע">
							</a>
							<figcaption class="storeName"><p>פלאפל בריבוע</p>
								<p>חיפה</p>
								<div class="description"><p>פלאפל בצורת קובייה, קריספים, ייחודיים וממכרים שפשוט לא מפסיקים לאכול</p></div>
								<p>85%</p>
								<div class="bar two"></div>
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
							</figcaption>
						</figure>
					</article>
					
					<article class="store">
						<figure>
							<a href="#" class="no" title="לא פעיל">
								<img src="../Images/kanzes.jpg" alt="קנזס בורגר בר" >
							</a>
							<figcaption class="storeName"><p>קנזס בורגר בר</p> <p>באר שבע</p>
								<div class="description"><p>אנחנו משפחת קנזס מתמחה בבשר כאן בשביל לדאוג לכם בכל שעה ביום</p></div>
								<p>92%</p>
								<div class="bar three"></div>
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
					
					<article class="store">
						<figure>
							<a href="#" class="no" title="לא פעיל">
								<img src="../Images/RAKSUSHI.png" alt="רק סושי">
							</a>
							<figcaption class="storeName"><p>רק סושי</p> <p>הוד השרון</p>
								<div class="description"><p>רק סושי מציעה חוויה של טעם בחיים עם חומרי הגלם ישירות מיפן</p></div>
								<p>60%</p>
								<div class="bar four"></div>
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
					
					<article class="store" >
						<figure>
							<a href="#" class="no" title="לא פעיל">
								<img src="../Images/UNO.png" alt="מטבח איטלקי עכשווי">
							</a>
							<figcaption class="storeName"><p>UNO</p><p>תל אביב</p>
								<div class="description"><p>החוויה של UNO סובבת סביב המטבח האיטלקי עם נגיעות ים-תיכוניות עכשוויות</p>
								</div>
								<p>97%</p>
								<div class="bar five"></div>
								<div class="stats">
									<div class="col">
										97,000 <br>
										<span class="small"> מתוך 100,000</span>
									</div>
									<div class="col">
										3 יום <br>
										<span class="small">נותרו</span>
									</div>
									<div class="col">
										200 <br>
										<span class="small">תומכים</span>
									</div>
								</div>
							</figcaption>
						</figure>
					</article>
					
					<article class="store" >
						<figure>
							<a href="#" class="no" title="לא פעיל">
								<img src="../Images/MEXICAN.jpg" alt="המקסיקני" >
							</a>
							<figcaption class="storeName"><p>המקסיקני</p><p>ראשון לציון</p>
								<div class="description"><p>צאו לחופשה במקסיקו, אצלנו תקבלו מגוון טעמים מקסיקנים אותנטיים</p>
								</div>
								<p>97%</p>
								<div class="bar five"></div>
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
						
					<article class="store" >
						<figure>
							<a href="#" class="no" title="לא פעיל">
								<img src="../Images/GARDEN.png" alt="גארדן בלב המושבה">
							</a>
							<figcaption class="storeName"><p>גארדן בלב המושבה</p><p>חיפה</p>
								<div class="description"><p>ממוקמת למרגלות הגנים הבהאיים, מתמחה באוכל טבעוני עשיר בריא וטעים!</p></div>
								<p>62%</p>
								<div class="bar twelve"></div>
								<div class="stats">
									<div class="col">
										62,000 <br>
										<span class="small"> מתוך 100,000</span>
									</div>
									<div class="col">
										1 יום <br>
										<span class="small">נותרו</span>
									</div>
									<div class="col">
										240 <br>
										<span class="small">תומכים</span>
									</div>
								</div>
							</figcaption>
						</figure>
					</article>
							
					<article class="store" >
						<figure>
							<a href="#" class="no" title="לא פעיל">
								<img src="../Images/caffePlus.png" alt="Caffe plus">
							</a>
							<figcaption class="storeName"><p>Caffe plus</p><p>תל אביב</p>
								<div class="description"><p>מהניחוח של הקפה הבלתי נשכח ועד הטעם הממכר של המאפים בעבודת יד</p></div>
								<p>47%</p>
								<div class="bar thirteen"></div>
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
										400 <br>
										<span class="small">תומכים</span>
									</div>
								</div>
							</figcaption>
						</figure>
					</article>
						
					<article class="store">
						<figure>
							<a href="#" class="no" title="לא פעיל">
								<img src="../Images/DERBIBAR.png" alt="דרבי בר">
							</a>
							<figcaption class="storeName"><p>דרבי בר</p><p>בת ים</p>
								<div class="description"><p>מהים ישירות אצלכם בצלחת, הטריות,, המחיר והאיכות שאין לה תחרות</p></div>
								<p>67%</p>
								<div class="bar fourteen"></div>
								<div class="stats">
									<div class="col">
										67,000 <br>
										<span class="small"> מתוך 100,000</span>
									</div>
									<div class="col">
										7 יום <br>
										<span class="small">נותרו</span>
									</div>
									<div class="col">
										280 <br>
										<span class="small">תומכים</span>
									</div>
								</div>
							</figcaption>
						</figure>
					</article>
							
					<article class="store">
						<figure>
							<a target="_blank" href="loren.php">
								<img src="../Images/LOREN.png" alt="גלידה לורן" >
							</a>
							<figcaption class="storeName"><p>גלידת לורן</p><p>נתניה</p>
								<div class="description"><p>קונספט חדשני לגלידה מסתובבת טרייה, שהכנתה מתבצעת בזמן אמת</p></div>
									<p>70%</p>
									<div class="bar one"></div>
									<div class="stats">
									<div class="col">
										42,000 <br>
										<span class="small"> מתוך 70,000</span>
									</div>
									<div class="col">
										1 יום <br>
										<span class="small">נותרו</span>
									</div>
									<div class="col">
										277 <br>
										<span class="small">תומכים</span>
									</div>
								</div>
							</figcaption>
						</figure>
					</article>
				</div>
			</div> 
			</section>
			
			<section>
				<div class="title">
					<h2>אופנה</h2>
				</div>
						   
				<div class="gallery">
					<div class="scrollmenu">   
						<article class="store">
							<figure>
								<a href="boutique.php">
									<img src="../Images/katanbakfar.jpeg" alt="Mountains">
								</a>
								<figcaption class="storeName"><p>בוטיק קטן בכפר</p> <p>אוריה</p>
									<div class="description"><p> הבוטיק מאפשר לכל אחד להיות עצמו ולאמץ סגנון ייחודי</p></div>
									<p>60%</p>
									<div class="bar four"></div>
									<div class="stats">
										<div class="col">
											12,000 <br>
											<span class="small"> מתוך 20,000</span>
										</div>
										<div class="col">
											4 ימים <br>
											<span class="small">נותרו</span>
										</div>
										<div class="col">
											40 <br>
											<span class="small">תומכים</span>
										</div>
									</div>
								</figcaption>
							</figure>
						</article>
							
						<article class="store">
							<figure>
								<a href="#" class="no" title="לא פעיל">
									<img src="../Images/roses.jpeg" alt="roses">
								</a>
								<figcaption class="storeName"><p>Roses</p><p>רעננה</p>
									<div class="description"><p>מעצבת תכשיטים בעבודת יד בסגנון משוחרר ובלי חוקים מיותרים</p></div>
										<p>97%</p>
										<div class="bar five"></div>
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
									
						<article class="store">
							<figure>
								<a href="#" class="no" title="לא פעיל">
									<img src="../Images/keshet.png" alt="נעלי קשת">
								</a>
								<figcaption class="storeName"><p>נעלי קשת</p><p>הרצליה</p>
									<div class="description"><p> רשת חנויות נעלי נשים המתמחה בייצור נעליים בעבודת יד עם מלא אהבה </p>
									</div>
									<p>10%</p>
									<div class="bar six"></div>
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
								<a href="#" class="no" title="לא פעיל">
									<img src="../Images/BLUELAV.png" alt="הלב הכחול">
								</a>
								<figcaption class="storeName"> <p>הלב הכחול</p><p>קרית אונו</p>
									<div class="description"><p>רשת הלב הכחול הוקמה בשנת 1988 לאנשי הגיל השלישי עם מגוון דגמים </p>
									</div>
									<p>30%</p>
									<div class="bar seven"></div>
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
								<a href="#" class="no" title="לא פעיל">
									<img src="../Images/FOSSIL.png" alt="Fossil">
								</a>
								<figcaption class="storeName"><p>Fossil</p><p>תל אביב</p>
									<div class="description"><p> פוסיל שואפת לייצר שעונים באיכות הגבוהה ביותר ומעודכן לטרנדים</p>
									</div>
									<p>15%</p>
									<div class="bar eight"></div>
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
							
								
						<article class="store">
							<figure>
								<a href="#" class="no" title="לא פעיל">
									<img src="../Images/ADIMIRARO.png" alt="ADI MIRARO">
								</a>
								<figcaption class="storeName"> <p>ADI MIRARO</p> <p>באר גנים</p>
									<div class="description"><p>התכשיטים הם הפריט שמוסיף לאופי האדם ומעיד על אישיותו</p></div>
									<p>67%</p>
									<div class="bar fourteen"></div>
									<div class="stats">
										<div class="col">
											67,000 <br>
											<span class="small"> מתוך 100,000</span>
										</div>
										<div class="col">
											7 יום <br>
											<span class="small">נותרו</span>
										</div>
										<div class="col">
											  280 <br>
											  <span class="small">תומכים</span>
										</div>
									</div>
								</figcaption>
							</figure>
						</article>
								
						<article class="store" >
							<figure>
								<a href="#" class="no" title="לא פעיל">
									<img src="../Images/jackMonsonego.png" alt="JACK MONSONEGO" >
								</a>
								<figcaption class="storeName"><p>JACK MONSONEGO</p><p>הרצליה</p>	
									<div class="description"><p>מובילה בייבוא מקביל ושיווק מותגי אופנה בישראל לגברים</p></div>
									<p>60%</p>
									<div class="bar four"></div>
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
										
						<article class="store" >
							<figure>
								<a href="#" class="no" title="לא פעיל">
									<img src="../Images/RDIN.png" alt="ORDIN" >
								</a>
								<figcaption class="storeName"><p>ORDIN</p><p>חולון</p>
									<div class="description"><p> אנו מאמינים בלב שלם שתכשיטים מתאימים לכל גיל ויוצרים לפי טעם אישי</p></div>
									<p>20%</p>
									<div class="bar ten"></div>
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
				</div>
			</section>     
					
			<section> 
				<div class="title">
					<h2>טיפוח</h2>
				</div>
				<div class="gallery">
					<div class="scrollmenu">
						<article class="store">
							<figure>
								<a href="TylesHair.php">
									<img src="../Images/TylesHair.png" alt="Tyles Hair Braiding">
								</a>
								<figcaption class="storeName"><p>Tyles Hair Braiding</p><p>באר שבע</p>
									<div class="description"><p>עסק ביתי שמתמחה בקליעת צמות שמשדרגות כל לוק</p></div>
									<p>60%</p>
									<div class="bar four"></div>
									<div class="stats">
										<div class="col">
											28,000 <br>
											<span class="small"> מתוך 40,000</span>
										</div>
										<div class="col">
											4 ימים <br>
											<span class="small">נותרו</span>
										</div>
										<div class="col">
											212 <br>
											<span class="small">תומכים</span>
										</div>
									</div>
								</figcaption>
							</figure>
						</article>
									
						<article class="store">
							<figure>
								<a href="belleSpa.php">
									<img src="../Images/bellespa.png" alt="Belle spa" >
								</a>
								<figcaption class="storeName"><p>Belle spa</p> <p>חיפה</p>
									<div class="description"><p>נקודת האור המרגיעה בכל מרוץ החיים- פשוט לנשום ולהרגע</p></div>
									<p>85%</p>
									<div class="bar two"></div>
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
											522 <br>
											<span class="small">תומכים</span>
										</div>
									</div>
								</figcaption>
							</figure>
						</article>
								
						<article class="store">
							<figure>
								<a href="#" class="no" title="לא פעיל">
									<img src="../Images/alpha.png" alt="Alpha pharm">
								</a>
								<figcaption class="storeName"><p>Alpha pharm</p> <p>באר שבע</p>
									<div class="description"><p>את כל מוצרי הטיפוח המובילים בעולם תוכלו למצוא אצלנו </p></div>
									<p>15%</p>
									<div class="bar eight"></div>
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
								
						<article class="store">
							<figure>
								<a href="#" class="no" title="לא פעיל">
									<img src="../Images/SOPHIA.png" alt="Sophia nails & spa">
								</a>
								<figcaption class="storeName"><p>Sophia nails & spa</p> <p>פתח תקווה</p>
									<div class="description"><p>מתמחה בטיפולי ביוטי משולבים במחירים משתלמים</p><br></div>
									<p>60%</p>
									<div class="bar four"></div>
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
								
						<article class="store" >
							<figure>
								<a href="#" class="no" title="לא פעיל">
									<img src="../Images/Dailonsy.png" alt="Dailonsy nails">
								</a>
								<figcaption class="storeName"><p>Dailonsy nails</p><p>בת ים</p>
									<div class="description"><p>בית ספר ללימודי קוסמטיקה עם התמחות בשיטה הרוסית המוכרת בעולם</p></div>
									<p>97%</p>
									<div class="bar five"></div>
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
								
						<article class="store" >
							<figure>
								<a href="#" class="no" title="לא פעיל">
									<img src="../Images/hair.jpeg" alt="Hair stylist" >
								</a>
								<figcaption class="storeName"><p>Hair stylist</p><p>ראשון לציון</p>
									<div class="description"><p> רשת מעצבי שיער שהגיעה לישראל היישר מפריז ולא משאירה מקום לדמיון</p></div>
										<p>47%</p>
										<div class="bar thirteen"></div>
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
											400 <br>
											<span class="small">תומכים</span>
										</div>
									</div>
								</figcaption>
							</figure>
						</article>
									
						<article class="store" >
							<figure>
								<a href="#" class="no" title="לא פעיל">
									<img src="../Images/thebeauty.png" alt="The beauty Deals ">
								</a>	
								<figcaption class="storeName"><p>The beauty Deals </p><p>נתניה</p>
									<div class="description"><p> מרכזים עבורכם את כל המבצעים מרשתות הפארם במחירים הזולים ביותר</p>
									</div>
									<p>18%</p>
									<div class="bar fifteen"></div>
									<div class="stats">
										<div class="col">
											18,000 <br>
											<span class="small"> מתוך 100,000</span>
										</div>
										<div class="col">
											20 ימים <br>
											<span class="small">נותרו</span>
										</div>
										<div class="col">
											400 <br>
											<span class="small">תומכים</span>
										</div>
									</div>
								</figcaption>
							</figure>
						</article>
									
						<article class="store" >
							<figure>
								<a href="#" class="no" title="לא פעיל">
									<img src="../Images/HITSCOSMETICS.png" alt="Hits cosmetics">
								</a>
								<figcaption class="storeName"><p>Hits cosmetics</p><p>חולון</p>
									<div class="description"><p>מוצרי הטיפוח הכי מיוחדים בחנות אחד, איכות מובטחת ושירות לקוחות מדהים</p></div>
									<p>97%</p>
									<div class="bar five"></div>
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
				</div>
			</section>
			  
			
			<section> 
				<div class="title">
				<h2>פנאי</h2>
				</div>
				<div class="gallery">
					<div class="scrollmenu">
						<article class="store">
							<figure>
								<a href="#" class="no" title="לא פעיל">
									<img src="../Images/play.png" alt="toy store">
								</a>
								<figcaption class="storeName"><p>PLAY</p> <p>תל אביב</p>
									<div class="description"><p>חנות הצעצועים מספר אחת במדינה לכל המשפחה במחירים נוחים </p>
									</div>
									<p>92%</p>
									<div class="bar three"></div>
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
							
						<article class="store">
							<figure>
								<a href="balloon.php">
									<img src="../Images/ballon.png" alt="KB ballon">
								</a>
								<figcaption class="storeName"><p>KB ballon</p><p>חולון   </p>
									<div class="description"><p>אצלנו תמצאו את כל מה שצריך בשביל מסיבה מהסרטים </p></div>
									<p>20%</p>
									<div class="bar ten"></div>
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
								</figcaption>
							</figure>
						</article>
							
						<article class="store">
							<figure>
								<a href="#" class="no" title="לא פעיל">
									<img src="../Images/greentoys.png" alt="Green Toys"></a>
								<figcaption class="storeName"><p>Green Toys</p><p>ראשון לציון</p>
									<div class="description"><p>לא עוד צעצועים מזהמים! צעצועים ממוחזרים עם ערך מוסף</p></div>
									<p>70%</p>
									<div class="bar one"></div>
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
								<a href="#" class="no" title="לא פעיל">
									<img src="../Images/hapirat.png" alt="הפיראט האדום">
								</a>
								<figcaption class="storeName"><p>הפיראט האדום</p> <p>יבנה</p>
									<div class="description"><p>חנות צעצועים ומשחקים ממיטב היצרנים והמותגים בעולם</p></div>
									<p>85%</p>
									<div class="bar two"></div>
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
								<a href="#" class="no" title="לא פעיל">
									<img src="../Images/simple.png" alt="פשוט לטייל" >
								</a>
								<figcaption class="storeName"><p>פשוט לטייל</p> <p>גבעתיים</p>
									<div class="description"><p>מאגר עצום של טיולים בארץ ובחו"ל. הסברים מפורטים, טיפים ותמונות </p></div>
									<p>92%</p>
									<div class="bar three"></div>
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
						
						<article class="store" id="firsthide">
							<figure>
								<a href="#" class="no" title="לא פעיל">
									<img src="../Images/GiftsLove.png" alt="מתנות שקל לאהוב">
								</a>
								<figcaption class="storeName"><p>מתנות שקל לאהוב</p> <p>ירושלים</p>
									<div class="description"><p>חנות המפעל של עמותת שק"ל - שילוב קהילתי לאנשים עם מוגבלויות</p></div>
									<p>60%</p>
									<div class="bar four"></div>
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
							
						<article class="store" >
							<figure>
								<a href="#" class="no" title="לא פעיל">
									<img src="../Images/doart.png" alt="Doart">
								</a>
								<figcaption class="storeName"><p>Doart</p><p>קרית אונו   </p>
									<div class="description"><p>חנות קסומה מלאה השראה לאוהבי היצירה בעבודת יד ובאנרגיות חיוביות</p></div>
									<p>97%</p>
									<div class="bar five"></div>
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
						
						<article class="store" >
							<figure>
								<a href="#" class="no" title="לא פעיל">
									<img src="../Images/bruria.png" alt="ברוריה">
								</a>
								<figcaption class="storeName"><p>ברוריה</p><p>תל אביב</p>
									<div class="description"><p>חנות צבעונית וייחודית שמחזיקה מגוון עצום של של תחפושות</p></div>
									<p>97%</p>
									<div class="bar five"></div>
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
				</div>
			</section>
			 
			<section> 
				<div class="title">
					<h2>טכנולוגיה</h2>
				</div>
					
				<div class="gallery">
					<div class="scrollmenu">
						<article class="store">
							<figure>
								<a href="#" class="no" title="לא פעיל">
									<img src="../Images/liorhashmal.png" alt="ליאור מוצרי חשמל">
								</a>
								<figcaption class="storeName"><p>ליאור מוצרי חשמל</p><p>שילת</p>
									<div class="description"><p>מהרשתות המובילות בישראל,מיטב המותגים המובילים בתחום מוצרי החשמל </p></div>
									<p>18%</p>
									<div class="bar fifteen"></div>
									<div class="stats">
										<div class="col">
											18,000 <br>
											<span class="small"> מתוך 100,000</span>
										</div>
										<div class="col">
											20 ימים <br>
											<span class="small">נותרו</span>
										</div>
										<div class="col">
											400 <br>
											<span class="small">תומכים</span>
										</div>
									</div>
								</figcaption>
							</figure>
						</article>
								
						<article class="store">
							<figure>
								<a href="#" class="no" title="לא פעיל">
									<img src="../Images/b-art-tec.png" alt="B-ART-TEC">
								</a>
								<figcaption class="storeName"><p>B-ART-TEC</p> <p>בני ברק</p>
									<div class="description"><p>מקצוענים בתחום סטריאו - איכות מובטחת HI-END מערכות קולנוע ביתי בית חכם</p></div>
									<p>60%</p>
									<div class="bar four"></div>
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
							
						<article class="store">
							<figure>
								<a href="Edval.php">
									<img src="../Images/adval.png" alt="Edval">
								</a>
								<figcaption class="storeName"><p>Edval</p> <p> 
									נתניה</p>
									<div class="description"><p>מספר אחד במערכות אבטחה לבית ולעסק, אמינות, דיוק ושירות לקוחות אדיב </p></div>
									<p>92%</p>
									<div class="bar three"></div>
									<div class="stats">
										<div class="col">
											92,000 <br>
											<span class="small"> מתוך 100,000</span>
										</div>
										<div class="col">
											2 ימים <br>
											<span class="small">נותרו</span>
										</div>
										<div class="col">
											540 <br>
											<span class="small">תומכים</span>
										</div>
									</div>
								</figcaption>
							</figure>
						</article>
							
						<article class="store">
							<figure>
								<a href="#" class="no" title="לא פעיל">
									<img src="../Images/aluftech.png" alt="אלוף טכנולוגיות">
								</a>
								<figcaption class="storeName"><p>אלוף טכנולוגיות</p
									><p>יקנעם</p>
									<div class="description"><p>הקמת אתרים לחברות תוך אפיון והתאמה מלאה של האתר למאפייני החברה ולתקציב </p></div>
									<p>60%</p>
									<div class="bar four"></div>
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
							
						<article class="store">
							<figure>
								<a href="#" class="no" title="לא פעיל">
									<img src="../Images/hashmalneto.png" alt="חשמל נטו">
								</a>
								<figcaption class="storeName"><p>חשמל נטו</p><p>תל אביב</p>
									<div class="description"><p> מתמחה בהתאמת מוצרי החשמל באופן מיטבי לצרכי הלקוח תוך התחייבות למחיר</p></div>
									<p>97%</p>
									<div class="bar five"></div>
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
							
						<article class="store" >
							<figure>
								<a href="#" class="no" title="לא פעיל">
									<img src="../Images/hameir.png" alt="המאיר">
								</a>
								<figcaption class="storeName"><p>חנות חשמל</p><p>פתח תקווה</p>
								<div class="description"><p>תהנו ממגוון מוצרי חשמל ואלקטרוניקה לבית במחירים מוזלים ונוחים לכל כיס</p></div>
								<p>85%</p>
								<div class="bar two"></div>
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
								
						<article class="store" >
							<figure>
								<a href="#" class="no" title="לא פעיל">
									<img src="../Images/techmobile.jpg" alt="טכמובייל">
								</a>
								<figcaption class="storeName"><p>טכמובייל </p><p>נתניה</p>
									<div class="description"><p>חנות ומעבדת סלולר מקצועית מבטיחה אמינות, זריזות, מחיר מעולה וליוי אישי</p>
									</div>
									<p>60%</p>
									<div class="bar four"></div>
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
								
						<article class="store" >
							<figure>
								<a href="#" class="no" title="לא פעיל">
									<img src="../Images/manylan.png" alt="Hits cosmetics">
								</a>
								<figcaption class="storeName"><p>גול</p><p>חולון</p>
									<div class="description"><p>הגנה מפריצות, טכנולוגיה מתקדמת לבתים מתקדמים תוך ליווי מלא ללא הגבלה כלל</p></div>
									<p>97%</p>
									<div class="bar five"></div>
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
				</div>
			</section>
				
				   
			<section> 
				<div class="title">
				<h2>בעלי מקצוע</h2>
				</div>
				
				<div class="gallery">
					<div class="scrollmenu">
						<article class="store">
							<figure>
								<a href="#" class="no" title="לא פעיל">
									<img src="../Images/MADBIR.png" alt="מר מדביר">
								</a>
								<figcaption class="storeName"><p>מר מדביר</p><p>תל אביב</p>
									<div class="description"><p>חברת ההדברות האיכותית ביותר עם תעודת אחריות לשנה</p></div>
									<p>62%</p>
									<div class="bar twelve"></div>
									<div class="stats">
										<div class="col">
											62,000 <br>
											<span class="small"> מתוך 100,000</span>
										</div>
										<div class="col">
											1 יום <br>
											<span class="small">נותרו</span>
										</div>
										<div class="col">
											240 <br>
											<span class="small">תומכים</span>
										</div>
									 </div>
								</figcaption>
							</figure>
						</article>
							
						<article class="store">
							<figure>
								<a href="#" class="no" title="לא פעיל">
									<img src="../Images/instelator.png" alt="א.א אינסטלציה">
								</a>
								<figcaption class="storeName"><p>א.א אינסטלציה</p> <p>תל אביב</p>
									<div class="description"><p> אינסטלטור, אמין, מוסמך ומקצועי בעל מעל 20 שנות ניסיון</p></div>
									<p>85%</p>
									<div class="bar two"></div>
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
								<a href="#" class="no" title="לא פעיל">
									<img src="../Images/amnon.png" alt="חשמל אמנון">
								</a>
								<figcaption class="storeName"><p>חשמל אמנון</p> <p>באר יעקב</p>
									<div class="description"><p>עבודות חשמל והתקנת גופי תאורה באיכות גבוהה עם וותק מעל 20 שנה </p></div>
									<p>60%</p>
									<div class="bar four"></div>
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
						
						<article class="store">
							<figure>
								<a href="#" class="no" title="לא פעיל">
									<img src="../Images/handiman.png" alt="יוסי הנדימן">
								</a>
								<figcaption class="storeName"><p>יוסי הנידמן</p> <p>אשקלון</p>
									<div class="description"><p>אני כאן בשבילכם ומציע לכם ליווי אישי ומקצועי לאורך כל הדרך</p></div>
									<p>92%</p>
									<div class="bar three"></div>
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
						
						<article class="store">
							<figure>
								<a href="#" class="no" title="לא פעיל">
									<img src="../Images/guk.png" alt="הדברה ירוקה" >
								</a>
								<figcaption class="storeName"><p>הדברה ירוקה</p><p>רמת גן</p>
									<div class="description"><p>   הדברה ירוקה ובטוחה לאורך חיים שקט ורגוע בלי דאגות מחומרים כימיים</p></div>
									<p>97%</p>
									<div class="bar five"></div>
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
						
						<article class="store">
							<figure>
								<a href="#" class="no" title="לא פעיל">
									<img src="../Images/kobi.png" alt="קובי פיתוח והקמת גינות">
								</a>
								<figcaption class="storeName"><p>קובי פיתוח והקמת גינות</p><p>אילת</p>
									<div class="description"><p>אמן פיתוח והקמת גינות ירוקות, עצי פרי ונוי באיכות גבוהה ושירות אדיב </p></div>
									<p>15%</p>
									<div class="bar eight"></div>
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
							
						<article class="store">
							<figure>
								<a href="graphic.php">
									<img src="../Images/graphical.png" alt="גרפיקאית אושרת" >
								</a>
								<figcaption class="storeName"><p>גרפיקאית אושרת </p> <p>נתניה</p>
									<div class="description"><p>בואו ליצור את הלוגו שיהפוך את העסק שלכם לייחודי ומרהיב</p></div>
									<p>47%</p>
									<div class="bar thirteen"></div>
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
								</figcaption>
							</figure>
						</article>
					</div>
				</div>
		</section>     
		 
	<!-- end of navigate to store pages -->        
	</main>	
	<?php 
		include "footer.php";
	?>		
</body>
</html>