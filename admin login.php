<?php 
//Linking the configuration file
require 'config.php';
?>	


<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>Admin Login page</title>
	<link href ="style/admin login.css" rel= "stylesheet" type= "text/css">
	
</head>

<body>

<body background="monkimage.jpg"/>
<center>
	<div class="maindiv">
	<div class="maindiv1">
		<header class = "header">
		<center>
			<h1 class="h1-1">TiddleWink Online Kids Accessories Shop <br/> Welcome to Admin Panel
			</h1>
			<nav class="nav1">
			<ul class="nav1-ul">
			<li class="list1"><a href="homep.html">Home</a></li>
			<li class="list1"><a class="active">Admin Panel</a></li>
			</ul> 
	</nav>
	<br/>
		</center>
	</header>
	</div>
		
	<div class="add-item">
		<form action="#" method="post" class="form">
		authorized admin:
		<br/>Admin User Name: <input type="rext" name="user-name" class="admin-user-name"><br/>
		<br/>password:<input type="password" name="password" class="password">
		<a href="category.php"><input type="button" class="button1" name="login" value="Login"></a>
		<br/><h4 class="break-line">-</h4>
		<br/>
		authorized admin: 
		<button class= "button2">Sign Up</button>
		</form>
	</div>

	<footer class="footer">
	
		<li class="li3"><h3><a href="#coppyright">| Coppy right @ Allright reserved |</a>
		<a href="#www.facebook.com"><img class="img2"></a>
		<a href="#www.instagram.com"><img class="img3"></a>
		<a href="#www.twitter.com"><img class="img4"></a>
		<a href="#www.in.com"><img class="img5"></a>
		<a href="#www.visacard.com"><img class="img6"></a>
		<a href="#www.mastercard.com"><img class="img7"></a>
		<a href="#privecy"> | Privecy Policy |</a><a href="#terms">| Terms and Condition |</a></h3></li>
		
	</footer>		
</div>
</center>
</body>	
</html>