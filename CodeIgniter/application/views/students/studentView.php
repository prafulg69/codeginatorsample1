<html>
<head>
<style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 20%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

input[type=button] {
    width:10%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=button]:hover {
    background-color: #45a049;
}
}
</style>
</head>
<body>

<table>
 <tr>
    <th>sid</th>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Email</th>
    <th>Address</th>
    <th>Mobile</th>
    <th>Edit</th>
    <th>Delet</th>
   <!-- <th>Zipcode</th>
    <th>City</th>
    <th>Atate</th>
    <th>Country</th>
    <th></th>-->
  </tr>
  <?php
  foreach($val as $v)
  {
    ?>
  <tr>
   <td><?php echo  $v->s_id; ?></td>
   <td><?php echo  $v->fname; ?></td>
    <td><?php echo  $v->lname; ?></td>
    <td><?php echo  $v->email; ?></td>
    <td><?php echo  $v->addr; ?></td>
    <td><?php echo  $v->mobile_no; ?></td>
   
    <td><a href="<?php echo site_url('CodeIgniter/index.php/MainController/editview/'.$v->s_id); ?>">Edit</a></td>
        
    <td><a href="<?php echo site_url('students/studentsView/delete_data/'); ?>">Delete</a></td>
   



 </tr>
 <?php
  }
 ?>
 </table><br />
 
<a href="<?php echo "MainController/addStudentView" ; ?>"><input id="submit_button" type="button" value="ADD" /></a><br />
<a href="<?php echo "MainController/studentdata" ; ?>"><input id="submit_button" type="button" value="SEARCH" /></a>

</body>
</html>


