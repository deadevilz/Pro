<?php

if(isset($_POST['picture_path']))
{
	header('Content-Type: text/html; charset=utf-8');
	require("config.php");
	require('checkPriority3.php');
	$picture_path = mysql_real_escape_string($_POST['picture_path']);
	unlink($picture_path);
	$sqlSelectHN = "SELECT `hn_user` FROM `picture_attachments` WHERE `path`='$picture_path';";
	$querySelectHN = mysql_query($sqlSelectHN,$objConnect)or die("ไม่สามารถระบุ HN ได้");
	$hn;
	while($row = mysql_fetch_assoc($querySelectHN))
	{
		$hn = $row['hn_user'];
	}

	$sqlDeletePic = "DELETE FROM `picture_attachments` WHERE `path`='$picture_path';";
	$queryDeletePic = mysql_query($sqlDeletePic,$objConnect)or die("ไม่สามารถลบรูปได้");

	$sqlSelectPathPic = "SELECT `path` FROM `picture_attachments` WHERE `hn_user`='$hn';";
	$querySelectPathPic = mysql_query($sqlSelectPathPic,$objConnect)or die("ไม่สามารถระบุ Path ทั้งหมดได้");
	$path_all = "";
	$i=0;
	while ($row = mysql_fetch_assoc($querySelectPathPic)) 
	{
		$i++;
		$path = $row['path'];
		$path_all .= "<a class='fancybox' href='$path' data-fancybox-group='$hn' title='$i'>#$i</a>&nbsp;";
	}

	$sqlUpdatePicPath = "UPDATE `picture_path` SET `path_picture`= \"$path_all\" WHERE `hn_picture` = '$hn' ;";
	$queryUpdatePicPath = mysql_query($sqlUpdatePicPath,$objConnect)or die("ไม่สามารถอัฟเดช Path ทั้งหมดได้ \n $sqlUpdatePicPath");
	echo "การลบรูปสำเร็จ";

}


?>