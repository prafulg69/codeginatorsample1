<html>
<head>
<style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 50%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}


}
</style>
</head>
<body>

<table>
 <tr>
    <th>s_id</th>
    <th>fname</th>
    <th>lname</th>
    <th>email</th>
    <th>addr</th>
    <th>mobile_no</th>
    <th>zipcode</th>
    <th>city</th>
    <th>state</th>
    <th>country</th>
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
    <td><?php echo  $v->zipcode; ?></td>
    <td><?php echo  $v->city; ?></td>
    <td><?php echo  $v->state; ?></td>
    <td><?php echo  $v->country; ?></td>    
 </tr>
<?php
}
  ?>
 </table>
 

</body>
</html>


