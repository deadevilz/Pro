<?php
require('config.php');
if(isset($_POST['hn']))
{
	
	$hn = mysql_real_escape_string($_POST['hn']);
	
	//echo "$slideno $diagnosis $location $date_biopsy $hn $name $age $sex $site $region_of_lesion $catagory $sub_catagory $status";
	$sqlDeleteTumorConference = "DELETE FROM `tumor_conference`.`tumor_data` WHERE `tumor_data`.`hn` = '$hn';";

	$sqlSelectPathPicture = "SELECT `picture_attachments`.`path` FROM `tumor_conference`.`picture_attachments` WHERE `picture_attachments`.`hn_user` = '$hn';";
	$query4 = mysql_query($sqlSelectPathPicture,$objConnect);
	while($row = mysql_fetch_assoc($query4))
	{
		foreach($row as $cell)
		  unlink($cell); 
	}

	$sqlDeletePicturePath = "DELETE FROM `tumor_conference`.`picture_path` WHERE `picture_path`.`hn_picture` = '$hn';";
	$sqlDeletePictureAttach = "DELETE FROM `tumor_conference`.`picture_attachments` WHERE `picture_attachments`.`hn_user` = '$hn';";
	
	$query=mysql_query($sqlDeleteTumorConference,$objConnect)or die($sqlDeleteTumorConference);
	$query2=mysql_query($sqlDeletePictureAttach,$objConnect)or die($sqlDeletePictureAttach);
	$query3=mysql_query($sqlDeletePicturePath,$objConnect)or die($sqlDeletePicturePath);
	if($query)
	{	
		echo "การลบข้อมูลสำเร็จ";
	}
	else
	{	
		echo "การลบข้อมูลผิดพลาด";
	}
}


?>
