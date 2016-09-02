<html>
<head>
	<title>STUDENTS DEATIL</title>
	<style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 35%;
}
/*
td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
*/
input[type=submit] {
    width: 100%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}
input[type=text], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
input[type=number], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

h2 {
  
  position: center;
}
.h2{
  background-color: #4CAF50;
  width: 35%;
  min-height: 5%;  
}

div {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
}
</style>
</head>
<body>
<form action="<?php echo site_url('index.php/MainController/addUser'); ?>" method="post">
	<table>
		   <div class="h2"> <h2>Personal Detail</h2></div>
         <tr><td><label for="fname">First name:</label>
		<input id="fname" class="input" name="fname" type="text" value="First name"  /></td></tr>
		<tr><td><label for="lname">Last name:</label>
		<input id="lname" class="input" name="lname" type="text" value="Last name"  /></td></tr>
		<tr><td><label for="email">Your email:</label>
		<input id="email" class="input" name="email" type="text" value="Email"  /></td></tr>
		<tr><td><label for="Mobile Number">Mobile Number:</label>
		<input id="mobile_no"class="input" name="mobile_no" type="number" value="mobile_no" /></td></tr>
		<tr><td><label for="addr">Address:</label>
		<input id="adddr" class="input" name="addr" type="text" value="Address"  /></td></tr>
		<tr><td><label for="City">City:</label>
		<input id="City" class="input" name="city" type="text" value="City" /></td></tr>
		<tr><td><label for="State">State:</label>
		<input id="State" class="input" name="state" type="text" value="State" /></td></tr>
		<tr><td><label for="zipcode">Zipcode:</label>
		<input id="zipcode" class="input" name="zipcode" type="text" value="zipcode" /></td></tr>
		<tr><td><label for="country">country:</label>
		<input id="country" class="input" name="country" type="text" value="country">
    course <br> <select name ="course_name[]" size="3" multiple>
      <?php
foreach ($cource as $v)
{
   ?><option value="<?php echo $v->cource_id;?>"><?php echo $v->cource_name;?></option>
<?php 
}

 ?></select>
    <tr><td><label >Skills:</label>
	<tr><td><input id="skills[]"class="input" name="skills[]" type="text" value="skills"  /></td></tr><br />
    <tr><td><input id="skills[]"class="input" name="skills[]" type="text" value="skills"  /></td></tr><br />
    

    







      
       <tr><td><input id="submit_button" type="submit" value="submit" /></td></tr>
      </table>
</form>						
</body>
</html>






