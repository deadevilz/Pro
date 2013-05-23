<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
	<title>Musculoskeletal Tumor Conference</title>
	<meta http-equiv="Content-Language" content="th"> 
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../jQuery/jquery-ui.css">
	<?php require('redirect_login.php'); ?>
</head>
<body>
	<ul>
		<span class="well span3">
			<legend>Logout</legend>
			<input type="button" value="logout" class="btn" id="logout"/>
			<input type="button" value="Back" class="btn"  id="back"/>
		</span>
	</ul>
		<form action="insertdata.php" method="POST" class="well span8" id="add_form"  name="add_form" enctype="multipart/form-data">
			<iframe id="iframe_target" name="iframe_target" src="#" style="width:0;height:0;border:0px solid #fff;"></iframe>

			<legend>Add data</legend>
			
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
									<input class="span3" id="slideno" name="slideno" type="text">
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
			    			<span class="input-append">
								<input class="span3" id="hn" name="hn" type="text">
								<span class="add-on">75348-46</span>
							</span>
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
								<input class="span3" id="name" name="name" type="text">
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
								<input class="span3" id="diagnosis" name="diagnosis" type="text">
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
								<input class="span3" id="date_biopsy" name="date_biopsy" type="text">
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
								<input class="span2" id="age" name="age" type="number">
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
								<select class="span2" name="sex" id="sex">
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
								<select class="span2" name="site" id="site">
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
								<input class="span3" id="region_of_lesion" name="region_of_lesion" type="text">
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
								<input class="span3" id="location" name="location" type="text">
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
								<select class="span3" name="category" id="category">
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
								<select class="span3" name="sub_category" id="sub_category">
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

			<span class="picture">
				
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

			<span class="picture">
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

			<span class="picture">
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
			
			<span class="picture">
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

			<span class="picture">
				<span>
					<input type="file" class="filestyle" data-buttonText="Find picture file 5"  accept="image/*" name="file_picture[]"/>
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

			

			<center><input type="button" id="btnadd" value="เพิ่มข้อมูล" class="btn btn-primary "/></center>
		</form>

		


	<ul>
		<form action="login.php" method="POST" class="well span4" >
			<legend>Username</legend>
			<h3 id="username"><?php echo $_SESSION['username'];?></h3>
		</form>
	</ul>

	<ul>
		<form action="login.php" method="POST" class="well span4" >
			<legend>Status</legend>
			<h3 id="status"></h3>
		</form>
	</ul>


	<script type="text/javascript" src="../jQuery/jquery.js"></script>
	<script type="text/javascript" src="../jQuery/jquery-ui.js"></script>
	<script type="text/javascript" src="../bootstrap/js/bootstrap-filestyle.min.js"></script>
	<script type="text/javascript" src="../js/btnLogoutBack.js"></script>
	<script type="text/javascript">
   		 $(window).load(function() {
      		$(".picture").css("display", "none");
		});
   		
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

   		$("#picture_category1").change(function(){
   		 	select_sub_category_picture1();
   		 });
   		$("#picture_category2").change(function(){
   		 	select_sub_category_picture2();
   		 });
   		$("#picture_category3").change(function(){
   		 	select_sub_category_picture3();
   		 });
   		$("#picture_category4").change(function(){
   		 	select_sub_category_picture4();
   		 });
   		$("#picture_category5").change(function(){
   		 	select_sub_category_picture5();
   		 });


   		 $("#date_biopsy").datepicker({ dateFormat: 'yy-mm-dd' });
   		 $("#category").change(function()
   		 {   		 	
   		 	select_sub_category();
   		 });

		$("#sub_category").change(function(){
			show_other();
		});

		$("#btnadd").click(function(){
			$("#status").html("กำลังทำการเพิ่มข้อมูล");
			
			add_form.action='insertdata.php'
			add_form.target='iframe_target';
			add_form.submit();	
		});

   	function show_other()
   	{
   		$("#category_other_p").css('display','none');
   		$("#sub_category_other_p").css('display','none');
   		if($("#category").val()=="other")
   		 	$("#category_other_p").css('display','');
   		if($("#sub_category").val()=="other")
   		 	$("#sub_category_other_p").css('display','');
   	}
   	function removeClassError()
   	{
   		$(".span_slideno").removeClass("control-group error");
		$("#strong_slideno").removeClass("control-label");
		$(".span_hn").removeClass("control-group error");
		$("#strong_hn").removeClass("control-label");
		$(".span_name").removeClass("control-group error");
		$("#strong_name").removeClass("control-label");
   	}
   	function clearData()
   	{
   		$("#hn").val(""); 
		$("#slideno").val("");
		$("#diagnosis").val("");
		$("#date_biopsy").val("");
		$("#age").val("");
		$("#sex").val("");
		$("#site").val("");
		$("#location").val("");
		$("#category").val("");
		$("#category_other").val("");
		$("#sub_category").val("");
		$("#sub_category_other").val("");
		$("#region_of_lesion").val("");
		$("#name").val("");
		show_other();
		select_sub_category();
		$("#slideno").focus();
		$(":file").filestyle("clear");

   	}
   	function select_sub_category()
   	{
   		$("#sub_category").children().remove();
   		 	var category = $("#category").val()=='benign' ? 0 : $("#category").val()=='malignant' ? 1 : $("#category").val()=='benign_soft' ? 2 : $("#category").val()=='soft_tissue_sarcoma' ? 3 : $("#category").val() == 'metastasis' ? 4 : 5;
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
	  		{ 	case 0:
	  				$("#sub_category").html(sub_category[0]);show_other();
	  				break;
	  			case 1:
	  				$("#sub_category").html(sub_category[1]);show_other();
	  				break;
	  			case 2:
	  				$("#sub_category").html(sub_category[2]);show_other();
	  				break;
	  			case 3:
	  				$("#sub_category").html(sub_category[3]);show_other();
	  				break;
	  			case 4:
	  				$("#sub_category").html(sub_category[4]);show_other();
	  				break;
	  			case 5:
	  				$("#sub_category").html(sub_category[5]);show_other();
	  				break;
	  		}		
   	}
   	function ajax_insertdata()
   	{
   			var username = $("#username").html();
			var hn = $("#hn").val(); 
			var slideno = $("#slideno").val();
			var diagnosis = $("#diagnosis").val();
			var date_biopsy = $("#date_biopsy").val();
			var age = $("#age").val();
			var sex = $("#sex").val();
			var site = $("#site").val();
			var location = $("#location").val();
			var category = $("#category").val();
			var category_other = $("#category_other").val();
			var sub_category = $("#sub_category").val();
			var sub_category_other = $("#sub_category_other").val();
			var region_of_lesion = $("#region_of_lesion").val();
			var name = $("#name").val();

			alert(username+" "+hn+" "+slideno+" "+diagnosis+" "+date_biopsy+" "+age+" "+sex+" "+site+" "+location+" "+category+" "+category_other+" "+sub_category+" "+sub_category_other);
			//alert(sub_category_other);
			$.ajax
			({
				
				type: 'POST',
				url:'insertdata.php',
				//data:'username='+username+'&hn='+hn+'&slideno='+slideno+'&diagnosis='+diagnosis+'&date_biopsy='+date_biopsy+'&age='+age+'&sex='+sex+'&site='+site+'&location='+location+'&category='+category+'&category_other='+category_other+'&sub_category='+sub_category+'&sub_category_other='+sub_category_other+'&region_of_lesion='+region_of_lesion+'&name='+name+'&status='+'6'+'&file='+file_data,
				data:$("#add_form").serialize(),
				//data:data,
				success: function(data)
				{
					removeClassError();
					$('#status').html(data);
					if(data=='ช่อง SLIDENO ไม่ได้ใส่ค่า')
					{
						$(".span_slideno").addClass("control-group error");
						$("#strong_slideno").addClass("control-label");
						$("#slideno").focus();
					}
					if(data=='ช่อง HN ไม่ได้ใส่ค่า'||data=='ช่อง HN ใส่ค่าไม่ถูกต้อง')
					{
						$(".span_hn").addClass("control-group error");
						$("#strong_hn").addClass("control-label");
						$("#hn").focus();
					}
					if(data=='ช่อง NAME ไม่ได้ใส่ค่า')
					{
						$(".span_name").addClass("control-group error");
						$("#strong_name").addClass("control-label");
						$("#name").focus();
					}
					if(data=='การเพิ่มข้อมูลสำเร็จ')
					{
						
						clearData();
					}

				}
			}).error(function(){
					$('#status').html('server not responding');
				});
			
   	}
   	function show_status(result)
   	{	removeClassError();
   		if(result=='1')
   		{
   			$("#status").html("ช่อง SLIDENO ไม่ได้ใส่ค่า");
   			$(".span_slideno").addClass("control-group error");
			$("#strong_slideno").addClass("control-label");
			$("#slideno").focus();
   		}
   		else if(result=='2')
   		{
   			$("#status").html("ช่อง HN ไม่ได้ใส่ค่า");
   			$(".span_hn").addClass("control-group error");
			$("#strong_hn").addClass("control-label");
			$("#hn").focus();
   		}
   		else if(result=='3')
   		{
   			$("#status").html("ช่อง NAME ไม่ได้ใส่ค่า");
   			$(".span_name").addClass("control-group error");
			$("#strong_name").addClass("control-label");
			$("#name").focus();
   		}
   		else if(result=='9')
   		{
   			$("#status").html("การเพิ่มข้อมูลสำเร็จ");
   			clearData();
   		}
   		else if(result=='10')
   		{
   			$("#status").html("การเพิ่มข้อมูลผิดพลาด");
   		}
   	}
   function select_sub_category_picture1()
   {
   		$("#sub_picture_category1").children().remove();
   		switch($("#picture_category1").val())
   		{	case "Radiographic":
   				$("#sub_picture_category1").html("<option value=\"XRAY\">XRAY</option><option value=\"MRI\">MRI</option><option value=\"Bone Scan\">Bone Scan</option><option value=\"CT Chest\">CT Chest</option><option value=\"CT\">CT</option>");
   				break;
   			case "Photograph":
   				$("#sub_picture_category1").html("<option value=\"Pre-op\">Pre-op</option><option value=\"Intra-op\">Intra-op</option><option value=\"Post-op\">Post-op</option>");
   				break;
   		}
   }
   function select_sub_category_picture2()
   {
   		$("#sub_picture_category2").children().remove();
   		switch($("#picture_category2").val())
   		{	case "Radiographic":
   				$("#sub_picture_category2").html("<option value=\"XRAY\">XRAY</option><option value=\"MRI\">MRI</option><option value=\"Bone Scan\">Bone Scan</option><option value=\"CT Chest\">CT Chest</option><option value=\"CT\">CT</option>");
   				break;
   			case "Photograph":
   				$("#sub_picture_category2").html("<option value=\"Pre-op\">Pre-op</option><option value=\"Intra-op\">Intra-op</option><option value=\"Post-op\">Post-op</option>");
   				break;
   		}
   }
   function select_sub_category_picture3()
   {
   		$("#sub_picture_category3").children().remove();
   		switch($("#picture_category3").val())
   		{	case "Radiographic":
   				$("#sub_picture_category3").html("<option value=\"XRAY\">XRAY</option><option value=\"MRI\">MRI</option><option value=\"Bone Scan\">Bone Scan</option><option value=\"CT Chest\">CT Chest</option><option value=\"CT\">CT</option>");
   				break;
   			case "Photograph":
   				$("#sub_picture_category3").html("<option value=\"Pre-op\">Pre-op</option><option value=\"Intra-op\">Intra-op</option><option value=\"Post-op\">Post-op</option>");
   				break;
   		}
   }
   function select_sub_category_picture4()
   {
   		$("#sub_picture_category4").children().remove();
   		switch($("#picture_category4").val())
   		{	case "Radiographic":
   				$("#sub_picture_category4").html("<option value=\"XRAY\">XRAY</option><option value=\"MRI\">MRI</option><option value=\"Bone Scan\">Bone Scan</option><option value=\"CT Chest\">CT Chest</option><option value=\"CT\">CT</option>");
   				break;
   			case "Photograph":
   				$("#sub_picture_category4").html("<option value=\"Pre-op\">Pre-op</option><option value=\"Intra-op\">Intra-op</option><option value=\"Post-op\">Post-op</option>");
   				break;
   		}
   }
   function select_sub_category_picture5()
   {
   		$("#sub_picture_category5").children().remove();
   		switch($("#picture_category5").val())
   		{	case "Radiographic":
   				$("#sub_picture_category5").html("<option value=\"XRAY\">XRAY</option><option value=\"MRI\">MRI</option><option value=\"Bone Scan\">Bone Scan</option><option value=\"CT Chest\">CT Chest</option><option value=\"CT\">CT</option>");
   				break;
   			case "Photograph":
   				$("#sub_picture_category5").html("<option value=\"Pre-op\">Pre-op</option><option value=\"Intra-op\">Intra-op</option><option value=\"Post-op\">Post-op</option>");
   				break;
   		}
   }

	</script>

</body>
</html>