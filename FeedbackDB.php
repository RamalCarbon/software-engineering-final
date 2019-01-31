<?php
	$con= mysqli_connect('127.0.0.1','root','');
	
	if(!$con){
		echo 'Not Connected To Server';
	}
	
	if (!mysqli_select_db($con,'spotdb')){
		echo 'Database Not Selected';
	}
	
	$review=$_POST['review'];

	
	$sql= "INSERT INTO Customer Reviews (Feedback) VALUES ('$review')";

	if(!mysqli_query($con,$sql)){
		echo 'Not Inserted';
	}
	else{
		echo 'Inserted';
	}
	
?>
