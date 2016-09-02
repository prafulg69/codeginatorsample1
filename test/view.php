<?php
require("db.php");
$id =$_REQUEST['ID'];

$result = mysqli_query($conn,"SELECT * FROM cc WHERE ID  = '$id'");
$test = mysqli_fetch_array($result);
if (!$result) 
		{
		die("Error: Data not found..");
		}
				$fname=$test['fname'] ;
				$lname= $test['lname'] ;					
				$email=$test['email'] ;
				$pass=$test['pass'] ;

if(isset($_POST['save']))
{	
	$fname_save = $_POST['fname'];
	$lname_save = $_POST['lname'];
	$email_save = $_POST['email'];
	$Pass_save = $_POST['pass'];

	mysqli_query($conn,"UPDATE cc SET FIRSTNAME ='$fname_save', LASTNAME ='$lname_save',
		 Emaill ='$email_save',Password ='$pass_save' WHERE id = '$id'");
				
	echo "Saved!";
	
	header("Location: reg.php");			
}
mysqli_close($conn);
?>
<!DOCTYPE html>
<html>
<head>
<title>phptaab.blogspot.in</title>
</head>

<body>
<form method="post">
<table>
	<tr>
		<td>FIRSTNAME:</td>
		<td><input type="text" name="fname" value="<?php echo $fname ?>"/></td>
	</tr>
	<tr>
		<td>LASTNAME</td>
		<td><input type="text" name="lname" value="<?php echo $lname ?>"/></td>
	</tr>
	<tr>
		<td>Email</td>
		<td><input type="email" name="email" value="<?php echo $email ?>"/></td>
	</tr>
	<tr>
		<td>Password</td>
		<td><input type="password" name="password" value="<?php echo $pass ?>"/></td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td><input type="submit" name="save" value="save" /></td>
	</tr>
</table>

</body>
</html>
