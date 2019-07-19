<?php
$server="localhost";
$user_name="root";
$password="";
$database="tiddlewink";

$conn=new mysqli($server,$user_name,$password,$database);
//check the connecction

if($conn->connect_error){

	die("Connection Failed : " . $conn->connect_error);
}

?>