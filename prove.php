<html>
<head> 
<style>

  body  { background-image: url("background.png"); 
        background-size:cover;
        margin:0px;}
		
		
#koka     { list-style-type: none;
               margin-top: 10px;
                   padding: 0;
                 overflow: hidden; 
              background-color: #333;}
			  
 #Emri { font-family:helvetica;
          color:yellow;
          float:left;
		  margin:5px;
          font-size:32px;}

 #koka li {  float: right;}

li a {   display: block;
             padding: 14px 16px;
            text-decoration: none;}

.button { 
              border-color:red;

		        font-size:30px;

				color:red;}
		   	   
.button:hover  {color:gray;}

    #quote { position:fixed;
            bottom: 0;
             right: 0; 
			 background-color:#333}	
	#contact {
	       position:fixed;
            bottom: 0;
             left: 0;        
			 width:10%;}		
    #copyright {  position:fixed;
	              bottom:0;
				  left:10%;
				  color:white;
				  background-color: red;
		}			 
			 
		   
 #searchbox {     font-family:helvetica;
                  color:black;
				  text-align:left;
				  position:fixed;
				  margin:250px;
				  padding-top:30;
				  padding-bottom:30;
				  padding-left:50;
				 
			}
	
	
p {font-family:helvetica;
    color:yellow;
   font-weight:bold; }					   
					  
a    {  color:white;
		text-decoration:none;
		font-family:helvetica;}
		
a:hover {color:gray;}

#welcome   {  color:white;
			 font-size:30px;
			 position:center;
			 background-color:gray;
			} 




li.dropdown {
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: black;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {     /* linqet e kategorive*/
  color: white;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {background-color:gray;
	                                                }    /*hover link kategorite*/

.dropdown:hover .dropdown-content {
  display: block;
</style>


</head>

<body>



<ul id="koka">

<p id="Emri"> Cinephiles spot </p>

<li> <a class="button" id="log " > Log in </a> </li>
<li> <a class="button" href="SignupForm.php"> Sign Up </a> </li>
<li> <a class= "button" href="<?php
echo $_SERVER['PHP_SELF']; ?>" > Home </a > <li>
<li class="dropdown">
    <a href="javascript:void(0)" class="button">Kategoria</a>
    <div class="dropdown-content">
      <a href="#">Aksion</a>
      <a href="#">Drame</a>
      <a href="#">Horror</a>
      <a href="#">Romance</a>
      <a href="#">Animated</a>
    </div>
  </li>
             
</ul>

<p id="welcome"> Welcome to our review site! Review your favourite movie,Now. </p> 


<input type="search" id="searchbox" placeholder="Search movie..."> </input> 

 
 <p id="contact" > <a href=" mailto:Shela.Veliu@fti.edu.al" > Contact </a>  </p>
 <p id="copyright"> Copyright &copy Shela Veliu. All rights reserved. </p> 
 <p id="quote"> Cinema is the ultimate pervert art. It doesn't give you what you desire - it tells you how to desire.</p>  

</body>
</html>