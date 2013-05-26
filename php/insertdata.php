<html>
<head>
<title>Upload</title>
<meta http-equiv=Content-Type content="text/html; charset=utf-8">
</head>
<body>

<?php
	require('config.php');
	require('checkPriority3.php');
	
	if(isset($_POST['slideno']))
	{
		
		$slideno = mysql_real_escape_string($_POST['slideno']);
		$diagnosis = mysql_real_escape_string($_POST['diagnosis']);
		$location = mysql_real_escape_string($_POST['location']);
		$date_biopsy = mysql_real_escape_string($_POST['date_biopsy']);
		$hn = mysql_real_escape_string($_POST['hn']);
		$name = mysql_real_escape_string($_POST['name']);
		$age = mysql_real_escape_string($_POST['age']);
		$sex = mysql_real_escape_string($_POST['sex']);
		$site = mysql_real_escape_string($_POST['site']);
		$region_of_lesion = mysql_real_escape_string($_POST['region_of_lesion']);
		$location = mysql_real_escape_string($_POST['location']);
		$category = mysql_real_escape_string($_POST['category']);
		$sub_category = mysql_real_escape_string($_POST['sub_category']);
		$status = mysql_real_escape_string($_POST['status']);
		echo "$site";
		checkSlidno($slideno);
		checkHN($hn);
		checkName($name);
		

		$path_picture = "";
		for($i=0;$i<count($_FILES["file_picture"]["name"]);$i++)
		{
			if($_FILES["file_picture"]["name"][$i] != "")
			{	$dir = $_POST["picture_category"][$i];
				$sub_dir = $_POST["sub_picture_category"][$i];
				$real_name = $_FILES["file_picture"]["name"][$i];
				$saved_name = getDateTime()."_".$real_name;
				$saved_name = str_replace('/','-',$saved_name);
				$size_file = $_FILES["file_picture"]["size"][$i];
				$path = "../img/".$dir."/".$sub_dir."/".$saved_name;
				$count = $i+1;
				$path_picture .= "<a class=\"fancybox\" href=\"$path\" data-fancybox-group=\"$hn\" title=\"$count\">#$count</a>&nbsp;";
				
				//upload success
				if(move_uploaded_file($_FILES["file_picture"]["tmp_name"][$i],$path))
				{
					$sqlInsertPicAttach = "INSERT INTO `tumor_conference`.`picture_attachments` (`hn_user`, `saved_name`, `real_name`, `path` ,`size`, `category_picture`, `sub_category_picture`)";
					$sqlInsertPicAttach.= "VALUES ( '$hn', '$saved_name', '$real_name', '$path','$size_file', '$dir', '$sub_dir')";
					$queryInsertTumorCon = mysql_query($sqlInsertPicAttach,$objConnect);
					if(!$queryInsertTumorCon) echo "<script>alert('อัฟโหลดไฟล์สำเร็จ  ไฟล์ '+'$real_name'+'แต่ไม่เข้าฐานข้อมูล');</script>";

				}
				//upload fail
				else
				{
					echo "<script>alert('อัฟโหลดไฟล์ไม่สำเร็จ  ไฟล์ '+'$real_name'+'ของคุณอาจจะใหญ่ไป');</script>";
				}
				
			}
		}
		//Insert picture_path
		if($path_picture!="")
		{
			$sqlInsertPicPath = "INSERT INTO `tumor_conference`.`picture_path` (`id`, `hn_picture`, `path_picture` ) VALUES (NULL, '$hn', '$path_picture');";
			$queryInsertPicPath = mysql_query($sqlInsertPicPath,$objConnect);
		}

		
		//Insert tumor_data
		if($category=="other") $category = mysql_real_escape_string($_POST['category_other']);
		if($sub_category=="other") $sub_category = mysql_real_escape_string($_POST['sub_category_other']);
		$sql = "INSERT INTO `tumor_conference`.`tumor_data` (`slideno`, `date_biopsy`, `hn`, `name`, `age`,`SEX`, `site`, `region_of_lesion`, `location`, `diagnosis`, `category`, `sub_category`, `status`)";
		$sql .="VALUES ('$slideno', '$date_biopsy', '$hn', '$name', '$age','$sex', '$site', '$region_of_lesion', '$location', '$diagnosis', '$category', '$sub_category', '$status');";
		$query = mysql_query($sql,$objConnect);
		if($query)
		{
			echo "<script>window.top.window.show_status('9');</script>";
		}
		else
		{
			echo "<script>window.top.window.show_status('10');</script>";
		}
	}
	function checkHN($hn)
	{
		if(trim($hn)==="")
		{	
			echo "<script>window.top.window.show_status('2');</script>";
			die('ช่อง HN ไม่ได้ใส่ค่า');
		}

	}
	function checkslidno($slideno)
	{
		if(trim($slideno)==="")
		{	
			echo "<script>window.top.window.show_status('1');</script>";
			die('ช่อง SLIDENO ไม่ได้ใส่ค่า');
		}
	}
	function checkName($name)
	{
		if(trim($name)==="")
		{	
			echo "<script>window.top.window.show_status('3');</script>";
			die('ช่อง NAME ไม่ได้ใส่ค่า');
		}
	}
	function RandomString($length)
	{
		return substr(str_shuffle('ABCDEFGHIJKLMNOPQRSTUVWXYZ23456789ABCDEFGHIJKLMNOPQRSTUVWXYZ23456789'),0,$length);
	}
	function getDateTime()
	{
		$date = new DateTime();
		$dateFormat = $date->format('Y-m-d');
		return $dateFormat;
	}

?>
</body>
</html>