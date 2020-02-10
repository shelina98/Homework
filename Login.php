<html>
<head>
<style type = "text/css">
    label { width: 5em; float: left; }
 </style>
	 <body>

		 <h1>Login Form</h1>
 <p>Please fill in all fields and click Log in.</p>

<form method="post" action="Login.php">

	<h2>User Information</h2>

 <!-- create four text boxes for user input -->

 <div><label>Username:</label>
 <input type = "text" name = "uname" required></div>

 <div><label>Password</label>
 <input type = "Password" name = "Password" required></div>
          
<p><input type = "submit" name = "submit" value = "Log in"></p>
</form>

	</body>
</head>
</html>