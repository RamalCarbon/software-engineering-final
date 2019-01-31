<?php
	$con= mysqli_connect('127.0.0.1','root','');
	
	if(!$con){
		echo 'Not Connected To Server';
	}
	
	if (!mysqli_select_db($con,'spotdb')){
		echo 'Database Not Selected';
	}
	
	$s1=$_POST['s1'];
	$s2=$_POST['s2'];
	$bev=$_POST['beverage'];
	$side=$_POST['sdish'];
	$Rveg=$_POST['Rveg'];
	$Sveg=$_POST['Sveg'];
	$Psalad=$_POST['Psalad'];
	
	$sql= "INSERT INTO Orders (Selection1,Selection2,Beverages,Side,Rveg,Sveg,Psalad) VALUES ('$s1','$s2','$bev','$side','$Rveg','$Sveg','$Psalad')";

	if(!mysqli_query($con,$sql)){
		echo 'Not Inserted';
	}
	else{
		echo 'Inserted';
	}
	
?>
