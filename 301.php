 <!doctype html>
     <html>
	    <head>
		   <title></title>
		     <link rel="stylesheet" type="text/css" href="log.css"/>
			 <link href="https://fonts.googleapis.com/css?family=Convergence" rel="stylesheet"/>
		     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"/>
		</head>
   <body>
       <div class="container-box">
	    <h1>Log In....!</h2>
	       <form action="#" method="POST">
		      <input name="user"type="text" style="margin:10px;" placeholder="Type Ur User Name" required/></br>
			  <input name="pass" type="password" style="margin:10px;" placeholder="Type Ur Password" required/></br>
		       <button name="btn" class="btn btn-info">Verify</button>
		   </form>
		      <?php
			      $connect = mysqli_connect('localhost','root','','secondlog')or die(mysqli_error());
			  
			       if(isset($_POST['btn'])){
					   $user =$connect->real_escape_string($_POST['user']);
					   $password = $connect->real_escape_string(md5($_POST['pass']));
				     if(strlen($user)> 5 && strlen($password)> 5){
						   $sql = "SELECT * FROM one WHERE user ='$user'";
						    $result = $connect->query($sql);
							  $data = mysqli_num_rows($result);
						  if($data > 0 ){
							    $rows = mysqli_fetch_assoc($result);
								if($rows['password'] == $password){
								    session_start();
                                     $_SESSION['user'] = $user;
									 header('location:Home.php');
							 }else{
								 echo 'Invalid Password or UserName';
							 }
						  }else{
							echo 'The User Name is Not Define' ;  
						  }
					 }
				   }
			  ?>
	   </div>
	      <h2><a href="300.php">Register</a></h2>
    </body>
 <html>