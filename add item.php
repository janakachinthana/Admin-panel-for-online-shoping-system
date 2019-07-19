<?php 
//Linking the configuration file
require 'config.php';
?>	


<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>add item/details page</title>
	<link href ="style/add item.css" rel= "stylesheet" type= "text/css">
	<script script src="home.js"></script>
</head>

<center>
<body background="monkimage.jpg"/>
	<div class="maindiv">
	<div class="maindiv1">
		<header class = "header">
		<center>
			<h1 class="h1-1">TiddleWink Online Kids Accessories Shop <br/> Welcome to Admin Panel
			</h1>

		<div class="profile">
		<img class="img1"></div>
		<h4 class="profile-name">hellow <br/> Mr. xxxx...</h4>
		<nav class="nav1">
		<ul class="nav1-ul">
			<li class="list1"><a href="homep.html">Home</a></li>
			<li class="list1"><a href="category.php">Category</a></li>
			<li class="list1"><a class="active">Add Details</a></li>
			</ul> 
			</nav>
			<br/>
		</center>
	
		
	</header>
	</div>

	<div class="add-item">
		<form  id="f1" method="post" action="add.php" enctype="multipart/form-data">
			<h3 class="select-file">
			</br>
			</br>
	

	<?php 
     //TODO get weekdays from weekdays table and asign the results to  $result array.(2 lines)
		$sql="SELECT * FROM category;";
		$result = mysqli_query($conn, $sql);
		
		 if ($result->num_rows > 0)
	?>
		

			Select Item Category: <select name="category"  required>
			<?php
				while($row = $result->fetch_assoc()) {

				//TODO Add option value, name accordingly (same line)
					$category=$row['category'];
					$categoryId=$row['id'];
			
					echo"<option value = '$category'>$category </option>";
			}?>
			</select><br/><br/>
			
	<?php 
     //TODO get weekdays from weekdays table and asign the results to  $result array.(2 lines)
		$sql="SELECT * FROM age;";
		$result = mysqli_query($conn, $sql);
		
		 if ($result->num_rows > 0)
	?>
			Select Item Age: <select name="age" required>
			<?php
				while($row = $result->fetch_assoc()) {
				//TODO Add option value, name accordingly (same line)
					$age=$row['gap'];
					$ageId=$row['id'];
					
					echo"<option value = '$age'>$age </option>";
			}?>
			
			</select><br/><br/>
				
	<?php
	//TODO get weekdays from weekdays table and asign the results to  $result array.(2 lines)
		$sql="SELECT * FROM brand;";
		$result = mysqli_query($conn, $sql);
		
		 if ($result->num_rows > 0)
	?>
			Select Item Brand: <select name="brand" required>
			<?php	
				while($row = $result->fetch_assoc()) {
				//TODO Add option value, name accordingly (same line)
					$name=$row['name'];
					$nameId=$row['id'];
					
					echo"<option value = '$name'>$name </option>";
			}?>		
			</select><br/><br/>
			
			Select an item photo:<input class="file1" type="file" name="image" required>
			<br/><br/>
			
			Item Name<p id="name"><input id="name1" name="item_name" type="text" size="50" maxlength="100" value="" required
			pattern="[a-zA-Z]+( ?[a-zA-Z]+){5}" title="You can enter the value with upercase or lowercase or both only"><br/></p>
			
			Item price<p id="item"><input id="price1" name="price" type="number" size="5" maxlength="6" value=""required 
			pattern="[0-9]"><br/></p>
			
			ship price<p id="shiping"><input id="shipPrice1" name="ship_price" type="number" size="5" maxlength="6" value=""required><br/></p>
			
		
			
			<br/>
			Item discription<br/>
			<p id="discrip">
			<textarea 
				name="text"
				id = "discrip1"
                rows = "5"
                cols = "50"pattern= "[a-z]*\{ser\}[a-z]*">Your text here</textarea></p><br/>
				
			<input class= "su1" id="su1" name="submit" type="submit" value="Submit"></p>
		
			</h3>
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
</div></center>

	
 
 
 
 