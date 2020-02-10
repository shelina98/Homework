<html>
<head>
<style type = "text/css">
    label { width: 5em; float: left; }
 </style>
	 <body>

		 <h1>Registration Form</h1>
 <p>Please fill in all fields and click Register.</p>

<form method="post" action="SignupForm.php">

	<h2>User Information</h2>

 <!-- create four text boxes for user input -->
 <div><label>First name:</label>
 <input type = "text" name = "fname" required></div>
 <div><label>Last name:</label>
 <input type = "text" name = "lname" required></div>
 <div><label>Username:</label>
 <input type = "text" name = "uname" required></div>
 <div><label>Email:</label>
 <input type = "text" name = "email" required></div>
 <div><label>Password</label>
 <input type = "Password" name = "Password" required></div>
 <div><label>Phone:</label>
<input type = "text" name = "phone"
placeholder = "(+335) 666-666-666"></div>
</div>
          
<p><input type = "submit" name = "submit" value = "Register"></p>
</form>

	</body>
</head>
</html>