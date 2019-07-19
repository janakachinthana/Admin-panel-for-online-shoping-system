<?php 
//Linking the configuration file
require 'config.php';
?>	


<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Admin Search page</title>
	<link href ="style/search.css" rel= "stylesheet" type= "text/css">
</head>
<body>
<center>
<body background="monkimage.jpg"/>
	<div class="maindiv">
	<div class="maindiv1">
		<header class = "header">
		<center>
			<h1 class="h1-1">TiddleWink Online Kids Accessories Shop <br/> Welcome to Admin Panel
			</h1>
			<input class="search1" type="number" >
			<input class="submit1" type="submit" type ="search" name="submit" value="Search"></center>
		<div class="profile">
		<img class="img1"></div>
		<h4 class="profile-name">hellow <br/> Mr. xxxx...</h4>

	<nav class="nav1">
		<ul class="nav1-ul">
			<li class="list1"><a href="homep.html">Home</a></li>
			<li class="list1"><a href="category.php">Category</a></li>
			<li class="list1"><a class="active">View Item Details</a></li>
			</ul>  
	</nav>
	<br/>
		
	</header>
	</div>
	<?php
			$db = mysqli_connect("localhost","root","","tiddlewink");
			$sql = "SELECT * FROM items ORDER BY id DESC ";
			
			$result = mysqli_query($db, $sql);
			
			if(mysqli_num_rows($result) > 0){
				while($row = mysqli_fetch_assoc($result)){
					$total = $row['itemPrice'] + $row['shippingPrice'];
					
				echo "<div class='add-item'>";
					
					echo"<form action='homep.html' method='get'>";
					echo"<br/>";
					echo"<h1>".$row['itemName']."</h1>";
					echo"<div class='div-item'>";
						echo "<img src='images/".$row['image']."'width=350px height=350px>";
			
					echo"</div>";
					echo "<h3>"."Item Code:"."<h3 id=yy>".$row['id']."</h3>";
					echo "<h3>"."Item Name:"."<h3 id=yy>".$row['itemName']."</h3>";
					echo "<h3>"."Item Price:  Rs."."<h3 id=yy>"."Rs.".$row['itemPrice'].".00/="."</h3>";
					echo "<h3>"."Shipping Price:"."<h3 id=yy>"."Rs.".$row['shippingPrice'].".00/="."</h3>";
					echo "<h3>"."Total Price:"."<h3 id=yy>"."Rs.".$total.".00/="."</h3>"."</h3>";
					echo "<h3>"."Discription:"."<h3 id=yy>".$row['discription']."</h3>";
					echo"</form>";
				echo "</div>";
					echo"<br/>"."<br/>";
				}
			}
	?>
		</center>

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
