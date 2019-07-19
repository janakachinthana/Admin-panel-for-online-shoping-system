<?php 
//Linking the configuration file
require 'config.php';
?>	



<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Delete Search page</title>
	<link href ="style/delete search.css" rel= "stylesheet" type= "text/css">
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
			<input class="search1" type="number">
			<input class="submit1" type="button" type ="search" name="submit" value="Search By ID">
		</center>
		<div class="profile">
		<img class="img1"></div>
		<h4 class="profile-name">hellow <br/> Mr. xxxx...</h4>
	
	<nav class="nav1">
		<ul class="nav1-ul">
			<li class="list1"><a href="homep.html">Home</a></li>
			<li class="list1"><a href="category.php">Category</a></li>
			<li class="list1"><a class="active">Admin Panel</a></li>
		</ul> 
	</nav>
	<br/>
	</header>
	
	
		<?php
		
		$select=mysqli_query($conn,"SELECT * FROM items order by id desc");
		while($row = mysqli_fetch_array($select)){
	?>
			
				<div class="add-item">
				<br/>
				<h1 id="j"><?=$row['itemName']; ?></h1>
				<br/>
				<form action="edit.php" method="post" enctype="multipart/form-data">
				<div class="div-item">
					<img src="images/<?php echo $row['image']; ?>" style="width:350px;height:350px">
				</div>
				<input type="text"  id="xx" name="id" value="<?=$row['id']; ?>" readonly>
				<br/>
				<input type="text" id="xx" name="age" value="<?=$row['age']; ?>" readonly>
				<br/>
				<input type="text" id="xx" name="brand" value="<?=$row['brand']; ?>" readonly>
				<br/>
				<input type="text" id="xx" name="category" value="<?=$row['category']; ?>"readonly>
				<br/>
				<input type="text" id="xx" name="itemName" value="<?=$row['itemName']; ?>" readonly>
				<br/>
				<input type="text" id="xx" name="itemPrice" value="<?=$row['itemPrice']; ?>" readonly>
				<br/>
				<input type="text" id="xx"  name="shippingPrice" value="<?=$row['shippingPrice']; ?>" readonly>
				<br/>
				<textarea 
				name="discription"
				id="xx"
				readonly
                rows = "5"
                cols = "50"pattern= "[a-z]*\{ser\}[a-z]*"><?=$row['discription']; ?></textarea>
				<br/><br/>
				<input type="submit" name="edit" value="edit">
				<br/><br/>
				<input type="submit" name="delete" value="delete">
				<br/><br/>
				<br/>
				</form>
				</div>
		<?php }?>
			

		
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