<html>
<head>
</head>

<body>
<form method="post">
<table>

	<tr>
		<td>FIRSTNAME</td>
		<td><input type="text" name="fname" id="fname"/></td>
	</tr>
	<tr>
		<td>LASTNAME</td>
		<td><input type="text" name="lname" id="lname"/></td>
	</tr>
	<tr>
		<td>EMAIL</td>
		<td><input type="email" name="email" id="email"/></td>
	</tr>
	<tr>
		<td>PASSWORD</td>
		<td><input type="password" name="pass" id="pass"/></td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td><input type="submit" name="submit" value="submit" /></td>
	</tr>
</table>
<?php
if (isset($_POST['submit']))
	{	   
	include 'db.php';
	
			 		$fname=$_POST["fname"] ;
					$lname= $_POST['lname'] ;					
					$email=$_POST['email'] ;
					$password=$_POST['pass'] ;
												
		 mysqli_query($conn,"INSERT INTO cc (fname,lname,email,pass) VALUES ('$fname','$lname','$email','$password')"); 
				
				
	        }
?>
</form>
<table border="1">
	
			<?php
			include("db.php");
			
				
			$result=mysqli_query($conn,"SELECT * FROM cc");
			
			while($test = mysqli_fetch_array($result))
			{
				$id = $test['id'];	
				echo "<tr align='center'>";	
				echo"<td><font color='black'>" .$test['id']."</font></td>";
				echo"<td><font color='black'>" .$test['fname']."</font></td>";
				echo"<td><font color='black'>". $test['lname']. "</font></td>";
				echo"<td><font color='black'>". $test['email']. "</font></td>";
				echo"<td><font color='black'>". $test['pass']. "</font></td>";	
				echo"<td> <a href ='view.php?id=$id'>Edit</a>";
				echo"<td> <a href ='del.php?ìd=$id'>Delete</a>";
									
				echo "</tr>";

			}
			mysqli_close($conn);
			?>
</table>
</body>
</html>