<?php
	header("Conntent-Type: application/json");
	if(isset($_POST['hn']))
	{	require('config.php');
		$hn = mysql_real_escape_string($_POST['hn']);
		$sql = "SELECT hn,slideno,date_biopsy,name,age,SEX,site,region_of_lesion as ROL,location,diagnosis,category,sub_category,path_picture as Picture ";
  		$sql .= "FROM `tumor_data` LEFT JOIN `picture_path` ON hn=hn_picture WHERE hn='$hn';";
		//echo "$sql";
		$query = mysql_query($sql,$objConnect) or die("sql error");
		while ($row=mysql_fetch_array($query)) 
		{
			//echo var_dump($row);
			$json_data[]=array(
				"hn"=>$row['hn'],
				"slideno"=>$row['slideno'],
				"date_biopsy"=>$row['date_biopsy'],
				"name"=>$row['name'],
				"age"=>$row['age'],
				"SEX"=>$row['SEX'],
				"site"=>$row['site'],
				"ROL"=>$row['ROL'],
				"location"=>$row['location'],
				"diagnosis"=>$row['diagnosis'],
				"category"=>$row['category'],
				"sub_category"=>$row['sub_category'],
				"picture"=>$row['Picture']
			);
		}
	
	$json = json_encode($json_data);
	echo $json;
	}

?>