<html>
<head>
<title>Login</title>
</head>
<body>
<h1>Login</h1>
<?php echo validation_error(); ?>
<?php echo form_open('Login/checklogin'); ?>
email:<br/>
<input type="email" name="email"/><br/>
pass:<br/>
<input type="password" name="pass"/><br/>
<input type="submit"name="submit" value="submit">
</body>
</html>

