<html>
<head>

<style>

input[type=submit] {
    width:50%;
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
    width: 50%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}


div {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
}

</style>


</head>
<body>
<form action="<?php echo site_url('index.php/MainController/searchdata'); ?>" method="post">
<br/>
student id <br/>
<input type ='text' name='s_id' id='s_id' placeholder='search by student id...'><br/>
<input type='submit' >
</form >
</body> 
</html>