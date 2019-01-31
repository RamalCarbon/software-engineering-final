<?php
	$con= mysqli_connect('127.0.0.1','root','');
	
	if(!$con){
		echo 'Not Connected To Server';
	}
	
	if (!mysqli_select_db($con,'spotdb')){
		echo 'Database Not Selected';
	}
	
	$fn=$_POST['fname'];
	$ln=$_POST['lname'];
	$un=$_POST['uname'];
	$pw=$_POST['pword'];
	$em=$_POST['email'];
	$tp=$_POST['tele'];
	
	$sql= "INSERT INTO Users (First_Name,Last_Name,User_Name,Password,Email,Phone_Number) VALUES ('$fn','$ln','$un','$pw','$em','$tp')";

	if(!mysqli_query($con,$sql)){
		echo 'Not Inserted';
	}
	else{
		echo 'Inserted';
	}
	
?>
