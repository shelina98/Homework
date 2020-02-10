<html>
<head>
	<style type="text/css">
     	p { margin: 0px; }
     .error { color: red }
   p.head { font-weight: bold; margin-top: 10px; }
	</style>
</head>
<body>

       <?php

	     if (!preg_match( "/^\([0-9]{3}\) [0-9]{3}-[0-9]{3}-[0-9]{3}$/",
                $_POST["phone"]))
	     	{
	     	 print( "<p class = 'error'>Invalid phone number</p>
                     <p>A valid phone number must be in the form
                     (666) 666-666-666</p><p>Click the Back button,
                       enter a valid phone number and resubmit.</p>
                          <p>Thank You.</p> </body></html> " );
                     die();
                  }
		?>

<p>Hi <?php print( $_POST["fname"] ); ?>. Thank you for
completing the survey. You have been added to the mailing list.</p>

 <p class = "head">The following information has been saved
 in our database:</p>
 <p>Name: <?php print( $_POST["fname"] );
   print( $_POST["lname"] ); ?></p>

<p>Email: <?php print( $_POST["email"] ); ?></p>
 <p>Phone: <?php print( $_POST["phone" ]); ?></p>
 <p>username: <?php print( $_POST["uname"] ); ?></p>
 <p class = "head">This is only a sample form.
You have not been added to a mailing list.</p>

	</body>
</html>