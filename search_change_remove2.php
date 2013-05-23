<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<title>Upload</title>
<meta http-equiv=Content-Type content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="../jQuery/jquery-ui-1.9.2.custom/css/redmond/jquery-ui-1.9.2.custom.min.css">
<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap-responsive.css">
<link rel="stylesheet" type="text/css" href="../fancyBox/source/jquery.fancybox.css?v=2.1.4" media="screen" />
<script type="text/javascript" src="../jQuery/jquery-ui-1.9.2.custom/js/jquery-1.8.3.js"></script>
<script type="text/javascript" src="../jQuery/jquery-ui-1.9.2.custom/js/jquery-ui-1.9.2.custom.min.js"></script>
<script type="text/javascript" src="../bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="../fancyBox/source/jquery.fancybox.js?v=2.1.4"></script>
<?php require('redirect_login.php'); ?>
</head>
<body>
	

	<div id="alertSuccess" class="alert alert-success" style="display:none;">
  		<button type="button" class="close" data-dismiss="alert">&times;</button>
  		<center><h3><strong>Success!</strong> การเปลี่ยนแปลงค่าสำเร็จ</h3></center>
	</div>

	<div id="alertError" class="alert alert-error" style="display:none;">
  		<button type="button" class="close" data-dismiss="alert">&times;</button>
  		<center><h3><strong>Error!</strong> การเปลี่ยนแปลงค่าไม่สำเร็จ</h3></center>
	</div>

	<div id="dialog"></div>

	

		<span class="well span3">
			<legend>Logout</legend>
			<input type="button" value="logout" class="btn" id="logout"/>
			<input type="button" value="Back" class="btn"  id="back"/>
		</span>
	
			<form action="#" method="POST" class="well span6" id="add_form"  name="add_form" enctype="multipart/form-data" >
				<legend>ค้นหา/เปลี่ยน/ลบ ข้อมูล</legend>
				<table>
					<tr>
						<td>
							<strong>ค้นหาตาม&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; </strong>
						</td>
						<td>
							<select name="select" id="select" class="span3">
								<option value="1">ทั้งหมด</option>
								<option value="2">SLIDE NO</option>
								<option value="3">HN</option>
								<option value="4">NAME</option>
								<option value="5">DIAGNOSIS</option>
								<option value="6">DATE BIOPSY</option>
								<option value="7">AGE</option>
								<option value="8">SEX</option>
								<option value="9">SITE</option>
								<option value="10">REGION OF LESION</option>
								<option value="11">LOCATION</option>
								<option value="12">CATEGORY TUMOR</option>
								<option value="13">SUB CATEGORY TUMOR</option>
							</select>
						</td>
					</tr>

					<tr class="input" style="display:none;" id="tr_name" >
						<td>
							<strong>NAME</strong>
						</td>
						<td>
							<span class="input-append">
								<input class="span3" id="name" name="name" type="text">
								<span class="add-on">สมชาย ดวงดี</span>
							</span>
						</td> 
					</tr>

					<tr class="input" style="display:none;" id="tr_slideno">
						<td>
							<strong>SLIDE NO</strong>
						</td>
						<td>
							<span class="input-append">
								<input class="span3" id="slideno" name="slideno" type="text">
								<span class="add-on">466491</span>
							</span>
						</td> 
					</tr>

					<tr class="input" style="display:none;" id="tr_hn" >
						<td>
							<strong>HN</strong>
						</td>
						<td>
							<span class="input-append">
								<input class="span3" id="hn" name="hn" type="text">
								<span class="add-on">75348-46</span>
							</span>
						</td> 
					</tr>

					<tr class="input" style="display:none;" id="tr_location" >
						<td>
							<strong>LOCATION</strong>
						</td>
						<td>
							<span class="input-append">
								<input class="span3" id="location" name="location" type="text">
								<span class="add-on">foot</span>
							</span>
						</td> 
					</tr>

					<tr class="input" style="display:none;" id="tr_diagnosis" >
						<td>
							<strong>DIAGNOSIS</strong>
						</td>
						<td>
							<span class="input-append">
								<input class="span3" id="diagnosis" name="diagnosis" type="text">
								<span class="add-on">OSAnecrosis 18%</span>
							</span>
						</td> 
					</tr>

					<tr class="input" style="display:none;" id="tr_region_of_lesion" >
						<td>
							<strong>REGION OF LESION</strong>
						</td>
						<td>
							<span class="input-append">
								<input class="span3" id="region_of_lesion" name="region_of_lesion" type="text">
								<span class="add-on">elbow</span>
							</span>
						</td> 
					</tr>

					<tr class="input" style="display:none;" id="tr_age">
						<td>
							<strong>AGE</strong>
						</td>
						<td>
							ตั้งแต่
							<span class="input-append">
							<input name="age1" type="number" class="span1" />
								<span class="add-on">10</span>
							</span>
							ถึง
							<span class="input-append">
							<input name="age2" type="number" class="span1" />
								<span class="add-on">20</span>
							</span>
						</td> 
					</tr>

					<tr class="input" style="display:none;" id="tr_date_biopsy1">
						<td>
							<strong>DATE BIOPSY</strong>
						</td>
						<td>
							ตั้งแต่
							<span class="input-append">
								<input name="date_biopsy1" type="text" class="span1 date_biopsy" />
							<span class="add-on">2013-05-12</span>
							</span>
						</td>
					</tr>

					<tr class="input" style="display:none;" id="tr_date_biopsy2">
						<td></td>
						<td>
							ถึง
							<span class="input-append">
								<input name="date_biopsy2" type="text" class="span1 date_biopsy" />
							<span class="add-on">2013-05-12</span>
							</span>
						</td>
					</tr>


					<tr class="input" style="display:none;" id="tr_category" >
						<td>
							<strong>CATEGORY TUMOR</strong>
						</td>
						<td>
							<select class="span3" name="category" id="category">
									<option value="benign">Benign - bone tumor</option>
			  						<option value="malignant">Malignant - bone tumor</option>
			  						<option value="benign_soft">Benign Soft - tissue tumor</option>
			  						<option value="soft_tissue_sarcoma">Soft tissue sarcoma</option>
			  						<option value="metastasis">Metastasis</option>
			  						<option value="other">Other..</option>
							</select>
						</td> 
					</tr>

					<tr class="input" style="display:none;" id="tr_category_other" >
						<td>
							<strong>CATEGORY OTHER</strong>
						</td>
						<td>
							<span class="input-append">
								<input class="span3" id="category_other" name="category_other" type="text">
								<span class="add-on">other</span>
							</span>
						</td> 
					</tr>

					<tr class="input" style="display:none;" id="tr_sub_category" >
						<td>
							<strong>SUB CATEGORY TUMOR</strong>
						</td>
						<td>
							<select class="span4" name="sub_category" id="sub_category">
								<option value="Osteoma">Benign bone tumor - Osteoma</option>
								<option value="Osteoid">Benign bone tumor - Osteoid</option>
								<option value="Osteoblastoma">Benign bone tumor - Osteoblastoma</option>
								<option value="Osteoblastorma,aggressive">Benign bone tumor - Osteoblastorma,aggressive</option>
								<option value="Osteochondroma">Benign bone tumor - Osteochondroma</option>
								<option value="Osteochondromatosis">Benign bone tumor - Osteochondromatosis</option>
								<option value="Chondroma">Benign bone tumor - Chondroma</option>
								<option value="Chondroma,juxtacortical">Benign bone tumor - Chondroma,juxtacortical</option>
  								<option value="Chondromatosis">Benign bone tumor - Chondromatosis</option>
  								<option value="Chondroblastoma">Benign bone tumor - Chondroblastoma</option>
  								<option value="Chondromyxoid fibroma">Benign bone tumor - Chondromyxoid fibroma</option>
  								<option value="Fibroma">Benign bone tumor - Fibroma</option>
  								<option value="Desmaplastic fibroma">Benign bone tumor - Desmaplastic fibroma</option>
  								<option value="Benogn Fibrous gistiocytoma">Benign bone tumor - Benogn Fibrous gistiocytoma</option>
  								<option value="GCT">Benign bone tumor - GCT</option>
  								<option value="Lipoma">Benign bone tumor - Lipoma</option>
  								<option value="Hemangioma">Benign bone tumor - Hemangioma</option>
  								<option value="ABC">Benign bone tumor - ABC</option>
  								<option value="UBC">Benign bone tumor - UBC</option>
  								<option value="Ossifying fibroma">Benign bone tumor - GCT</option>
  								<option value="Fibrous dysplasis">Benign bone tumor - Fibrous dysplasis</option>
  								<option value="Eosinophilip granularma">Benign bone tumor - Eosinophilip granularma</option>
  								<option value="Bone infect">Benign bone tumor - Bone infect</option>
  								<option value="Brown tomor">Benign bone tumor - Brown tomor</option>
  								<option value="Osteomyelitis">Benign bone tumor - Osteomyelitis</option>
  								<option value="Intraosseous ganglion">Benign bone tumor - Intraosseous ganglion</option>
  									
  								<option value="Ostrocarcoma">Malignant bone tumor - Ostrocarcoma</option>
  								<option value="Ostrocarcoma,Chondroblastic">Malignant bone tumor - Ostrocarcoma,Chondroblastic</option>
  								<option value="Ostrocarcoma,Fibroblastic">Malignant bone tumor - Ostrocarcoma,Fibroblastic</option>
  								<option value="Ostrocarcoma,Talangiectatic">Malignant bone tumor - Ostrocarcoma,Talangiectatic</option>
  								<option value="Ostrocarcoma,small cell">Malignant bone tumor - Ostrocarcoma,small cell</option>
  								<option value="Ostrocarcoma,juxtacortical">Malignant bone tumor - Ostrocarcoma,juxtacortical</option>
  								<option value="Ostrocarcoma,in pager">Malignant bone tumor - Ostrocarcoma,in pager</option>
  								<option value="Chondrosarcoma">Malignant bone tumor - Chondrosarcoma</option>
  								<option value="Chondrosarcoma,juxtacortical">Malignant bone tumor - Chondrosarcoma,juxtacortical</option>
  								<option value="Chondrosarcoma,myxiod">Malignant bone tumor - Chondrosarcoma,myxiod</option>
  								<option value="Chondrosarcoma,Dediff">Malignant bone tumor - Chondrosarcoma,Dediff</option>
  								<option value="Chondrosarcoma,mesenchymal">Malignant bone tumor - Chondrosarcoma,mesenchymal</option>
  								<option value="Ewing sarcoma">Malignant bone tumor - Ewing sarcoma</option>
  								<option value="FibrosarcomaMalignant">Malignant bone tumor - FibrosarcomaMalignant</option>
  								<option value="Fibrous histiocytetoma">Malignant bone tumor - Fibrous histiocytetoma</option>
  								<option value="GCT,malignant">Malignant bone tumor - GCT,malignant</option>
  								<option value="Plasmacytoma">Malignant bone tumor - Plasmacytoma</option>
  								<option value="Multiple myeloma">Malignant bone tumor - Multiple myeloma</option>
  								<option value="Lymphoma">Malignant bone tumor - Lymphoma</option>
  								<option value="Lymphoma,momHodgin">Malignant bone tumor - Lymphoma,momHodgin</option>
  								<option value="Liprosarcoma">Malignant bone tumor - Liprosarcoma</option>
  								<option value="Chordoma">Malignant bone tumor - Chordoma</option>
  								<option value="Hemagioendothelioma">Malignant bone tumor - Hemagioendothelioma</option>
  								<option value="Hemangiopericytoma">Malignant bone tumor - Hemangiopericytoma</option>
  								<option value="Adamantinoma">Malignant bone tumor - Adamantinoma</option>
  								
  								<option value="Superficial lipoma">Benign Soft tissue tumor - Superficial lipoma</option>
  								<option value="Deep lipoma">Benign Soft tissue tumor - Deep lipoma</option>
  								<option value="Organized hematoma">Benign Soft tissue tumor - Organized hematoma</option>
  								<option value="Schwannoma">Benign Soft tissue tumor - Schwannoma</option>
  								<option value="Fibromatosis">Benign Soft tissue tumor - Fibromatosis</option>
  								<option value="Myxoma">Benign Soft tissue tumor - Myxoma</option>
  								<option value="Hemangioma">Benign Soft tissue tumor - Hemangioma</option>
  								<option value="Ganglion">Benign Soft tissue tumor - Ganglion</option>
  								<option value="leiomyoma">Benign Soft tissue tumor - leiomyoma</option>
  								<option value="GCT of tendonsheath">Benign Soft tissue tumor - GCT of tendonsheath</option>
  								<option value="Glomus tumor">Benign Soft tissue tumor - Glomus tumor</option>
  								<option value="Rhabdomyoma">Benign Soft tissue tumor - Rhabdomyoma</option>
  								<option value="Pigmented uillo nudular synovitis">Benign Soft tissue tumor - Pigmented uillo nudular synovitis</option>
  								<option value="Synovial chondromatisis">Benign Soft tissue tumor - Synovial chondromatisis</option>
  								<option value="Neurofibromatosis">Benign Soft tissue tumor - Neurofibromatosis</option>
  								<option value="Benign Fibrous histiocytoma">Benign Soft tissue tumor - Benign Fibrous histiocytoma</option>
  								<option value="Pseudotumor">Benign Soft tissue tumor - Pseudotumor</option>
  								<option value="Tumoral calcinosis">Benign Soft tissue tumor - Tumoral calcinosis</option>
  								<option value="Neurofibroma">Benign Soft tissue tumor - Neurofibroma</option>

  								<option value="Malignant Fibrous histiocytoma">Soft tissue sarcoma - Malignant Fibrous histiocytoma</option>
  								<option value="Angiosarcoma">Soft tissue sarcoma - Angiosarcoma</option>
  								<option value="Liprosarcoma">Soft tissue sarcoma - Liprosarcoma</option>
  								<option value="Dermatofibrosarcoma protuberans">Soft tissue sarcoma - Dermatofibrosarcoma protuberans</option>
  								<option value="Synovial sarcoma">Soft tissue sarcoma - Synovial sarcoma</option>
  								<option value="Malignant Peripheral nerve sheath">Soft tissue sarcoma - Malignant Peripheral nerve sheath</option>
  								<option value="Fibrosarcoma">Soft tissue sarcoma - Fibrosarcoma</option>
  								<option value="Clear cell sarcoma">Soft tissue sarcoma - Clear cell sarcoma</option>
  								<option value="Hemangiopericytoma">Soft tissue sarcoma - Hemangiopericytoma</option>
  								<option value="Alveolar soft part sarcoma">Soft tissue sarcoma - Alveolar soft part sarcoma</option>
  								<option value="Rhabdomyosarcoma">Soft tissue sarcoma - Rhabdomyosarcoma</option>
  								<option value="Extraskeletal OSA">Soft tissue sarcoma - Extraskeletal OSA</option>
  								<option value="Leiomyosarcoma">Soft tissue sarcoma - Leiomyosarcoma</option>
  								<option value="Extraskeletal CHSA">Soft tissue sarcoma - Extraskeletal CHSA</option>
  								<option value="Epithelioid sarcoma">Soft tissue sarcoma - Epithelioid sarcoma</option>
  								
  								<option value="unknown">Metastasis - unknown</option>
  								<option value="Breast">Metastasis - Breast</option>
  								<option value="Lung">Metastasis - Lung</option>
  								<option value="Thyroid">Metastasis - Thyroid</option>
  								<option value="Prostate">Metastasis - Prostate</option>
  								<option value="Renal">Metastasis - Renal</option>
  								<option value="GI">Metastasis - GI</option>
  								<option value="Liver">Metastasis - Liver</option>
  								<option value="ENT">Metastasis - ENT</option>
  								
  								<option value="other">Other..</option>
							</select>
						</td> 
					</tr>

					<tr class="input" style="display:none;" id="tr_sub_category_other" >
						<td>
							<strong>SUB CATEGORY OTHER</strong>
						</td>
						<td>
							<span class="input-append">
								<input class="span3" id="sub_category_other" name="sub_category_other" type="text">
								<span class="add-on">other</span>
							</span>
						</td> 
					</tr>

					<tr class="input" style="display:none;" id="tr_sex" >
						<td>
							<strong>SEX</strong>
						</td>
						<td>
								<select class="span2" name="sex" id="sex">
									<option value="none">none</option>
			  						<option value="Male">Male</option>
			  						<option value="Female">Female</option>
								</select>
						</td> 
					</tr>

					<tr class="input" style="display:none;" id="tr_site" >
						<td>
							<strong>SITE</strong>
						</td>
						<td>
								<select class="span2" name="site" id="site">
									<option value="none">none</option>
			  						<option value="Left">Left</option>
			  						<option value="Right">Right</option>
								</select>
						</td> 
					</tr>


					<tr>
						<td>
							<strong>เรียงตาม</strong>
						</td>
						<td>
							<select name="order" class="span2">
								<option value="1">ข้อมูลเข้า</option>
								<option value="2">SLIDE NO</option>
								<option value="3">HN</option>
								<option value="4">NAME</option>
								<option value="5">DIAGNOSIS</option>
								<option value="6">DATE BIOPSY</option>
								<option value="7">AGE</option>
								<option value="8">SEX</option>
								<option value="9">SITE</option>
								<option value="10">REGION OF LESION</option>
								<option value="11">LOCATION</option>
								<option value="12">CATEGORY TUMOR</option>
								<option value="13">SUB CATEGORY TUMOR</option>
							</select>
						</td>
					</tr>
				</table>
				<input type="submit" value="ค้นหา" class="btn btn-primary" name="submit"/>
			</form>
		

	<ul>
		<span class="well span3" >
			<legend>Username</legend>
			<h4 id="username"><?php echo $_SESSION['username'];?></h4>
		</span>
	</ul>


	<p id="container" class="container-fluid">
<?php
if(isset($_POST['submit']))
{	require('config.php');
	$sql = "SELECT hn,slideno,date_biopsy,name,age,SEX,site,region_of_lesion as ROL,location,diagnosis,category,sub_category,path_picture as Picture ";
	$sql .= "FROM `tumor_data` LEFT JOIN `picture_path` ON hn=hn_picture";
	$sql .= StringWhere();
	$sql .= StringOrderBy();
	$query = mysql_query($sql,$objConnect) or die($sql);
	echo "<table class=\"table table-bordered table-hover\"><tr class='info'><td><strong>#</strong></td>";
			$fieldAr = array();
			for($i=0; $i<mysql_num_fields($query);$i++)
			{
				$field = mysql_fetch_field($query);
				$fieldAr[$i]=$field->name;
				echo "<td><strong>{$field->name}</strong></td>\n";
			}
			echo "<td><strong>Change</strong></td>\n<td><strong>Remove</strong></td>\n";
			$j=0;
			while($row = mysql_fetch_assoc($query))
			{	$j++;

				//input display show
				echo "<tr id='rowText$j'>\n";
				echo "<td>$j</td>\n";
				$k=-1;
				foreach($row as $cell)
				{	
					$k++;
					
					//if($k!=13)
					echo "<td id='$fieldAr[$k]Text$j'>$cell</td>\n";
				}
				//picture 
				
				//btn ChangeAndRemove
				echo "<td><input type='button' value='Change' name='Change' class='change btn btn-warning btn-small' row='$j' /></td>\n";
				echo "<td><input type='button' value='Remove' name='Remove' class='remove btn btn-danger btn-small' row='$j' /></td>\n";
				echo "</tr>\n";

				///input display:none
				echo "<tr style=\"display:none;\" id='rowChange$j'>\n<td>$j</td>\n";

				$i=-1;
				foreach($row as $cell)
				{
					$i++;
					if($fieldAr[$i]=='hn')
					{
						echo "<td id='$fieldAr[$i]$j' id='$fieldAr[$i]$j'>$cell</td>";
					}
					elseif($fieldAr[$i]=='site')
					{	$printSite = ["<td><select id='site$j' class='site'><option value='none' selected='selected'>none</option><option value='Left'>Left</option><option value='Right'>Right</option>\n",
								 	  "<td><select id='site$j' class='site'><option value='none'>none</option><option value='Left' selected='selected'>Left</option><option value='Right'>Right</option>\n",
									  "<td><select id='site$j' class='site'><option value='none'>none</option><option value='Left'>Left</option><option value='Right' selected='selected'>Right</option>\n"	
									 ];
						echo $printSite[$cell=='Right' ? 2 : $cell=='Left' ? 1 : 0 ];
					}
					elseif($fieldAr[$i]=='SEX')
					{	$printSEX = ["<td><select id='SEX$j' class='sex'><option value='none' selected='selected'>none</option><option value='Male'>Male</option><option value='Female'>Female</option>\n",
									 "<td><select id='SEX$j' class='sex'><option value='none'>none</option><option selected='selected' value='Male'>Male</option><option value='Female'>Female</option>\n",
									 "<td><select id='SEX$j' class='sex'><option value='none'>none</option><option value='Male'>Male</option><option selected='selected'  value='Female'>Female</option>\n"
									];
						echo $printSEX[$cell=='Female' ? 2 : $cell =='Male' ? 1 : 0];
					}
					elseif($fieldAr[$i]=='Picture')
					{
						echo "<td>$cell</td>";
					}
					else
					{	
						echo "<td><input type='text' value='$cell' name='$fieldAr[$i]$j' id='$fieldAr[$i]$j' class='span2 $fieldAr[$i]' style='width:100;height:30;' /></td>\n";
					}
				}
				echo "<td><input type='button' value='Save' name='save' data-loading-text=\"Saving...\" class='save btn btn-success btn-small' row='$j' style='width:63;height:26;'/></td>\n";
				echo "<td><input type='button' value='Cancel' name='Cancel' class='cancel btn btn-primary btn-small' row='$j' style='width:63;height:26;'/></td>\n";
				echo "</tr>\n";
			}
			echo "</table>";
}
	function StringWhere()
	{	####
		$stringWhere = "";
		switch($_POST["select"])
		{
			case '2': $slideno = mysql_real_escape_string($_POST["slideno"]);  $stringWhere .= " WHERE slideno='$slideno' "; break;
			case '3': $hn = mysql_real_escape_string($_POST["hn"]); $stringWhere .= " WHERE hn='$hn' "; break;
			case '4': $name = mysql_real_escape_string($_POST['name']); $stringWhere .= " WHERE name='$name' "; break;
			case '5': $diagnosis = mysql_real_escape_string($_POST['diagnosis']); $stringWhere .= " WHERE diagnosis='$diagnosis' "; break;
			case '6': $date_biopsy1 = mysql_real_escape_string($_POST['date_biopsy1']); 
				$date_biopsy2 = mysql_real_escape_string($_POST['date_biopsy2']);
				if($date_biopsy1!=""&&$date_biopsy2!="") $stringWhere .= " WHERE date_biopsy >= '$date_biopsy1' AND date_biopsy <= '$date_biopsy2'"; 
				else if($date_biopsy1!=""&&$date_biopsy2=="") $stringWhere .= " WHERE date_biopsy = '$date_biopsy1'";
				else if($date_biopsy1==""&&$date_biopsy2!="") $stringWhere .= " WHERE date_biopsy = '$date_biopsy2'";
				else if($date_biopsy1==""&&$date_biopsy2=="") $stringWhere .= " WHERE date_biopsy = '0000-00-00' ";
				break;
			case '7': $age1 = mysql_real_escape_string($_POST['age1']); $age2 = mysql_real_escape_string($_POST['age2']); 
				if($age1!=""&&$age2!="") $stringWhere .= " WHERE age >= '$age1' AND age <= '$age2' "; 
				else if($age1!=""&&$age2=="") $stringWhere .= " WHERE age = '$age1' ";
				else if($age1==""&&$age2!="") $stringWhere .= " WHERE age = '$age2' ";
				else if($age1==""&&$age2=="") $stringWhere .= " WHERE age = '0' ";
				break;
			case '8': $sex = mysql_real_escape_string($_POST['sex']); $stringWhere .= " WHERE sex='$sex' "; break;
			case '9': $site = mysql_real_escape_string($_POST['site']); $stringWhere .= " WHERE site='$site' "; break;
			case '10': $region_of_lesion = mysql_real_escape_string($_POST['region_of_lesion']); $stringWhere .= " WHERE region_of_lesion='$region_of_lesion' "; break;
			case '11': $location = mysql_real_escape_string($_POST['location']); $stringWhere .= " WHERE location = '$location' "; break;
			case '12': $category = mysql_real_escape_string($_POST['category']); 
				if($category=="other") $category = mysql_real_escape_string($_POST['category_other']);
				$stringWhere .= " WHERE category = '$category' ";
				break;
			case '13': $sub_category = mysql_real_escape_string($_POST['sub_category']);
				if($sub_category=="other") $sub_category = mysql_real_escape_string($_POST['sub_category_other']);
				$stringWhere .= " WHERE sub_category = '$sub_category' ";
				break;
		}
		return $stringWhere;
	}
	function StringOrderBy()
	{
		$stringOrderBy = "";
		switch($_POST['order'])
		{
			case '2': $stringOrderBy = " ORDER BY slideno "; break;
			case '3': $stringOrderBy = " ORDER BY hn "; break;
			case '4': $stringOrderBy = " ORDER BY name "; break;
			case '5': $stringOrderBy = " ORDER BY diagnosis "; break;
			case '6': $stringOrderBy = " ORDER BY date_biopsy "; break;
			case '7': $stringOrderBy = " ORDER BY age "; break;
			case '8': $stringOrderBy = " ORDER BY sex "; break;
			case '9': $stringOrderBy = " ORDER BY site "; break;
			case '10': $stringOrderBy = " ORDER BY region_of_lesion "; break;
			case '11': $stringOrderBy = " ORDER BY location "; break;
			case '12': $stringOrderBy = " ORDER BY category "; break;
			case '13': $stringOrderBy = " ORDER BY sub_category "; break;
		}
		return $stringOrderBy;

	}
?>
</p>

<!--<script type="text/javascript" src="../jQuery/jquery.js"></script>-->
<!--<script type="text/javascript" src="../jQuery/jquery-ui/js/jquery-ui-1.10.3.custom.min.js"></script>-->
<script type="text/javascript" src="../js/btnLogoutBack.js"></script>
<script type="text/javascript" src="../js/Search_Add_Remove.js"></script>
<script type="text/javascript">
	$("#select").change(function(){
		$(".input").hide();
		switch($("#select").val())
		{
			case '2': $("#tr_slideno").show(); break;
			case '3': $("#tr_hn").show(); break;
			case '4': $("#tr_name").show(); break;
			case '5': $("#tr_diagnosis").show(); break;
			case '6': $("#tr_date_biopsy1").show(); $("#tr_date_biopsy2").show(); break;
			case '7': $("#tr_age").show(); break;
			case '8': $("#tr_sex").show(); break;
			case '9': $("#tr_site").show(); break;
			case '10': $("#tr_region_of_lesion").show(); break;
			case '11': $("#tr_location").show(); break;
			case '12': $("#tr_category").show(); break;
			case '13': $("#tr_sub_category").show(); break;
		}

	});
	$("#category").change(function(){
		$("#tr_category_other").hide();
		if($("#category").val()=='other') $("#tr_category_other").show();
	});
	$("#sub_category").change(function(){
		$("#tr_sub_category_other").hide();
		if($("#sub_category").val()=="other") $("#tr_sub_category_other").show();
	});
</script>
</body>
</html>