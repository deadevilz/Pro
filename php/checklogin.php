<?php
	require('config.php');
	$garbage_timeout = 1200; // 3600 seconds = 60 minutes = 1 hour
	ini_set('session.gc_maxlifetime', $garbage_timeout);
	session_start();
	session_destroy();
	if(isset($_POST['username'])&&isset($_POST['password']))
	{
		$username = mysql_real_escape_string($_POST['username']);
		$password = mysql_real_escape_string($_POST['password']);
		$password = md5($password);
		$sql = "SELECT `priority` FROM `login` WHERE username='$username' AND password='$password'";
		$query = mysql_query($sql,$objConnect);
		if($row = mysql_fetch_array($query))
		{
			session_start();
			$_SESSION['username'] = $username;
			$_SESSION['password'] = $password;
			$_SESSION['priority'] = $row['priority'];
			echo "Login Success";
		}
		else
		{
			echo "Wrong Username or Password";
		}
	}
?>