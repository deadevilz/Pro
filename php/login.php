<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
	<title>Log in</title>
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.css">
</head>
<body>

	<center>
		<p>
		<form class="well span6">
				<p><img src="../bootstrap/img/h2-login.jpg" alt="Smiley face" height="100" width="150"></p>
				<p>Username : <input type="text" class="span3" placeholder="username..." name="username" id="username"/> </p>
				<p>Password : <input type="password" class="span3" placeholder="password..." name="password" id="password"/></p>
				<div> 
					<input id="login" type="button" value="log in" class="btn btn-primary">
					<span id="message"></span>
				</div>
		</form>
	</p>
</center>
	<script type="text/javascript" src="../jQuery/jquery.js"></script>
	<script type="text/javascript" src="../js/ajax_check_login.js"></script>
</body>
</html>
<?php
	session_start();
	session_destroy();
?>

