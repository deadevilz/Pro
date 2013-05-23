<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
	<title></title>
	<meta http-equiv='Content-Type' content='Type=text/html; charset=utf-8'>
</head>
<body>
<?php
header("Content-type: text/html; charset=utf-8");
if(isset($_POST['date1'])&&isset($_POST['date2']))
{	date_default_timezone_set('Asia/Bangkok');
	require_once '../PHPword/PHPWord.php';
	require("config.php");

	$date1 = mysql_real_escape_string($_POST['date1']);
	$date2 = mysql_real_escape_string($_POST['date2']);

	//echo $now = getNow();
	//echo $monthdate1 = getDayMonthYear($date1);
	//echo $monthdate2 = getDayMonthYear($date2);
	
	
	
	

	// New Word Document
	$PHPWord = new PHPWord();

	// New portrait section
	$section = $PHPWord->createSection();


	$sectionStyle = $section->getSettings();
	$sectionStyle->setLandscape();

	$PHPWord->addFontStyle('HeaderRStyle', array('name'=>'Angsana New','bold'=>true,'size'=>24));
	$PHPWord->addParagraphStyle('HeaderPStyle', array('align'=>'center', 'spaceAfter'=>100));

	$PHPWord->addFontStyle('RStyle', array('name'=>'Angsana New','size'=>14));
	$PHPWord->addParagraphStyle('PStyle', array('spaceAfter'=>100));
	// Add text elements

	$section->addText('MUSCULOSKELETAL TUMOR CONFERENCE :Orthopaedics: Phramongkutklao Hospital', 'HeaderRStyle', 'HeaderPStyle');
	
	$head = getStringHead($date1,$date2);
	$section->addText($head, 'HeaderRStyle', 'HeaderPStyle');

	

	$category = ["benign","malignant","benign_soft","soft_tissue_sarcoma","metastasis"];
	$categoryShow = ["PRIMARY BENIGN BONE TUMOR","PRIMARY MALIGNANT BONE TUMOR","BENIGN SOFT TISSUE TUMOR","SOFT TISSUE TUMOR","METASTASIS"];
	for($i=0;$i<5;$i++)
	{	
		$sql = "SELECT date_biopsy,hn,name,age,SEX,site,region_of_lesion,location,diagnosis,slideno FROM tumor_data WHERE".getStrWhere($date1,$date2)." AND category='$category[$i]';";
		$query = mysql_query($sql,$objConnect)or die($sql);
		if($row = mysql_fetch_assoc($query))
		{	
			$section->addText('		CATAGORY TUMOR:		'.$categoryShow[$i], 'RStyle', 'PStyle');
			$table = $section->addTable();
			$table->addRow();
			$pixelCell = [2500,2000,6000,1000,1000,1500,5000,2000,4000,4000];
			$table->addCell($pixelCell[0])->addText('DATE BIOPSY', 'RStyle', 'PStyle');
			$table->addCell($pixelCell[1])->addText('HN', 'RStyle', 'PStyle');
			$table->addCell($pixelCell[2])->addText('NAME', 'RStyle', 'PStyle');
			$table->addCell($pixelCell[3])->addText('AGE', 'RStyle', 'PStyle');
			$table->addCell($pixelCell[4])->addText('SEX', 'RStyle', 'PStyle');
			$table->addCell($pixelCell[5])->addText('SITE', 'RStyle', 'PStyle');
			$table->addCell($pixelCell[6])->addText('REGION OF LESION', 'RStyle', 'PStyle');
			$table->addCell($pixelCell[7])->addText('LOCATION', 'RStyle', 'PStyle');
			$table->addCell($pixelCell[8])->addText('DIAGNOSIS', 'RStyle', 'PStyle', 'RStyle', 'PStyle');
			$table->addCell($pixelCell[9])->addText('SLIDE NO.', 'RStyle', 'PStyle');
			
			$table->addRow();
			$table->addCell($pixelCell[0])->addText($row['date_biopsy'],'RStyle', 'PStyle');
			$table->addCell($pixelCell[1])->addText($row['hn'], 'RStyle', 'PStyle');
			$table->addCell($pixelCell[2])->addText($row['name'], 'RStyle', 'PStyle');
			$table->addCell($pixelCell[3])->addText($row['age'], 'RStyle', 'PStyle');
			$table->addCell($pixelCell[4])->addText($row['SEX'], 'RStyle', 'PStyle');
			$table->addCell($pixelCell[5])->addText($row['site'], 'RStyle', 'PStyle');
			$table->addCell($pixelCell[6])->addText($row['region_of_lesion'], 'RStyle', 'PStyle');
			$table->addCell($pixelCell[7])->addText($row['location'], 'RStyle', 'PStyle');
			$table->addCell($pixelCell[8])->addText($row['diagnosis'], 'RStyle', 'PStyle', 'RStyle', 'PStyle');
			$table->addCell($pixelCell[9])->addText($row['slideno'], 'RStyle', 'PStyle');
			
			
			while($rowin = mysql_fetch_assoc($query)) 
			{
				$table->addRow();
				
				$table->addCell($pixelCell[0])->addText($rowin['date_biopsy'], 'RStyle', 'PStyle');
				$table->addCell($pixelCell[1])->addText($rowin['hn'], 'RStyle', 'PStyle');
				$table->addCell($pixelCell[2])->addText($rowin['name'], 'RStyle', 'PStyle');
				$table->addCell($pixelCell[3])->addText($rowin['age'], 'RStyle', 'PStyle');
				$table->addCell($pixelCell[4])->addText($rowin['SEX'], 'RStyle', 'PStyle');
				$table->addCell($pixelCell[5])->addText($rowin['site'], 'RStyle', 'PStyle');
				$table->addCell($pixelCell[6])->addText($rowin['region_of_lesion'], 'RStyle', 'PStyle');
				$table->addCell($pixelCell[7])->addText($rowin['location'], 'RStyle', 'PStyle');
				$table->addCell($pixelCell[8])->addText($rowin['diagnosis'], 'RStyle', 'PStyle', 'RStyle', 'PStyle');
				$table->addCell($pixelCell[9])->addText($rowin['slideno'], 'RStyle', 'PStyle');
				echo $rowin['name'];
			}
		}
	}

	// Save File
	$objWriter = PHPWord_IOFactory::createWriter($PHPWord, 'Word2007');
	$save = ' ../Word/'.getNow().'.docx';
	$objWriter->save($save);
	
}
function randomString($len)
{
	$rand = substr(str_shuffle('ABCDEFGHIJKLMNOPQRSTUVWXYZ23456789'),0,$len);
}
function getStrWhere($date1,$date2)
{
	$stringWhere = "";
	if($date1!=""&&$date2!="") $stringWhere .= " date_biopsy >= '$date1' AND date_biopsy <= '$date2'"; 
	else if($date1!=""&&$date2=="") $stringWhere .= " date_biopsy = '$date1'";
	else if($date1==""&&$date2!="") $stringWhere .= " date_biopsy = '$date2'";
	else if($date1==""&&$date2=="") 
	{
		$date = new DateTime();
		$dateFormat = $date->format('Y-m-d');
		$stringWhere .= " date_biopsy = '$dateFormat' ";
	}
	return $stringWhere;
}
function getStringHead($date1,$date2)
{
	$head = '';	
	if($date1!=""&&$date2!="") $head = 'วันที่ '.getNow().' ห้อง สุปรีชา  ผู้ป่วยตั้งแต่ '.getDayMonthYear($date1).' ถึง '.getDayMonthYear($date2);
	else if($date1!=""&&$date2=="")  $head = 'วันที่ '.getNow().' ห้อง สุปรีชา  ผู้ป่วยเฉพาะวันที่ '.getDayMonthYear($date1);
	else if($date1==""&&$date2!="")  $head = 'วันที่ '.getNow().' ห้อง สุปรีชา  ผู้ป่วยเฉพาะวันที่ '.getDayMonthYear($date2);
	else if($date1==""&&$date2=="")  $head = 'วันที่ '.getNow().' ห้อง สุปรีชา  ผู้ป่วยเฉพาะวันที่ '.getNowDayMonthYear();
	return $head;
}
function getDayMonthYear($Strdate)
{
	$monthThai = ['ม.ค.','ก.พ.','มี.ค.','เม.ย.','พ.ค.','มิ.ย.','ก.ค.','ส.ค.','ก.ย.','ต.ค.','พ.ย.','ธ.ค.'];
	$date = new DateTime($Strdate);
	return $date->format('j')." ".$monthThai[$date->format('n')-1]." ".($date->format('y')+43);
}
function getNowDayMonthYear()
{
	$monthThai = ['ม.ค.','ก.พ.','มี.ค.','เม.ย.','พ.ค.','มิ.ย.','ก.ค.','ส.ค.','ก.ย.','ต.ค.','พ.ย.','ธ.ค.'];
	$date = new DateTime();
	return $date->format('j')." ".$monthThai[$date->format('n')-1]." ".($date->format('y')+43);
}
function getNow()
{
	$monthThai = ['ม.ค.','ก.พ.','มี.ค.','เม.ย.','พ.ค.','มิ.ย.','ก.ค.','ส.ค.','ก.ย.','ต.ค.','พ.ย.','ธ.ค.'];
	$date = new DateTime();
	return $date->format('j')." ".$monthThai[$date->format('n')-1]." ".($date->format('y')+43)." เวลา ".$date->format('g.i a');
}
?>
</body>
</html>
