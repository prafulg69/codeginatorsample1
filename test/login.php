
<?php
$connection = mysql_connect("localhost", "root", ""); 
$db = mysql_select_db("ccmt", $connection); 
if(isset($_POST['submit'])){ 
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$password = $_POST['pass'];
{

$query = mysql_query("insert into ccmt(fname, lname, email, pass) values ('$fname','$lname', '$email', '$password')");
echo "<br/><br/><span>Data Inserted successfully...!!</span>";
}
{
$querry = mysql_query()
}
?>
