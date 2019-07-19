<?php 
//Linking the configuration file
require 'config.php';
	


			if(isset($_POST['confirm'])){
		
			echo "<script>alert('Data Insert Successfilly!')</script>";
						
						
						header("refresh:0; url=add item.php");
					}
					

			else if(isset($_POST['$id'])){
					$sql = "SELECT * FROM items ORDER BY id DESC LIMIT 1";
			
			$result = mysqli_query($conn, $sql);
			
			if(mysqli_num_rows($result) > 0){
				while($row = mysqli_fetch_assoc($result)){
					
					$id = $row['id'];
					}
					
				
					
					$delete=mysqli_query($conn,"DELETE FROM items WHERE ID='$id'");
					
						if($delete){
							echo "<script>alert('Data Insert Unsuccessfilly!')</script>";
						}
			}
						
						header("refresh:0; url=add item.php");
					}
					
					?>