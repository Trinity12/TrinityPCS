<?php
  session_start();
?>
 <!dotype html>
    <html>
	   <head>
	     <title>Profile/Menu</title>
		   <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		   <link rel="stylesheet" type="text/css" href="profile.css"/>
		   <link href="https://fonts.googleapis.com/css?family=Convergence" rel="stylesheet"/>
		   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"/>
		</head>
  <body>
   <div class="container-info">
     <div class="image-container">
	    <img  class="aimage-result" src=""/>
		 </div>
		<div class="info">
		   <h1 class="UserN"><?php  echo $_SESSION['user'];?></h1>
		   <div class="Resume">
		      <p class="info">
			    A person is a being, such as a human, that has certain capacities or attributes constituting personhood, which in turn is defined differently by different authors in different disciplines, and by different cultures in different times and places.

                In addition to the question of personhood, of what makes a being count as a person to begin with, there are further questions about personal identity and self: 
			 </p>
		  </div>
		</div>	 
	 </div> 
         <h1><a href="Home.php">Home</a></h1>	 
        <script src="jquery-3.2.1.min.js"></script>
		  <script>
		  
		  </script>
     </body>
</html>