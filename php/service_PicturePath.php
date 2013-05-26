<?php
	header("Conntent-Type: application/json");
	if(isset($_POST['hn']))
	{
		require('config.php');
		$hn = mysql_real_escape_string($_POST['hn']);
		$sql = "SELECT `path` FROM `picture_attachments` WHERE `hn_user`='$hn'";
		$query = mysql_query($sql);
		$json_data = array();
		while($row = mysql_fetch_assoc($query)) 
		{	
			$json_arr = ["path"=>$row['path']];	
			array_push($json_data,$json_arr);
		}
		$json = json_encode($json_data);
		echo $json;
	}

?>