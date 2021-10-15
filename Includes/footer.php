<!DOCTYPE html>
<html lang="he">
<head>
    
	<link rel="stylesheet" type="text/css" href="/STORY-main/CSS/footer.css"/>
</head>
<body>
    <footer class="footer">
        <div class="container">
    	    <div class="row">
    		    <section class="col-lg-4">
				
    		       <form method="GET" action="" name="updated">
    				    <div class="leftFooter">
                            <h4>רוצים להמשיך להיות מעודכנים?</h4>
                            <p>נשמח לעדכן אתכם בכל מה שמעניין</p>
							<input type="text" name="username" placeholder="שם" style="text-align:center"><br>
                            <input type="text" name="mail" placeholder="כתובת מייל" style="text-align:center"><br><br>
    				        <input type="submit" name="submit" value="שלח" class="button1" src="/STORY-main/Images/sendbutton.png" alt="Send"><br>
    				   
							<?php 
								if( isset($_GET['mail'])){
									 $name = $_GET['mail'];
									 echo "המייל שנקלט במערכת:".$name.".";
								}
							?>
						</div>
                    </form> 
					
					
		
                    <div class="socialMedia">
    				    <br>
    	                <a href="#" class="no"> <img class="icon1" src="/STORY-main/Images/mail.png" title="לא פעיל"> </a>
                        <a href="#" class="no"> <img class="icon1" src="/STORY-main/Images/instagram.png" title=" לא פעיל"> </a>
                        <a href="#" class="no"> <img class="icon2" src="/STORY-main/Images/facebook.png" title="לא פעיל"> </a>
    	            </div>
                </section>
                      
    		    <section class="col-lg-4 col-6">
    		        <br>
    		        <h5 class="headerAboutUs"><b> פעולות </b></h5>
                    <ul>
        				<li> <a href="#" class="aboutUs no" title=" לא פעיל"> שאלות תשובות</a></li>
                        <li> <a href="#" class="aboutUs no" title=" לא פעיל"> מדריך לעסקים</a></li>
                        <li> <a href="#" class="aboutUs no" title=" לא פעיל"> איך אנחנו עובדים</a></li>
                    </ul>
                </section>
                
                <section class="col-lg-4 col-6">
                    
    			    <br>
    			    <h5 class="headerAboutUs"><b>נעים להכיר</b></h5>
                    <ul>
    					<li> <a href="#" class="aboutUs no" title=" לא פעיל"> קצת עלינו</a> </li>
    					<li> <a href="#" class="aboutUs no" title=" לא פעיל"> צור קשר</a> </li>
                        <li> <a href="#" class="aboutUs no" title=" לא פעיל"> תקנון האתר</a> </li>
                        <li> <a href="#" class="aboutUs no" title=" לא פעיל"> דרושים</a> </li>
                    </ul>
                    
    		    </section>
    		   
    		    <div class="container">
    	            <div class="rights">
                        <p>©️ הזכויות שמורות לשני | מרגריטה | עדן ©️</p>      
                    </div>
                </div>
				
    		</div>
        </div>		
    </footer>
</body>  
</html>