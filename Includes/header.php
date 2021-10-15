<!DOCTYPE html>
<html lang=he>
<head>
    <link rel="stylesheet" type="text/css" href="/STORY-main/CSS/header.css"/>
    <header>
        <div id="logo">
            <img id="storyImg" src="/STORY-main/Images/storyLogo.png" class="center" alt= "logo">
        </div>
        <nav>	
    	    <ul  class="topnav" id="myTopnav">
                <li><a href="/STORY-main/Includes/logout.php">התנתקות</a><li/>
    	        <li><a href="/STORY-main/Includes/cart.php">סל התשורות</a></li>
				<li><a href="/STORY-main/Includes/reviews.php">ביקורות</a></li>
    	        
        	    
        	    <ul class="navbar-nav ml-auto">
            	    <form class="form-inline">
            		    <input class="form-control" id="search" type="search" placeholder="חיפוש - לא פעיל זמנית" aria-label="Search">
            	    </form>
        	    </ul>
        	    
        	    <li><a href="/STORY-main/Includes/stores.php">מאגר עסקים</a></li>
				<?php 
					$username= $session->username;
					$connection = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
					$sql_sel = "SELECT * FROM `users` WHERE `username`='$username'";
					$result = $connection->query($sql_sel);
					$row = $result->fetch_array();
					$id = $row['id'];
				?>
        	    <li><a href="/STORY-main/Includes/statistic.php?id=<?php echo $id ?>">סטטיסטיקה</a></li>
        	    <li><a href="/STORY-main/index.php">דף הבית</a></li>
    			<?php
    				$username=$session->username;
    				$password=$session->password;
    				$user=new User($username,$password);
    				$user->find_user($username,$password);
    				echo '<b id="userInfo">'.$user->username.' ,שלום</b>';
    			 ?>
            </ul>
        </nav>
        <nav class="navbar navbar-light navbar-1 white" id="hamburger">
            <p class="navbar-brand">''The STORY behinde the store''</p>
    
            <button class="navbar-toggler" type="button"  data-toggle="collapse" data-target="#navbarSupportedContent15"
                aria-controls="navbarSupportedContent15" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span>
            </button>
    
            <section class="collapse navbar-collapse" id="navbarSupportedContent15">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="/STORY-main/index.php">דף בית</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"  href="/STORY-main/Includes/statistic.php?id=<?php echo $id ?>">סטטיסטיקה</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/STORY-main/Includes/stores.php">מאגר עסקים</a>
                    </li>
    	            <li class="nav-item">
                        <a class="nav-link" href="/STORY-main/Includes/cart.php">סל תשורות</a>
                    </li>
					<li class="nav-item">
					<a class="nav-link" href="/STORY-main/Includes/reviews.php">ביקורות</a>
					</li>
    	            <li class="nav-item">
                        <a class="nav-link" href="/STORY-main/Includes/logout.php">התנתקות</a>
                    </li>
                </ul>
            </section>
        </nav>
    </header>
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  
</head>
<body>
</body>
</html>
