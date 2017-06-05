<!doctype html>
   <html>
      <head>
	     <title>Register.Slide</title>
		  <link rel="stylesheet" type="text/css" href="register.css"/>
		  <link href="https://fonts.googleapis.com/css?family=Convergence" rel="stylesheet"/>
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"/>
	</head>
<body>
   <div class="container-box">
	   <h1>Register...!</h1>
	     <form action="#" method="POST">
		   <input name="user" type="text"  style="margin-top:10px;"placeholder="Type User Name" required/></br>
		   <input name="email" type="email"style="margin-top:10px;" placeholder="Type Ur Email" required /></br>
		   <input name="pass" type="password"style="margin-top:10px;" placeholder="Type Ur Password" required/></br>
		   <input name="pass2" type="password"style="margin-top:10px;"placeholder="Re Type ur Password" require/></br>
			  <button id="btn" name="btn" style="margin-top:10px;" class="btn btn-info">Submit</button>
		 </form>
		   <?php
		      $connect = mysqli_connect('localhost','root','','secondlog')or die(mysqli_error());
			   
			   if(isset($_POST['btn'])){
					  $user  = $connect->real_escape_string($_POST['user']);
					  $email  =  $connect->real_escape_string($_POST['email']);
					  $password  =  $connect->real_escape_string(md5($_POST['pass']));
					  $password2  =  $connect->real_escape_string(md5($_POST['pass2']));
					   if(strlen($user) > 5 && strlen($email) > 5 && strlen($password) > 6 ){
					if($password == $password2){
						    $sql = "SELECT * FROM one WHERE user ='$user'";
						    $result = $connect->query($sql);
							$exist = mysqli_num_rows($result);
						   if($exist > 0 ){
								   echo 'The User name Is Already taken...';
							}else{
								$sql4 = "SELECT email FROM one WHERE email ='$email'";
								 $result5 = $connect->query($sql4);
								if(mysqli_num_rows($result5) > 0 ){
									echo 'Email Is aAlready In Use..';
								}else{
								  $sql2 = "INSERT INTO one(ID,user,email,password) VALUES('NULL','$user','$email','$password')";
								  $result2 = $connect->query($sql2);
								  session_start();
							      $_SESSION['user'] = $user;
								  header('location:Home.php');
							    }
					        }
						}else{
							echo 'passwords  Are Not the same';
						}
				    } 
				}				 
		   ?>
	 </div>
	    <h2><a href="301.php">LOG In</a></h2>
		 <h2><a href="Home.php">home</a></h2>
  </body>
</html>