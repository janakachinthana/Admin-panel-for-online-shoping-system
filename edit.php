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
	
	</div>
		<?php
	
		
		if(isset($_POST['edit'])){
		$id=$_POST['id'];
		$select=mysqli_query($conn,"SELECT * FROM items where id='$id'");
		$row=mysqli_fetch_assoc($select);
		
		?> 	 
			
				<div class="add-item">
				<br/>
				<h1 id="j"><?=$row['itemName']; ?></h1>
				<br/>
				<form action="" method="post" enctype="multipart/form-data">
				<div class="div-item">
					<img src="images/<?php echo $row['image']; ?>" style="width:350px;height:350px">
				</div>
				<input type="text" id="x" name="id" value="<?=$row['id']; ?>" readonly>
				<br/>
				<input type="text" id="xxx" name="age" value="<?=$row['age']; ?>">
				<br/>
				<input type="text" id="xxx" name="brand" value="<?=$row['brand']; ?>">
				<br/>
				<input type="text" id="xxx" name="category" value="<?=$row['category']; ?>">
				<br/>
				<input type="text" id="xxx" name="itemName" value="<?=$row['itemName']; ?>">
				<br/>
				<input type="text" id="xxx" name="itemPrice" value="<?=$row['itemPrice']; ?>">
				<br/>
				<input type="text" id="xxx" name="shippingPrice" value="<?=$row['shippingPrice']; ?>">
				<br/>
				<textarea 
				name="discription"
				id="xxx"
                rows = "5"
                cols = "50"pattern= "[a-z]*\{ser\}[a-z]*"><?=$row['discription']; ?></textarea>
				<br/><br/>
				
				<input type="submit" name="update" value="update">
				<br/><br/>
				<br/>
				</form>
					</div>
				<br/><br/>
				
				<?php }?>
				
				<?php 
					if(isset($_POST['update'])){
					$id=$_POST['id'];
					$age=$_POST['age'];
					$brand=$_POST['brand'];
					$category=$_POST['category'];
					$image=$_FILES['image']['name'];
					$itemName=$_POST['itemName'];
					$itemPrice=$_POST['itemPrice'];
					$shippingPrice=$_POST['shippingPrice'];
					$discription=$_POST['discription'];
					
				if(isset($_FILES['image']['name']) && ($_FILES['image']['name']!="")){
						
					$size=$_FILES['image']['size'];
					$temp=$_FILES['image']['tmp_name'];
					$type=$_FILES['image']['type'];
					$image_name=$_FILES['image']['name'];
				
				
				move_uploaded_file($temp,"images/$image_name");
				}
					
				$update=mysqli_query($conn,"update items set age='$age',brand='$brand',category='$category',itemName='$itemName',itemPrice='$itemPrice',shippingPrice='$shippingPrice',discription='$discription' where id='$id'");
				
				if($update){

					echo "<script>alert('Data Update Successfilly!')</script>";
					}
				else{  "<script>alert('Data Update Unsuccessfilly!')</script>";
					
				}	
					header("refresh:0; url=search.php");
					}
					
		
					?>
					
						<?php 
					if(isset($_POST['delete'])){
						$id=$_POST['id'];
						
					$delete=mysqli_query($conn,"DELETE FROM items WHERE ID='$id'");
					
						if($delete){
							echo "<script>alert('Data Deleted Successfilly!')</script>";
						}
						else{
							echo "<script>alert('Data Deleted Unsuccessfilly!')</script>";
						}
						header("refresh:0; url=search.php");
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
</center>
</body>	
</html>
