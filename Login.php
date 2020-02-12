<?php

require_once('config.php');
if(isset($_POST['submit']))
{
   $username = $_POST['username'];
  $password = $_POST['password'];

  $qLogin = "SELECT * FROM users 
               WHERE Username = '$username' and Password = '$password'" ;

  if($result = mysqli_query ($database,$qLogin))
  {
    if(mysqli_num_rows($result) == 1 )
    {
      session_start();
      $_SESSION['username'] = $username;
      header('location: prove1.php');

    }
    else echo "Kredenciale te gabuara";
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

         <h1>Login Form</h1>
 <p style="color: red">Please fill in all fields and Login.</p>

<form method="post" action="Login.php">

    <h2>User Credentials</h2>

 <!-- create four text boxes for user input -->

 <div><label>Username:</label>
 <input type = "text" name = "username" required> </div>
 <div><label>Password</label>
 <input type = "Password" name = "password" required></div>

          
<p> <input type = "submit" name = "submit" value = "Register"></p>
</form> </div>


<?php
        require_once('footer');
     ?>

</body>
</head>
</html>