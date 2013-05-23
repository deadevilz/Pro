<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
	<title>Musculoskeletal Tumor Conference</title>
	<meta http-equiv="Content-Language" content="th"> 
	<meta http-equiv=Content-Type content="text/html; charset=utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="../jQuery/jquery-ui-1.9.2.custom/css/redmond/jquery-ui-1.9.2.custom.min.css">
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.css">
	<script type="text/javascript" src="../jQuery/jquery-ui-1.9.2.custom/js/jquery-1.8.3.js"></script>
	<script type="text/javascript" src="../jQuery/jquery-ui-1.9.2.custom/js/jquery-ui-1.9.2.custom.min.js"></script>
	
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
			<legend>พิมพ์แบบฟอร์ม tumor conference</legend>
			<form id="form">
				<p><strong>Date Biopsy</strong></p>
				<p>
					ตั้งแต่ <input type="text" id="date1" name="date1" class="date_picker span2"/> 
					ถึง  <input type="text" id="date2" name="date2" class="date_picker span2"/> 
				</p>
				<p><input type="button" class="btn btn-primary" id="report" value="report" /></p>
			</form>
			<div id="res"></div>
		</span>
	
	<ul>
		<span class="well span4" >
			<legend>Username</legend>
			<h3><?php echo $_SESSION['username'];?></h3>
		</span>
	</ul>
	
	<script type="text/javascript" src="../js/redirect.js"></script>
	<script type="text/javascript" src="../js/btnLogoutBack.js"></script>
	<script type="text/javascript">

		$(".date_picker").datepicker({ dateFormat: 'yy-mm-dd' });

		$("#report").click(function(){
			$("#res").text('กำลังประมวลผล');
			$.ajax({
				type:'POST',
				url:'create_word.php',
				data:$("#form").serialize(),
				success:function(data)
				{
					$("#res").html(data);
				}
			}).error(function(){
				alert("Server ไม่ตอบสนอง");
			});
		});
	</script>
</body>
</html>