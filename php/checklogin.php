<?php
	require('config.php');
	session_start();
	session_destroy();
	if(isset($_POST['username'])&&isset($_POST['password']))
	{
		$username = mysql_real_escape_string($_POST['username']);
		$password = mysql_real_escape_string($_POST['password']);
		$password = md5($password);
		$sql = "SELECT * FROM `login` WHERE username='$username' AND password='$password'";
		$query = mysql_query($sql,$objConnect);
		if($row = mysql_fetch_array($query))
		{
			session_start();
			$_SESSION['username'] = $username;
			echo "Login Success";
		}
		else
		{
			echo "Wrong Username or Password";
		}
	}
?>