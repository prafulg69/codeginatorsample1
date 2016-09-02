<html>
<head>
	<title>STUDENTS DEATIL</title>
	
    <style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 25%;
}

td, th {
    border: 2px solid green;
    text-align: left;
    padding: 8px;
}
h2 {
  background-color: #4CAF50;
  width: 25%;
}
tr:nth-child(even) {
    background-color: #dddddd;
}

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
</style>
</head>
<body>
	<table>
<h2>Student Personal Detail</h2>
<?php 
       		echo form_open('MainController/addStudentView');
       		/*foreach ($student as $v)
       		{
       			?>
       			<tr>
       			<tr><td><?php echo form_input("Student ID ", $v->s_id); ?></td></tr>
       		
       			<tr><td><?php echo form_input('Student ID', $v->fname); ?></td></tr>
       	       
       	        <tr><td><?php echo form_input('Student ID', $v->lname); ?></td></tr>
       	       
       	        <tr><td><?php echo form_input('Student ID', $v->email); ?></td></tr>
       	       
       	        <tr><td><?php echo form_input('Student ID', $v->addr); ?></td></tr>
       	       
       	        <tr><td><?php echo form_input('Student ID', $v->mobile_no); ?></td></tr>
       	       
       	        <tr><td><?php echo form_input('Student ID', $v->zipcode); ?></td></tr>
       	       </tr>
       	    <?php    
       		} */
            

            foreach ($student as $v)
       	    {
				?>
       			<tr>
       			<tr><td><?php echo form_input("Student ID ", $v->s_id); ?></td></tr>
       		
       			<tr><td><?php echo form_input('Student ID', $v->fname); ?></td></tr>
       	       
       	        <tr><td><?php echo form_input('Student ID', $v->lname); ?></td></tr>
       	       
       	        <tr><td><?php echo form_input('Student ID', $v->email); ?></td></tr>
       	       
       	        <tr><td><?php echo form_input('Student ID', $v->addr); ?></td></tr>
       	       
       	        <tr><td><?php echo form_input('Student ID', $v->mobile_no); ?></td></tr>
       	       
       	        <tr><td><?php echo form_input('Student ID', $v->zipcode); ?></td></tr>
       	       </tr>
       	    <?php    
       		}
             
              foreach ($skills as $v) 
              {
              	?>
              	<tr>
                <tr><td><?php echo form_input('Student ID', $v->skills_name); ?></td></tr>
       			<tr><td><?php echo form_input('Student ID', $v->skills_id); ?></td></tr>
       	        
       	  <?php
       	   	
       	   	}
		 
/*
		      foreach ($cource as $v) 
              {
              	?>
              	<tr>
                <tr><td><?php echo form_input('Student ID', $v->cource_name); ?></td></tr>
       			<tr><td><?php echo form_input('Student ID', $v->cource_deatil); ?></td></tr>
       	        
       	  <?php
       	   	
       	   	}*/
?>
</table>					
</body>
</html>