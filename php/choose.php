<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
	<title>Musculoskeletal Tumor Conference</title>
	<meta http-equiv="Content-Language" content="th"> 
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.css">
	<?php require('redirect_login.php'); ?>
</head>
<body>

	<ul>
		<span class="well span4">
			<legend>Logout</legend>
			<input type="submit" value="logout" class="btn" id="logout"/>
		</span>
	</ul>
	
		<span class="well span5">
			<legend>Choose Action</legend>
			<center>
				<p class="style4"><input type="button" value="ค้นหาข้อมูล" class="btn btn-large btn-info" id="redirect_search" /></p>
				<p class="style4"><input type="button" value="เพิ่มข้อมูลคนไข้" class="btn btn-large btn-info" id="redirect_add_tumor_data"/></p>				
				<p class="style4"><input type="button" value="พิมพ์แบบฟอร์ม tumor conference" class="btn btn-large btn-info" id="redirect_print"/></p>
			</center>
		</span>
	
	<ul>
		<span class="well span4" >
			<legend>Username</legend>
			<h3><?php echo $_SESSION['username'];?></h3>
		</span>
	</ul>
	

	<script type="text/javascript" src="../jQuery/jquery.js"></script>
	<script type="text/javascript" src="../js/redirect.js"></script>
	<script type="text/javascript" src="../js/btnLogoutBack.js"></script>
</body>
</html>