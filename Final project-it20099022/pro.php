   <?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!doctype html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href= "pr.css"/>
<meta charset="utf-8">
<title>  Products </title>
</head>

<body>
	 <div class="header">
	 
	<div class="container">
	<div class ="navbar">
<nav>
			<li><a href="  home.html"> Home  </a></li>
	<li><a href="  pm.html "> cart </a></li>
	<li><a href= "pro.php">Products</a></li>
		  <li><a href=" ProM.html">ProMate  </a></li>
	   <img src=   "pictures/products/a.png"  width="883" height="125"  >
  <li><a href=  " RA.html"> RATHNA </a></li>
				<img src=  "pictures/products/b.png" width="851" height="125"  >
		    <li><a href="  dsi.html">    DSI </a></li>
           <img src=  "pictures/products/c.png" width="816" height="125"  >
           <li><a href=" at.html">  Atlas </a></li> 
				<img src= "pictures/products/d.png" width="861" height="125"  >
    </ul>
		</nav>