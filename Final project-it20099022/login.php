<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href= "ED.css">
</head>
<body>
	<img src="pictures/img.jfif" width="785" height="330">
  <div class="header">
	  <h2>Login</h2>
   
	 <div class="container">
	<div class ="navbar">
		<div class ="logo">
		  
	</div>
		<nav>
			<ul id="MenuItems">
		  <li><a href="login.php">Login </a></li>
		  <li><a href=" home.html ">Home </a></li>
		     
    
  
			 
  </ul>
		</nav>
	 
  <form method="post" action="login.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
		<label>Username</label>
  		<input type="text" name="username" >
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Login</button>
  	</div>
  	<p>
  		Not yet a member? <a href="register.php">Sign up</a>
  	</p>
  </form>
</body>
</html>