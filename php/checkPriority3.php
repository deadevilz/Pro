<?php
	require('config.php');
	$garbage_timeout = 1200; // 3600 seconds = 60 minutes = 1 hour
	ini_set('session.gc_maxlifetime', $garbage_timeout);
	session_start(); 
	if(isset($_SESSION['username'])&&isset($_SESSION['password'])&&isset($_SESSION['priority']))
	{
		if($_SESSION['priority']<3)
			die("username นี้สิทธิ์ไม่ถึง");
	}
	else
	{
		header('Location: login.php');
	}
?>