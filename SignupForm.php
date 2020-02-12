  <?php
require_once('config.php');
$usernameError = " ";

if (isset($_POST['submit']))
{

    $username = $_POST['uname'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query= "SELECT Username 
            FROM users 
            WHERE Username = '$username' ";

    if($result = mysqli_query($database,$query))
    {
           if(mysqli_num_rows($result)==1)
           {
                  $usernameError = "Jeni regjistruar nje here me kete Username";

           }
            else {   
                     $qRegjistro = "INSERT INTO users( Username, Email, Password)
                     values ( '$username','$email','$password')";
                    if(mysqli_query($database,$qRegjistro))
                    {
                        session_start();
                        $_SESSION['username'] = $username;
                        header('location: prove1.php');

                    }
                    else{
                    echo "Gabim ne query 2.";
                         }

              }

    }

    else {
        echo "Gabim ne query.";
         }

}

?>


<html>
<head>
	<link href="style.css" rel="stylesheet" type="text/css">

<style type = "text/css">
	    body {maring:50% ;}
    label { width: 5em; float: center; }

    #forma {  position: fixed;
    	      float: center;
    	      margin-left: 300px;
    	background-color: white;
    	opacity: 0.95;
    	}
 </style>

	 <body>

	 	<?php
        require_once('navigationbar.php');
          ?>
<div id="forma">

		 <h1>Registration Form</h1>
 <p style="color: red">Please fill in all fields and click Register.</p>

<form method="post" action="SignupForm.php">

	<h2>User Information</h2>

 <!-- create four text boxes for user input -->
 <div> <label>Username:</label>
 <input type = "text" name = "uname" required> </div>
 <div><label>Email:</label>
 <input type = "email" name = "email" required> </div>
 <div><label>Password</label>
 <input type = "password" name = "password" required></div>

          
<p> <input type = "submit" name = "submit" value = "Register"></p>
</form> </div>


<?php
        require_once('footer');
     ?>

</body>
</head>
</html>