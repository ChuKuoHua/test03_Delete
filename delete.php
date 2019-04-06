<?php
	$con = mysqli_connect('localhost', 'root', '','txt');
	mysqli_query($con,"set names utf8");

	if(!$con){
		die('error:'.mysqli_error());
	}
	
	if(isset($_GET['del'])){
		$del_id =$_GET['del'];

		$sql = "DELETE FROM client WHERE id ='$del_id'";
		$result = mysqli_query($con,$sql);
		$con ->close();
		header("Location: text_03.php"); 
	}

?>