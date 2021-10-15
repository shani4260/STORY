<?php
    require_once('init.php');

    if (!$session->signed_in){
        header('Location: login.php');
        exit;
    }
?>

<!DOCTYPE html>
<html lang="he">
<head>
    <meta charset="UTF-8">
    <title>Cart</title>
    <link rel="stylesheet" type="text/css" href="../CSS/cartcss.css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <?php 
		include "header.php";
    ?>
</head>

<body>
    <main>
	    <section class="cartTitle">
		    <h1>סל התשורות</h1>
	    </section>
	
	    <div id="cart">
            <section class="product">
		    	<header>               
                    <img src="../Images/GARDEN.png" alt="GARDEN">
			    </header>
			
			    <main class="content">
				    <h1>גארדן בלב המושבה</h1>
                    <p>ארוחת צהריים עסקית</p>
			    </main>
			
                <article class="quantity">
                    <span class="qt-minus" onclick="minus()">-</span>
                    <span class="qt">1</span>
                    <span class="qt-plus" onclick="plus()">+</span>
				
				    <h2 class="trash">
					    <img class="removeTrash" src="../Images/garbage.png" alt="garbage">
                    </h2>
    
                    <h2 class="full-price">100</h2>
                    <h2 class="price"><span>100₪</span></h2>
                </article>
			</section>
			
		    <section class="product">
			    <header>               
                    <img src="../Images/bellespa.png" alt="bellespa">
			    </header>
			    <main class="content">
			        <h1>Belle Spa</h1>
                    <p>מסז' יחיד למשך 45 דקות</p>
			    </main>
               
                <article class="quantity">
                    <span class="qt-minus">-</span>
                    <span class="qt">1</span>
                    <span class="qt-plus">+</span>
				    <h2 class="trash">
					    <img class="removeTrash" src="../Images/garbage.png" alt="garbage">
					</h2>
                    <h2 class="full-price">150</h2>
                    <h2 class="price"> <span>150₪</span></h2>
                </article>
			</section>
			
			<section class="product">
			    <header>               
                    <img src="../Images/rustico.jpg" alt="Rustico">
			    </header>
		        <main class="content">
			        <h1>Rustico</h1>
                    <p>ארוחת שף פרטית</p>
				</main>
                <article class="quantity">
                    <span class="qt-minus">-</span>
                    <span class="qt">1</span>
                    <span class="qt-plus">+</span>
				    <h2 class="trash">
					<img class="removeTrash" src="../Images/garbage.png" alt="garbage">
					</h2>
                    <h2 class="full-price">300</h2>
                    <h2 class="price"> <span>300₪</span></h2>
                </article>
			</section>
			
			<section class="product">
			    <header>               
                    <img src="../Images/rustico.jpg" alt="Rustico">
			    </header>
			    <main class="content">
			        <h1>Rustico</h1>
                    <p>אהבת חינם</p>
				</main>
               
                <article class="quantity">
                    <span class="qt-minus">-</span>
                    <span class="qt">1</span>
                    <span class="qt-plus">+</span>
                    
				    <h2 class="trash">
    					<img class="removeTrash" src="../Images/garbage.png" alt="garbage">
					</h2>
					
                    <h2 class="full-price">50</h2>
                    <h2 class="price"><span>50₪</span></h2>
                </article>
			</section>
        </div>
        
        <section class="total">
            <article>
            <h2 class="totalPrice"> סכום כולל:<span></span>₪</h2>
            </article>
            <article class="paymentMethod">
                <div id="imgInPayment">
                    <h2>בחירת אמצעי תשלום</h2>
                    <img class="pay1 no" title="לא פעיל" src="../Images/bit.png" alt="bit">
                    <img class="pay2 no" title="לא פעיל" src="../Images/paypal.png" alt="paypal">
                    <img class="pay3 no" title="לא פעיל" src="../Images/visa.png" alt="visa">
                </div>
            </article>
        </section>
        <br>
        <br>
    
        
    </main>
    
    <?php 
	    include "footer.php";
    ?>
    <script src=../JS/cart.js></script>
</body>
</html>