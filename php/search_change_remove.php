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
<script type="text/javascript" src="../jQuery/jquery-ui-1.10.3.custom/js/jquery-1.9.1.js"></script>
<script type="text/javascript" src="../jQuery/jquery-ui-1.10.3.custom/js/jquery-ui-1.10.3.custom.js"></script>
<script type="text/javascript" src="../bootstrap/js/bootstrap-filestyle.min.js"></script>
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
								<input name="date_biopsy1" id="date_biopsy" type="text" class="span1 date_biopsy" />
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
	

	<!---  -->
<div id="dialog-form" title="Create new user" style="display:none;">
  <form action="change_tumor_data.php" method="POST" class="well span8" id="change_form"  name="change_form" enctype="multipart/form-data">
			<iframe id="iframe_target" name="iframe_target" src="#" style="width:0;height:0;border:0px solid #fff;"></iframe>

			<legend>Change data</legend>
			
			<table id="table">
					<tr>
						<td>
							<span class="span_slideno">
		  						<strong id="strong_slideno">SLIDE NO. </strong>
		  					</span>
		  				</td>
		    			<td>
		    				<span class="span_slideno">
			    				<span class="input-append">
									<input class="span3" id="slideno_dialog" name="slideno" type="text" />
									<span class="add-on">466491</span>
								</span>
							</span>	
						</td>
					</tr>
			
				<tr>
					<td>
						<span class="span_hn">
		  					<strong id="strong_hn">HN </strong>
		  				</span>
		  			</td>
		  			<td>
		    			<span class="span_hn">
			    				<p id="hn_text"></p>
								<input class="span3" id="hn_dialog" name="hn" type="hidden" />
								<!--<span class="add-on">75348-46</span>-->
						</span>
					</td>
				</tr>
			
				<tr>
					<td>
						<span class="span_name">
			  				<strong id="strong_name">NAME </strong>
			  			</span>
			  		</td>
			  		<td>
			  			<span class="span_name">
			    			<span class="input-append">
								<input class="span3" id="name_dialog" name="name" type="text">
								<span class="add-on">สมชาย ดวงดี</span>
							</span>
						</span>
					</td>
				</tr>
				
				<tr>
					<td>
						<span class="span_diagnosis">
			  				<strong id="strong_diagnosis">DIAGNOSIS </strong>
			  			</span>
			  		</td>
			  		<td>
			  			<span class="span_diagnosis">
			    			<span class="input-append">
								<input class="span3" id="diagnosis_dialog" name="diagnosis" type="text">
								<span class="add-on">OSAnecrosis 18%</span>
							</span>
						</span>
					</td>
				</tr>

				<tr>
					<td>
						<span class="span_date_biopsy">
			  				<strong id="strong_date_biopsy">DATE BIOPSY </strong>
			  			</span>
			  		</td>
			  		<td>
			  			<span class="span_date_biopsy">
			    			<span class="input-append">
								<input class="span3 date_biopsy" id="date_biopsy_dialog" name="date_biopsy" type="text">
								<span class="add-on">2013-05-12</span>
							</span>
						</span>
					</td>
				</tr>

				<tr>
					<td>
						<span class="span_age">
			  				<strong id="strong_age">AGE </strong>
			  			</span>
			  		</td>
			  		<td>
			  			<span class="span_age">
			    			<span class="input-append">
								<input class="span2" id="age_dialog" name="age" type="number">
								<span class="add-on">32</span>
							</span>
						</span>
					</td>
				</tr>


				<tr>
					<td>
						<span class="span_sex">
			  				<strong id="strong_sex">SEX </strong>
			  			</span>
			  		</td>
			  		<td>
			  			<span class="span_sex">
								<select class="span2" name="sex" id="sex_dialog">
									<option value="none">none</option>
			  						<option value="Male">Male</option>
			  						<option value="Female">Female</option>
								</select>
						</span>
					</td>
				</tr>

				<tr>
					<td>
						<span class="span_site">
			  				<strong id="strong_site">SITE </strong>
			  			</span>
			  		</td>
			  		<td>
			  			<span class="span_site">
								<select class="span2" name="site" id="site_dialog">
									<option value="none">none</option>
			  						<option value="Left">Left</option>
			  						<option value="Right">Right</option>
								</select>
						</span>
					</td>
				</tr>

				<tr>
					<td>
						<span class="span_region_of_lesion">
			  				<strong id="strong_region_of_lesion">REGION OF LESION </strong>
			  			</span>
			  		</td>
			  		<td>
			  			<span class="span_region_of_lesion">
			    			<span class="input-append">
								<input class="span3" id="region_of_lesion_dialog" name="region_of_lesion" type="text">
								<span class="add-on">elbow</span>
							</span>
						</span>
					</td>
				</tr>

				<tr>
					<td>
						<span class="span_location">
			  				<strong id="strong_location">LOCATION </strong>
			  			</span>
			  		</td>
			  		<td>
			  			<span class="span_location">
			    			<span class="input-append">
								<input class="span3" id="location_dialog" name="location" type="text">
								<span class="add-on">foot</span>
							</span>
						</span>
					</td>
				</tr>

				<tr>
					<td>
						<span class="span_category">
			  				<strong id="strong_category">CATEGORY TUMOR </strong>
			  			</span>
			  		</td>
			  		<td>
			  			<span class="span_category">
								<select class="span3" name="category" id="category_dialog">
									<option value="benign">Benign - bone tumor</option>
			  						<option value="malignant">Malignant - bone tumor</option>
			  						<option value="benign_soft">Benign Soft - tissue tumor</option>
			  						<option value="soft_tissue_sarcoma">Soft tissue sarcoma</option>
			  						<option value="metastasis">Metastasis</option>
			  						<option value="other">Other..</option>
								</select>
						</span>
					</td>
				</tr>

				<tr style="display:none;" id="category_other_p">
					<td>
						<span class="span_category_other">
			  				<strong id="strong_category_other">Other </strong>
			  			</span>
			  		</td>
			  		<td>
			  			<span class="span_category_other">
			    			<span class="input-append">
								<input class="span2" id="category_other" name="category_other" type="text">
								<span class="add-on">foot</span>
							</span>
						</span>
					</td>
				</tr>


				<tr>
					<td>
						<span class="span_sub_category">
			  				<strong id="strong_csub_category">SUB CATEGORY TUMOR </strong>
			  			</span>
			  		</td>
			  		<td>
			  			<span class="span_sub_category">
								<select class="span3" name="sub_category" id="sub_category_dialog">
									<option value="Osteoma">Osteoma</option>
			  						<option value="Osteoid">Osteoid</option>
			  						<option value="Osteoblastoma">Osteoblastoma</option>
			  						<option value="Osteoblastorma,aggressive">Osteoblastorma,aggressive</option>
			  						<option value="Osteochondroma">Osteochondroma</option>
			  						<option value="Osteochondromatosis">Osteochondromatosis</option>
			  						<option value="Chondroma">Chondroma</option>
			  						<option value="Chondroma,juxtacortical">Chondroma,juxtacortical</option>
			  						<option value="Chondromatosis">Chondromatosis</option>
			  						<option value="Chondroblastoma">Chondroblastoma</option>
			  						<option value="Chondromyxoid fibroma">Chondromyxoid fibroma</option>
			  						<option value="Fibroma">Fibroma</option>
			  						<option value="Desmaplastic fibroma">Desmaplastic fibroma</option>
			  						<option value="Benogn Fibrous gistiocytoma">Benogn Fibrous gistiocytoma</option>
			  						<option value="GCT">GCT</option>
			  						<option value="Lipoma">Lipoma</option>
			  						<option value="Hemangioma">Hemangioma</option>
			  						<option value="ABC">ABC</option>
			  						<option value="UBC">UBC</option>
			  						<option value="Ossifying fibroma">GCT</option>
			  						<option value="Fibrous dysplasis">Fibrous dysplasis</option>
			  						<option value="Eosinophilip granularma">Eosinophilip granularma</option>
			  						<option value="Bone infect">Bone infect</option>
			  						<option value="Brown tomor">Brown tomor</option>
			  						<option value="Osteomyelitis">Osteomyelitis</option>
			  						<option value="Intraosseous ganglion">Intraosseous ganglion</option>
			  						<option value="other">Other..</option>
								</select>
						</span>
					</td>
				</tr>


				<tr style="display:none;" id="sub_category_other_p">
					<td>
						<span class="span_sub_category_other">
			  				<strong id="strong_sub_category_other">Sub Other </strong>
			  			</span>
			  		</td>
			  		<td>
			  			<span class="span_sub_category_other">
			    			<span class="input-append">
								<input class="span2" id="sub_category_other" name="sub_category_other" type="text">
								<span class="add-on">foot</span>
							</span>
						</span>
					</td>
				</tr>

			</table>
			<input type="hidden" value="6" name="status">

			<p>
				<a class="btn" href="#" id="add_picture"><i class="icon-plus-sign"></i> picture</a>
				<a class="btn" href="#" id="delete_picture"><i class="icon-minus-sign"></i> picture</a>
			</p>

			<span class="picture" style="display:none;">
				
					<input type="file" class="filestyle" data-buttonText="Find picture file 1"  accept="image/*" name="file_picture[]"/>
				
				<table>
					<tr>
						<td>
							<strong>Category Picture 1</strong>
						</td>
						<td>
							<select class="span2" name="picture_category[]" id="picture_category1">
								<option value="Radiographic">Radiographic</option>
					  			<option value="Photograph">Photograph</option>
				  			</select>
				 	 	</td>
					</tr>
				 	<tr>
				 		<td>
				  			<strong>Sub Category Picture 1&nbsp &nbsp &nbsp &nbsp</strong>
				 	 	</td>
				 	 	<td>
					  		<select class="span2" name="sub_picture_category[]" id="sub_picture_category1">
								<option value="XRAY">XRAY</option>
						  		<option value="MRI">MRI</option>
						  		<option value="Bone Scan">Bone Scan</option>
						  		<option value="CT Chest">CT Chest</option>
						  		<option value="CT">CT</option>
					  		</select>
				  		</td>
				  	</tr>
				</table>
			</span>

			<span class="picture" style="display:none;">
				<span>
					<input type="file" class="filestyle" data-buttonText="Find picture file 2"  accept="image/*" name="file_picture[]"/>
				</span>
				<table>
					<tr>
						<td>
							<strong>Category Picture 2</strong>
						</td>
						<td>
							<select class="span2" name="picture_category[]" id="picture_category2">
								<option value="Radiographic">Radiographic</option>
						  		<option value="Photograph">Photograph</option>
						  	</select>
				 	 	</td>
					</tr>
				 	<tr>
				 		<td>
					  		<strong>Sub Category Picture 2&nbsp &nbsp &nbsp &nbsp</strong>
					 	</td>
				 	 	<td>
						  	<select class="span2" name="sub_picture_category[]" id="sub_picture_category2">
								<option value="XRAY">XRAY</option>
						  		<option value="MRI">MRI</option>
						  		<option value="Bone Scan">Bone Scan</option>
						  		<option value="CT Chest">CT Chest</option>
						  		<option value="CT">CT</option>
						  	</select>
				  		</td>
				  </tr>
				</table>
			</span>

			<span class="picture" style="display:none;">
				<span>
					<input type="file" class="filestyle" data-buttonText="Find picture file 3"  accept="image/*" name="file_picture[]"/>
				</span>
				<table>
					<tr>
						<td>
							<strong>Category Picture 3</strong>
						</td>
						<td>
							<select class="span2" name="picture_category[]" id="picture_category3">
								<option value="Radiographic">Radiographic</option>
						  		<option value="Photograph">Photograph</option>
						  	</select>
				 	 	</td>
					</tr>
				 	<tr>
				 		<td>
					  		<strong>Sub Category Picture 3&nbsp &nbsp &nbsp &nbsp</strong>
					 	</td>
				 	 	<td>
						  	<select class="span2" name="sub_picture_category[]" id="sub_picture_category3">
								<option value="XRAY">XRAY</option>
						  		<option value="MRI">MRI</option>
						  		<option value="Bone Scan">Bone Scan</option>
						  		<option value="CT Chest">CT Chest</option>
						  		<option value="CT">CT</option>
						  	</select>
				  		</td>
				  </tr>
				</table>
			</span>
			
			<span class="picture" style="display:none;">
				<span>
					<input type="file" class="filestyle" data-buttonText="Find picture file 4"  accept="image/*" name="file_picture[]"/>
				</span>
				<table>
					<tr>
						<td>
							<strong>Category Picture 4</strong>
						</td>
						<td>
							<select class="span2" name="picture_category[]" id="picture_category4">
								<option value="Radiographic">Radiographic</option>
						  		<option value="Photograph">Photograph</option>
						  	</select>
				 	 	</td>
					</tr>
				 	<tr>
				 		<td>
					  		<strong>Sub Category Picture 4&nbsp &nbsp &nbsp &nbsp</strong>
					 	</td>
				 	 	<td>
						  	<select class="span2" name="sub_picture_category[]" id="sub_picture_category4">
								<option value="XRAY">XRAY</option>
						  		<option value="MRI">MRI</option>
						  		<option value="Bone Scan">Bone Scan</option>
						  		<option value="CT Chest">CT Chest</option>
						  		<option value="CT">CT</option>
						  	</select>
				  		</td>
				  </tr>
				</table>
			</span>

			<span class="picture" style="display:none;">
				<span>
					<input type="file" class="filestyle" data-buttonText="Find picture file 5"  accept="image/*" name="file_picture[]" />
				</span>
				<table>
					<tr>
						<td>
							<strong>Category Picture 5</strong>
						</td>
						<td>
							<select class="span2" name="picture_category[]" id="picture_category5">
								<option value="Radiographic">Radiographic</option>
						  		<option value="Photograph">Photograph</option>
						  	</select>
				 	 	</td>
					</tr>
				 	<tr>
				 		<td>
					  		<strong>Sub Category Picture 5&nbsp &nbsp &nbsp &nbsp</strong>
					 	</td>
				 	 	<td>
						  	<select class="span2" name="sub_picture_category[]" id="sub_picture_category5">
								<option value="XRAY">XRAY</option>
						  		<option value="MRI">MRI</option>
						  		<option value="Bone Scan">Bone Scan</option>
						  		<option value="CT Chest">CT Chest</option>
						  		<option value="CT">CT</option>
						  	</select>
				  		</td>
				  </tr>
				</table>
			</span>
		</form>
</div>



	<ul>
		<span class="well span3" >
			<legend>Username</legend>
			<h4 id="username"><?php echo $_SESSION['username'];?></h4>
		</span>
	</ul>

	<p id="container" class="container-fluid">
<?php
if(isset($_POST['submit']))
{ require('config.php');
  $sql = "SELECT hn,slideno,date_biopsy,name,age,SEX,site,region_of_lesion as ROL,location,diagnosis,category,sub_category,path_picture as Picture ";
  $sql .= "FROM `tumor_data` LEFT JOIN `picture_path` ON hn=hn_picture";
  $sql .= StringWhere();
  $sql .= StringOrderBy();
  $query = mysql_query($sql,$objConnect);
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
      { $j++;

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
      }

}
  function StringWhere()
  { ####
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

<script type="text/javascript" src="../js/btnLogoutBack.js"></script>
<script type="text/javascript">
var row;
$(function() {

    $("#dialog-form").dialog({
      autoOpen: false,
      //height: 100,
      width: 900,
      modal: true,
      buttons: {
        "Change data": function() {
          change_form.target='iframe_target';
          change_form.submit();
          $( this ).dialog( "close" );
         
        },
        Cancel: function() {
          $( this ).dialog( "close" );
        }
      },
      close: function() {
         $( this ).dialog( "close" );
      }
    });
  $(":file").filestyle();
  var eq = 0;
  $("#add_picture").click(function()
  {  
    if(eq<5) eq++;
    $(".picture:hidden").first().css("display", "");
  });
       
  $("#delete_picture").click(function()
  {
    if(eq>0) eq--;
    $(":file").eq(eq).filestyle('clear');
    $(".picture:visible").last().css("display", "none");
  });
  
  $(".change").click(function() 
  {
    row = $(this).attr('row');
    $("#slideno_dialog").val($("#slidenoText"+row).text());
    $("#hn_dialog").val($("#hnText"+row).text());
    $("#hn_text").text($("#hnText"+row).text());
    $("#name_dialog").val($("#nameText"+row).text());
    $("#age_dialog").val($("#ageText"+row).text());
    $("#sex_dialog").val($("#SEXText"+row).text());
    $("#site_dialog").val($("#siteText"+row).text());
    $("#date_biopsy_dialog").val($("#date_biopsyText"+row).text());
    $("#region_of_lesion_dialog").val($("#ROLText"+row).text());
    $("#location_dialog").val($("#locationText"+row).text());
    $("#diagnosis_dialog").val($("#diagnosisText"+row).text());
    $("#category_dialog").val($("#categoryText"+row).text());
    select_sub_category();
    $("#sub_category_dialog").val($("#sub_categoryText"+row).text());
    $(":file").filestyle('clear');
    $(".picture").hide();
    $( "#dialog-form" ).dialog( "open" );
  });

  $("#category_dialog").change(function()
  {         
      select_sub_category();
  });
   
 
    function select_sub_category()
    {
      $("#sub_category_dialog").children().remove();
        var category = $("#category_dialog").val()=='benign' ? 0 : $("#category_dialog").val()=='malignant' ? 1 : $("#category_dialog").val()=='benign_soft' ? 2 : $("#category_dialog").val()=='soft_tissue_sarcoma' ? 3 : $("#category_dialog").val() == 'metastasis' ? 4 : 5;
        var sub_category = new Array();
          sub_category[0] = "<option value=\"Osteoma\">Osteoma</option><option value=\"Osteoid\">Osteoid</option><option value=\"Osteoblastoma\">Osteoblastoma</option><option value=\"Osteoblastorma,aggressive\">Osteoblastorma,aggressive</option><option value=\"Osteochondroma\">Osteochondroma</option><option value=\"Osteochondromatosis\">Osteochondromatosis</option><option value=\"Chondroma\">Chondroma</option><option value=\"Chondroma,juxtacortical\">Chondroma,juxtacortical</option>";
          sub_category[0] += "<option value=\"Chondromatosis\">Chondromatosis</option>";
          sub_category[0] += "<option value=\"Chondroblastoma\">Chondroblastoma</option>";
          sub_category[0] += "<option value=\"Chondromyxoid fibroma\">Chondromyxoid fibroma</option>";
          sub_category[0] += "<option value=\"Fibroma\">Fibroma</option>";
          sub_category[0] += "<option value=\"Desmaplastic fibroma\">Desmaplastic fibroma</option>";
          sub_category[0] += "<option value=\"Benogn Fibrous gistiocytoma\">Benogn Fibrous gistiocytoma</option>";
          sub_category[0] += "<option value=\"GCT\">GCT</option>";
          sub_category[0] += "<option value=\"Lipoma\">Lipoma</option>";
          sub_category[0] += "<option value=\"Hemangioma\">Hemangioma</option>";
          sub_category[0] += "<option value=\"ABC\">ABC</option>";
          sub_category[0] += "<option value=\"UBC\">UBC</option>";
          sub_category[0] += "<option value=\"Ossifying fibroma\">GCT</option>";
          sub_category[0] += "<option value=\"Fibrous dysplasis\">Fibrous dysplasis</option>";
          sub_category[0] += "<option value=\"Eosinophilip granularma\">Eosinophilip granularma</option>";
          sub_category[0] += "<option value=\"Bone infect\">Bone infect</option>";
          sub_category[0] += "<option value=\"Brown tomor\">Brown tomor</option>";
          sub_category[0] += "<option value=\"Osteomyelitis\">Osteomyelitis</option>";
          sub_category[0] += "<option value=\"Intraosseous ganglion\">Intraosseous ganglion</option>";
          sub_category[0] += "<option value=\"other\">Other..</option>";

          sub_category[1] = "<option value=\"Ostrocarcoma\">Ostrocarcoma</option>";
          sub_category[1] += "<option value=\"Ostrocarcoma,Chondroblastic\">Ostrocarcoma,Chondroblastic</option>";
          sub_category[1] += "<option value=\"Ostrocarcoma,Fibroblastic\">Ostrocarcoma,Fibroblastic</option>";
          sub_category[1] += "<option value=\"Ostrocarcoma,Talangiectatic\">Ostrocarcoma,Talangiectatic</option>";
          sub_category[1] += "<option value=\"Ostrocarcoma,small cell\">Ostrocarcoma,small cell</option>";
          sub_category[1] += "<option value=\"Ostrocarcoma,juxtacortical\">Ostrocarcoma,juxtacortical</option>";
          sub_category[1] += "<option value=\"Ostrocarcoma,in pager\">Ostrocarcoma,in pager</option>";
          sub_category[1] += "<option value=\"Chondrosarcoma\">Chondrosarcoma</option>";
          sub_category[1] += "<option value=\"Chondrosarcoma,juxtacortical\">Chondrosarcoma,juxtacortical</option>";
          sub_category[1] += "<option value=\"Chondrosarcoma,myxiod\">Chondrosarcoma,myxiod</option>";
          sub_category[1] += "<option value=\"Chondrosarcoma,Dediff\">Chondrosarcoma,Dediff</option>";
          sub_category[1] += "<option value=\"Chondrosarcoma,mesenchymal\">Chondrosarcoma,mesenchymal</option>";
          sub_category[1] += "<option value=\"Ewing sarcoma\">Ewing sarcoma</option>";
          sub_category[1] += "<option value=\"FibrosarcomaMalignant\">FibrosarcomaMalignant</option>";
          sub_category[1] += "<option value=\"Fibrous histiocytetoma\">Fibrous histiocytetoma</option>";
          sub_category[1] += "<option value=\"GCT,malignant\">GCT,malignant</option>";
          sub_category[1] += "<option value=\"Plasmacytoma\">Plasmacytoma</option>";
          sub_category[1] += "<option value=\"Multiple myeloma\">Multiple myeloma</option>";
          sub_category[1] += "<option value=\"Lymphoma\">Lymphoma</option>";
          sub_category[1] += "<option value=\"Lymphoma,momHodgin\">Lymphoma,momHodgin</option>";
          sub_category[1] += "<option value=\"Liprosarcoma\">Liprosarcoma</option>";
          sub_category[1] += "<option value=\"Chordoma\">Chordoma</option>";
          sub_category[1] += "<option value=\"Hemagioendothelioma\">Hemagioendothelioma</option>";
          sub_category[1] += "<option value=\"Hemangiopericytoma\">Hemangiopericytoma</option>";
          sub_category[1] += "<option value=\"Adamantinoma\">Adamantinoma</option>";
          sub_category[1] += "<option value=\"other\">Other..</option>";

          sub_category[2] = "<option value=\"Superficial lipoma\">Superficial lipoma</option>";
          sub_category[2] += "<option value=\"Deep lipoma\">Deep lipoma</option>";
          sub_category[2] += "<option value=\"Organized hematoma\">Organized hematoma</option>";
          sub_category[2] += "<option value=\"Schwannoma\">Schwannoma</option>";
          sub_category[2] += "<option value=\"Fibromatosis\">Fibromatosis</option>";
          sub_category[2] += "<option value=\"Myxoma\">Myxoma</option>";
          sub_category[2] += "<option value=\"Hemangioma\">Hemangioma</option>";
          sub_category[2] += "<option value=\"Ganglion\">Ganglion</option>";
          sub_category[2] += "<option value=\"leiomyoma\">leiomyoma</option>";
          sub_category[2] += "<option value=\"GCT of tendonsheath\">GCT of tendonsheath</option>";
          sub_category[2] += "<option value=\"Glomus tumor\">Glomus tumor</option>";
          sub_category[2] += "<option value=\"Rhabdomyoma\">Rhabdomyoma</option>";
          sub_category[2] += "<option value=\"Pigmented uillo nudular synovitis\">Pigmented uillo nudular synovitis</option>";
          sub_category[2] += "<option value=\"Synovial chondromatisis\">Synovial chondromatisis</option>";
          sub_category[2] += "<option value=\"Neurofibromatosis\">Neurofibromatosis</option>";
          sub_category[2] += "<option value=\"Benign Fibrous histiocytoma\">Benign Fibrous histiocytoma</option>";
          sub_category[2] += "<option value=\"Pseudotumor\">Pseudotumor</option>";
          sub_category[2] += "<option value=\"Tumoral calcinosis\">Tumoral calcinosis</option>";
          sub_category[2] += "<option value=\"Neurofibroma\">Neurofibroma</option>";
          sub_category[2] += "<option value=\"other\">other..</option>";

          sub_category[3] = "<option value=\"Malignant Fibrous histiocytoma\">Malignant Fibrous histiocytoma</option>";
          sub_category[3] += "<option value=\"Angiosarcoma\">Angiosarcoma</option>";
          sub_category[3] += "<option value=\"Liprosarcoma\">Liprosarcoma</option>";
          sub_category[3] += "<option value=\"Dermatofibrosarcoma protuberans\">Dermatofibrosarcoma protuberans</option>";
          sub_category[3] += "<option value=\"Synovial sarcoma\">Synovial sarcoma</option>";
          sub_category[3] += "<option value=\"Malignant Peripheral nerve sheath\">Malignant Peripheral nerve sheath</option>";
          sub_category[3] += "<option value=\"Fibrosarcoma\">Fibrosarcoma</option>";
          sub_category[3] += "<option value=\"Clear cell sarcoma\">Clear cell sarcoma</option>";
          sub_category[3] += "<option value=\"Hemangiopericytoma\">Hemangiopericytoma</option>";
          sub_category[3] += "<option value=\"Alveolar soft part sarcoma\">Alveolar soft part sarcoma</option>";
          sub_category[3] += "<option value=\"Rhabdomyosarcoma\">Rhabdomyosarcoma</option>";
          sub_category[3] += "<option value=\"Extraskeletal OSA\">Extraskeletal OSA</option>";
          sub_category[3] += "<option value=\"Leiomyosarcoma\">Leiomyosarcoma</option>";
          sub_category[3] += "<option value=\"Extraskeletal CHSA\">Extraskeletal CHSA</option>";
          sub_category[3] += "<option value=\"Epithelioid sarcoma\">Epithelioid sarcoma</option>";
          sub_category[3] += "<option value=\"other\">other..</option>";
          
          sub_category[4] = "<option value=\"unknown\">unknown</option>";
          sub_category[4] += "<option value=\"Breast\">Breast</option>";
          sub_category[4] += "<option value=\"Lung\">Lung</option>";
          sub_category[4] += "<option value=\"Thyroid\">Thyroid</option>";
          sub_category[4] += "<option value=\"Prostate\">Prostate</option>";
          sub_category[4] += "<option value=\"Renal\">Renal</option>";
          sub_category[4] += "<option value=\"GI\">GI</option>";
          sub_category[4] += "<option value=\"Liver\">Liver</option>";
          sub_category[4] += "<option value=\"ENT\">ENT</option>";
          sub_category[4] += "<option value=\"other\">other..</option>";
          
          sub_category[5] = "<option value=\"other\">other..</option>";
        switch(category)
        {   case 0:
            $("#sub_category_dialog").html(sub_category[0]);show_other();
            break;
          case 1:
            $("#sub_category_dialog").html(sub_category[1]);show_other();
            break;
          case 2:
            $("#sub_category_dialog").html(sub_category[2]);show_other();
            break;
          case 3:
            $("#sub_category_dialog").html(sub_category[3]);show_other();
            break;
          case 4:
            $("#sub_category_dialog").html(sub_category[4]);show_other();
            break;
          case 5:
            $("#sub_category_dialog").html(sub_category[5]);show_other();
            break;
        }   
    }
    function show_other()
    {
      $("#category_other_p").css('display','none');
      $("#sub_category_other_p").css('display','none');
      if($("#category_dialog").val()=="other")
        $("#category_other_p").css('display','');
      if($("#sub_category_dialog").val()=="other")
        $("#sub_category_other_p").css('display','');
    }
     $("#sub_category_dialog").change(function(){
        show_other();
     });
  });
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
	 function show_status(result)
  {
      if(result=='1')
      {

         $.ajax
          ({
              url:'service_SCR.php',
              type:'POST',
              data:'hn='+$("#hnText"+row).text(),
              dataType: 'json',
              success:function(data)
              {
                console.log(row);
                console.log(data[0].slideno);
                console.log(data[0].date_biopsy);
                console.log(data[0].name);
                console.log(data[0].age);
                console.log(data[0].SEX);
                console.log(data[0].site);
                console.log(data[0].ROL);
                console.log(data[0].location);
                console.log(data[0].diagnosis);
                console.log(data[0].category);
                console.log(data[0].sub_category);
                console.log(data[0].picture);
                $("#slidenoText"+row).text(data[0].slideno);
                $("#date_biopsyText"+row).text(data[0].date_biopsy);
                $("#nameText"+row).text(data[0].name);
                $("#ageText"+row).text(data[0].age);
                $("#SEXText"+row).text(data[0].SEX);
                $("#siteText"+row).text(data[0].site);
                $("#ROLText"+row).text(data[0].ROL);
                $("#locationText"+row).text(data[0].location);
                $("#diagnosisText"+row).text(data[0].diagnosis);
                $("#categoryText"+row).text(data[0].category);
                $("#sub_categoryText"+row).text(data[0].sub_category);
                $("#PictureText"+row).html(data[0].picture);
                $("#alertSuccess").fadeIn(1000).delay(3000).fadeOut(1000);
              }
          });
      }
  }
$(window).ready(function()
{
		$(".id").css("width","40");
		$(".slideno").css("width","70");
		$(".hn").css("width","85");
		$(".date_biopsy").css("width","90");
		$(".age").css("width","30");
		$(".site").css({"height":"30","width":"80"});
		$(".name").css("width","180");
		$(".sex").css({"height":"30","width":"80"});
		//$("td").css({"padding":"6","text-align":"center"});
		$(".fancybox").fancybox();
		$(".date_biopsy").datepicker({ dateFormat: 'yy-mm-dd' });
		
		$(".input").hide();
		

});

	


	$(".close").click(function(){
		$(".alert").hide();
	});

	$(".remove").click(function(){
		alert('tes');
		var username = $("#username").html();
		var row = $(this).attr("row");
		var hn = $('#hn'+row).html();
		$("#dialog").attr('title','Warning').text('คุณต้องการลบข้อมูลจริงหรือไม่').dialog({ 
			modal: true,
			resizable: false,
			buttons: [ 
			{ text: "Ok", click: function() 
				{ 
					$.ajax
					({
						type: 'POST',
						url:'remove_tumor_data.php',
						data:'username='+username+'&hn='+hn,
						success: function(data)
						{
							console.log(data);
							if(data=='การลบข้อมูลสำเร็จ')
							{
								$("#alertSuccess").html("<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button><center><h3><strong>Success!</strong> การลบข้อมูลสำเร็จ</h3></center>").fadeIn(1000).delay(3000).fadeOut(1000);
								$("#rowText"+row).hide();
							}
							else if(data=='การลบข้อมูลผิดพลาด')
							{

							}

						}
					}).error(function()
						{
							alert("Server ไม่ตอบสนอง");
						});
					$(this).dialog( "close" ); 
				} 
			}
			,{ text: "Cancel", click: function() { $( this ).dialog( "close" ); } } ] });
	});

	$(".save").click(function(){
		var username = $("#username").html();
		var row = $(this).attr('row');
		var slideno = $('#slideno'+row).val();
		var hn = $('#hn'+row).html();
		var date_biopsy = $('#date_biopsy'+row).val();
		var name = $('#name'+row).val();
		var age = $('#age'+row).val();
		var sex = $('#SEX'+row).val();
		var site = $('#site'+row).val();
		var region_of_lesion = $('#ROL'+row).val();
		var location = $('#location'+row).val();
		var diagnosis = $('#diagnosis'+row).val();
		var catagory = $('#catagory'+row).val();
		var sub_catagory = $('#sub_catagory'+row).val();
		console.log(row+" "+slideno+" "+hn+" "+date_biopsy+" "+name+" "+age+" "+sex+" "+site+" "+region_of_lesion+" "+location+" "+diagnosis+" "+catagory+" "+sub_catagory+" ");
		//#ajax
		$.ajax
		({
				
			type: 'POST',
			url:'change_tumor_data.php',
			data:'username='+username+'&hn='+hn+'&slideno='+slideno+'&diagnosis='+diagnosis+'&date_biopsy='+date_biopsy+'&age='+age+'&sex='+sex+'&site='+site+'&location='+location+'&catagory='+catagory+'&sub_catagory='+sub_catagory+'&region_of_lesion='+region_of_lesion+'&name='+name+'&status='+'6',
			//data:$("#add_form").serialize(),
			//data:data,
			success: function(data)
			{

				$("#alertSuccess").fadeIn(1000).delay(3000).fadeOut(1000);
				console.log(data);
				if(data=='เปลี่ยนแปลงค่าสำเร็จ')
				{
					$("#slidenoText"+row).html(slideno);
					$("#date_biopsyText"+row).html(date_biopsy);
					$("#nameText"+row).html(name);
					$("#ageText"+row).html(age);
					$("#SEXText"+row).html(sex);
					$("#siteText"+row).html(site);
					$("#ROLText"+row).html(region_of_lesion);
					$("#locationText"+row).html(location);
					$("#diagnosisText"+row).html(diagnosis);
					$("#catagoryText"+row).html(catagory);
					$("#sub_catagoryText"+row).html(sub_catagory);
					$('#rowText'+row).show();
					$('#rowChange'+row).hide();
				}
				else if(data=='เปลี่ยนแปลงค่าไม่สำเร็จ')
				{
					$("#alertError").fadeIn(1000).delay(3000).fadeOut(1000);
				}

			}
		}).error(function()
			{
				alert("Server ไม่ตอบสนอง");
			});

	});
	$(".cancel").click(function(){
		var row = $(this).attr('row');
		var arr = Array();
		$(this).parent().parent().parent().children('#rowText'+row).children().each(function(index){
			//console.log($(this).text());
			arr[index] = $(this).text();
		});
		$("#slideno"+row).val(arr[2]);
		$("#date_biopsy"+row).val(arr[3]);
		$("#name"+row).val(arr[4]);
		$("#age"+row).val(arr[5]);
		$("#SEX"+row).val(arr[6]);
		$("#site"+row).val(arr[7]);
		$("#ROL"+row).val(arr[8]);
		$("#location"+row).val(arr[9]);
		$("#diagnosis"+row).val(arr[10]);
		$("#catagory"+row).val(arr[11]);
		$("#sub_catagory"+row).val(arr[12]);

		$('#rowText'+row).show();
		$('#rowChange'+row).hide();
	});
	
	function replaceTag()
	{
		var tag="";
		var name=["id","slideno","hn","date_biopsy","name","age","site","region_of_lesion","location","diagnosis","catagory","sub_catagory"];
		$(this).parent().parent().children().each(function(index){
			if(index<12)
			{	tag+="<td><input maxlength='10'  style='width: 100px; padding: 2px;' name='";
				tag+=name[index];
				tag+="' value='";
				tag+=$(this).text();
				tag+="'/></td>";
				console.log(index);
				console.log($(this).text());
			}
		});
		console.log(tag+"  ");
		$(this).parent().parent().replaceWith(tag);
		
	}

</script>
</body>
</html>