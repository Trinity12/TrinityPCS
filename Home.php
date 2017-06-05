<?php
   session_start();
?>
<!doctype html>
    <html>
	   <head>
	       <title>Home/</title>
		   <meta name="viewport" content="width=device-width, initial-scale=1.0">
		   <link rel="stylesheet" type="text/css" href="4.css"/>
		   <link href="https://fonts.googleapis.com/css?family=Convergence" rel="stylesheet"/>
		   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"/>
        </head>
     <body>
	    <div class="container">
		    <ul class="container-box">
					  <li><a  id="header" href="300.php">SingUp</a>
					      <ul class="list1">
						      <li><a  href="#">Alexa</a></li>
							  <li><a href="#">Alexa</a></li>
							  <li><a href="#">Alexa</a></li>
							  <li><a href="#">Alexa</a></li>
						  </ul>
					  </li>
					   <li class="box-Two"><a id="header" href="301.php">LogIn</a>
					    <ul class="list2">
						      <li><a href="#">Alexa</a></li>
							  <li><a href="#">Alexa</a></li>
							  <li><a href="#">Alexa</a></li>
							  <li><a href="#">Alexa</a></li>
						  </ul>
					   </li>
					    <li class="box-three"><a id="header" href="off2.php">LogOut</a>
						<ul class="list3">
						      <li><a href="#">Alexa</a></li>
							  <li><a href="#">Alexa</a></li>
							  <li><a href="#">Alexa</a></li>
							  <li><a href="#">Alexa</a></li>
						   </ul>
						</li>
					  <li class="box-four"><a id="header" href="profile.php">Profile</a>
					     <ul class="list4">
						      <li><a href="#">Alexa</a></li>
							  <li><a href="#">Alexa</a></li>
							  <li><a href="#">Alexa</a></li>
							  <li><a href="#">Alexa</a></li>
						  </ul>
					  </li>
				  </ul>
		      </div>
			</nav>
		</div>
		   <?php
		      if(!isset($_SESSION['user'])){
				 header('location:301.php');
			  }else{
			     echo '<h1 style=" margin-left:10%; margin-right:10%; margin-top:10%; border:1px solid black;text-align:center;padding-top:30px;padding-bottom:30px;padding-right:30px;padding-left:30px; background-color:#0FB967; color:white;" >'. $_SESSION['user'].'</h1>';
			  }
		   ?>
		   <div style="height:300px; width:80%;margin-left:10%; margin-right:10%; border:1px solid black;" ></div>
			<h1 class="end">END</h1>
	   </body>
</html>








