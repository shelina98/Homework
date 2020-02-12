<html>
<head> 
<link href="style.css?v=<?php echo time();?> " rel="stylesheet" type="text/css">
</head>

<body>

         <?php
         session_start();
         if(!isset($_SESSION['username']))
			 require_once('navigationbar.php');
		 else { 
		 	require_once('navuser.php') ;
		  }
          ?>

<p id="welcome"> Welcome to our review site! Review your favourite movie,Now. </p> 



 
  <?php
        require_once('footer');
     ?>

</body>
</html>