<?php
  include("db.php");  

	$id =$_REQUEST['id'];
	
	
	// sending query
	mysqli_query($conn,"DELETE FROM cc WHERE id = '$id'");
	
	echo "DELETE FROM cc WHERE id = '$id'" ;
	die ();	
	
	header("Location: reg.php");
?> 