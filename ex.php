<?php 
//Linking the configuration file
require 'config.php';
?>	


<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Item Submit page</title>
	<link href ="style/add.css" rel= "stylesheet" type= "text/css">
	<Script src="home.js"></script>
</head>
<center>
<body>
	<body background="monkimage.jpg"/>
	<div class="maindiv">
	<div class="maindiv1">
		<header class = "header">
		<center>
			<h1 class="h1-1">TiddleWink Online Kids Accessories Shop <br/> Welcome to Admin Panel
			</h1>
		</center>
		<div class="profile">
		<img class="img1"></div>
		<h4 class="profile-name">hellow <br/> Mr. xxxx...</h4>
	
	<nav class="nav1">
		<ul class="nav1-ul">
			<li class="list1"><a href="homep.html">Home</a></li>
			<li class="list1"><a href="add item.php">Add Details</a></li>
			<li class="list1"><a class="active">Confirm Item</a></li>
			</ul> 
	</nav>
	<br/>
	</header>
	</div>

			<?php 
		//if upload button is pressed
		/*if (isset($_POST['submit'])) {
			//the path to store the upload image
			$target = "images/".basename($_FILES['image']['name']);*/
			
			
			//Get all the submitted data from the form
	
			$age =  $_POST['age'];
			$brand = $_POST['brand'];
			$category = $_POST['category']; 
			$item_name = $_POST['item_name'];
			$price = $_POST['price'];
			$ship_price = $_POST['ship_price'];
			$text = $_POST['text'];
			
			$image = $_FILES['image']['name']; 
			$imageTname = $_FILES['image']['tmp_name'];
			$fileSize = $_FILES['image']['size'];
			$fileError = $_FILES['image']['error'];
			$fileType = $_FILES['image']['type'];
			
			$fileExt = explode('.', $image);
			$fileActualExt = strtolower(end($fileExt));
			
			$allowed = array('jpg', 'jpeg', 'png', 'pdf');
			
			if (in_array($fileActualExt, $allowed)) {
				if ($fileError === 0) {
					if ($fileSiz < 1000000) {
						$fileNaneNew = uniqid('', true).".".$fileActualExt;
						$fileDestination = 'images/'.$fileNaneNew;
						move_uploaded_file($imageTname,$fileDestination);
						
					} else {
						echo "your file is too big";
					}	
				}else {
					echo "There was an error uploading your file!";
					
				}
				}
			
			
			$sql = "INSERT INTO items(age,brand,category,image,itemName,itemPrice,shippingPrice,discription) VALUE ('$age','$brand','$category','$image','$item_name','$price','$ship_price','$text')";
			$upload=mysqli_query($conn, $sql); //store the  submitted data into the database table : images
			
			
			
			$sql = "SELECT * FROM items ORDER BY id DESC LIMIT 1";
			
			$result = mysqli_query($conn, $sql);
			
			if(mysqli_num_rows($result) > 0){
				while($row = mysqli_fetch_assoc($result)){
					
					$total = $row['itemPrice'] + $row['shippingPrice'];
				
					echo "<div class='add-item'>";
					
					echo"<form action='ignore.php' method='post'>";
					
					echo"<br><br/>";
					echo"<h1>".$row['itemName']."</h1>";
					
						echo "<img src='images/".$row['image']."'width=350px height=350px>";
					
					echo "<h3>"."Item Code: ".$row['id']."</h3>";
					echo "<h3>"."Item Name: ".$row['itemName']."</h3>";
					echo "<h3>"."Item Price: ".$row['itemPrice']."</h3>";
					echo "<h3>"."Shipping Price: ".$row['shippingPrice']."</h3>";
					echo "<h3>"."Total Price: ".$total."</h3>";
					echo "<h3>"."Discription: "."<br/>"."<br/>".$row['discription']."</h3>";
					?>
					
					<input type="submit" id="submit" name="confirm" value="Confirm">
					<input type="submit" id="submit" name="$id" value="ignore">
					<?php
					echo"<br/>"."<br/>";
					echo"</form>";
				echo "</div>";
					echo"<br/>"."<br/>";
					
					
					
					}
					
				}
		
			
			else if(isset($_POST['ignore'])){
						$id=$_POST['id'];
						
					$delete=mysqli_query($conn,"DELETE FROM items WHERE ID='$id'");
					
						if($delete){
							echo "<script>alert('Data Insert Unsuccessfilly!')</script>";
						}
						
						header("refresh:5; url=add item.php");
					}

?>
		
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
</body>
</center>
</html>
