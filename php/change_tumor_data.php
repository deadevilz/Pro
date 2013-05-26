<?php
require('config.php');
require('checkPriority3.php');
if(isset($_POST['hn']))
{
	header('Content-Type: text/html; charset=utf-8');
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
	$category = mysql_real_escape_string($_POST['category']);
	$sub_category = mysql_real_escape_string($_POST['sub_category']);
	$status = mysql_real_escape_string($_POST['status']);

	if($category=="other") $category = mysql_real_escape_string($_POST['category_other']);
	if($sub_category=="other") $sub_category = mysql_real_escape_string($_POST['sub_category_other']);

	//echo "$slideno $diagnosis $location $date_biopsy $hn $name $age $sex $site $region_of_lesion $catagory $sub_catagory $status";
	$sql = "UPDATE  `tumor_conference`.`tumor_data`"; 
	$sql.= "SET `slideno`='$slideno' , `date_biopsy` = '$date_biopsy' , `diagnosis`='$diagnosis' , `location` = '$location' , `name` = '$name', `SEX`='$sex' ,";
	$sql.= "`age` = '$age' ,`site` = '$site' ,`region_of_lesion` = '$region_of_lesion' , `category` = '$category' , `sub_category` = '$sub_category',`status` = $status"; 
	$sql.= " WHERE  `tumor_data`.`hn` = '$hn';";
	
	$query=mysql_query($sql,$objConnect)or die($sql);
	if($query)
	{	
		//status1 change data success
		echo "<script>window.top.window.show_status('1');</script>";
	}
	else
	{	
		//status2 change data fail
		echo "<script>window.top.window.show_status('2');</script>";
	}

	$path_picture = "";
		for($i=0;$i<count($_FILES["file_picture"]["name"]);$i++)
		{
			if($_FILES["file_picture"]["name"][$i] != "")
			{	
				$dir = $_POST["picture_category"][$i];
				$sub_dir = $_POST["sub_picture_category"][$i];
				$real_name = $_FILES["file_picture"]["name"][$i];
				$saved_name = getDateTime()."_".$real_name;
				$saved_name = str_replace('/','-',$saved_name);
				$size_file = $_FILES["file_picture"]["size"][$i];
				$path = "../img/".$dir."/".$sub_dir."/".$saved_name;
				$count = countPathPic($hn,$objConnect)+1+$i;
				$path_picture .= "<a class=\"fancybox\" href=\"$path\" data-fancybox-group=\"$hn\" title=\"$count\">#$count</a>&nbsp;";
				
				//upload success
				if(move_uploaded_file($_FILES["file_picture"]["tmp_name"][$i],$path))
				{
					$sqlInsertPicAttach = "INSERT INTO `tumor_conference`.`picture_attachments` (`hn_user`, `saved_name`, `real_name`, `path` ,`size`, `category_picture`, `sub_category_picture`)";
					$sqlInsertPicAttach.= "VALUES ( '$hn', '$saved_name', '$real_name', '$path','$size_file', '$dir', '$sub_dir')";
					$queryInsertTumorCon = mysql_query($sqlInsertPicAttach,$objConnect);
					
					//status 3 insert picture success but insert data_picture fail
					if(!$queryInsertTumorCon) echo "<script>window.top.window.show_status('3');</script>";
						//echo "<script>alert('อัฟโหลดไฟล์สำเร็จ  ไฟล์ '+'$real_name'+'แต่ไม่เข้าฐานข้อมูล');</script>";

				}
				//upload fail
				else
				{
					//status 4 insert picture fail 
					echo "<script>window.top.window.show_status('4');</script>";
					//echo "<script>alert('อัฟโหลดไฟล์ไม่สำเร็จ  ไฟล์ '+'$real_name'+'ของคุณอาจจะใหญ่ไป');</script>";
				}
				
			}
		}
		//Insert picture_path
		if($path_picture!="")
		{
			$row = selectPathPic($hn,$objConnect);
			if($row=="")
			{
				$sqlInsertPicPath = "INSERT INTO `tumor_conference`.`picture_path` (`id`, `hn_picture`, `path_picture` ) VALUES (NULL, '$hn', '$path_picture');";
				$queryInsertPicPath = mysql_query($sqlInsertPicPath,$objConnect);
				//status 5 insert path picture fail
				if(!$queryInsertPicPath) echo "<script>window.top.window.show_status('5');</script>";
			}
			else if($row!="")
			{
				$path_picture = $row['path_picture'].$path_picture;
				$sqlUpdatePathPic = "UPDATE `picture_path` SET `path_picture`='$path_picture' WHERE `hn_picture`='$hn';";
				$quertUpdatePathPic = mysql_query($sqlUpdatePathPic,$objConnect);
				//status 5 insert path picture fail
				if(!$quertUpdatePathPic) echo "<script>window.top.window.show_status('5');</script>";
			}

			
		}

}
function countPathPic($hn,$objConnect)
{

	$row = selectPathPic($hn,$objConnect);
	if($row=="") return 0;
	else if($row!="") 
	{
		return substr_count($row['path_picture'],"#");
	}
	
}
function selectPathPic($hn,$objConnect)
{
	$sqlCheckDuplicate = "SELECT `path_picture` FROM `picture_path` WHERE `hn_picture`='$hn';";
	$queryCheckDuplicate = mysql_query($sqlCheckDuplicate,$objConnect);
	$row = mysql_fetch_assoc($queryCheckDuplicate);
	return $row;
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
