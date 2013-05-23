<!doctype html>
 
<html lang="en">
<head>
  <meta charset="utf-8" />
  <title>jQuery UI Dialog - Modal form</title>
  <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
  <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
  <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
  <link rel="stylesheet" href="/resources/demos/style.css" />
  <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.css">
  <script type="text/javascript" src="../bootstrap/js/bootstrap-filestyle.min.js"></script>
  <script>
  $(function() {
    $( "#dialog-form" ).dialog({
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
 	
    $(".change").click(function() {
        var row = $(this).attr('row');
        $("#slideno_dialog").val($("#slidenoText"+row).text());
        $("#hn_dialog").val($("#hnText"+row).text());
        $("#hn_text").text($("#hnText"+row).text());
        $("#name_dialog").val($("#nameText"+row).text());
        $("#age_dialog").val($("#ageText"+row).text());
        $("#sex_dialog").val($("#SEXText"+row).text());
        $("#site_dialog").val($("#siteText"+row).text());
        $("#region_of_lesion_dialog").val($("#ROLText"+row).text());
        $("#location_dialog").val($("#locationText"+row).text());
        $("#diagnosis_dialog").val($("#diagnosisText"+row).text());
        $("#category_dialog").val($("#categoryText"+row).text());
        select_sub_category();
        $("#sub_category_dialog").val($("#sub_categoryText"+row).text());
        $(".picture").filestyle('clear');
        $(".picture").hide();
        $( "#dialog-form" ).dialog( "open" );
      });

     $("#category_dialog").change(function()
   	 {   		 	
   		 	select_sub_category();
   	});
    function show_status(result)
    {
    	///###

    }

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
	  		{ 	case 0:
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
  </script>
</head>
<body>
 
<div id="dialog-form" title="Create new user">
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
								<input class="span3" id="date_biopsy_dialog" name="date_biopsy" type="text">
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
								<input class="span2" id="category_other" name="category_other_dialog" type="text">
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
								<input class="span2" id="sub_category_other" name="sub_category_other_dialog" type="text">
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
 
<table class="table table-bordered table-hover"><tbody><tr class="info"><td><strong>#</strong></td><td><strong>hn</strong></td>
<td><strong>slideno</strong></td>
<td><strong>date_biopsy</strong></td>
<td><strong>name</strong></td>
<td><strong>age</strong></td>
<td><strong>SEX</strong></td>
<td><strong>site</strong></td>
<td><strong>ROL</strong></td>
<td><strong>location</strong></td>
<td><strong>diagnosis</strong></td>
<td><strong>category</strong></td>
<td><strong>sub_category</strong></td>
<td><strong>Picture</strong></td>
<td><strong>Change</strong></td>
<td><strong>Remove</strong></td>
</tr><tr id="rowText1" style="display: table-row;">
<td>1</td>
<td id="hnText1">4124</td>
<td id="slidenoText1">124</td>
<td id="date_biopsyText1">0000-00-00</td>
<td id="nameText1">ฟไดฟไดไฟดไ</td>
<td id="ageText1">12</td>
<td id="SEXText1">M</td>
<td id="siteText1">Lt</td>
<td id="ROLText1">asfsaf</td>
<td id="locationText1">asfasf</td>
<td id="diagnosisText1">sfaf</td>
<td id="categoryText1"></td>
<td id="sub_categoryText1"></td>
<td id="PictureText1"></td>
<td><input type="button" value="Change" name="Change" class="change btn btn-warning btn-small" row="1"></td>
<td><input type="button" value="Remove" name="Remove" class="remove btn btn-danger btn-small" row="1"></td>
</tr>
<tr style="display: none;" id="rowChange1">
<td>1</td>
<td id="hn1">4124</td><td><input type="text" value="124" name="slideno1" id="slideno1" class="span2 slideno" style="width: 70px;"></td>
<td><input type="text" value="0000-00-00" name="date_biopsy1" id="date_biopsy1" class="span2 date_biopsy hasDatepicker" style="width: 90px;"></td>
<td><input type="text" value="ฟไดฟไดไฟดไ" name="name1" id="name1" class="span2 name" style="width: 180px;"></td>
<td><input type="text" value="12" name="age1" id="age1" class="span2 age" style="width: 30px;"></td>
<td><select id="SEX1" class="sex" style="height: 30px; width: 80px;"><option value="none" selected="selected">none</option><option value="Male">Male</option><option value="Female">Female</option>
</select></td><td><select id="site1" class="site" style="height: 30px; width: 80px;"><option value="none" selected="selected">none</option><option value="Left">Left</option><option value="Right">Right</option>
</select></td><td><input type="text" value="asfsaf" name="ROL1" id="ROL1" class="span2 ROL" style="width:100;height:30;"></td>
<td><input type="text" value="asfasf" name="location1" id="location1" class="span2 location" style="width:100;height:30;"></td>
<td><input type="text" value="sfaf" name="diagnosis1" id="diagnosis1" class="span2 diagnosis" style="width:100;height:30;"></td>
<td><input type="text" value="" name="category1" id="category1" class="span2 category" style="width:100;height:30;"></td>
<td><input type="text" value="" name="sub_category1" id="sub_category1" class="span2 sub_category" style="width:100;height:30;"></td>
<td></td><td><input type="button" value="Save" name="save" data-loading-text="Saving..." class="save btn btn-success btn-small" row="1" style="width:63;height:26;"></td>
<td><input type="button" value="Cancel" name="Cancel" class="cancel btn btn-primary btn-small" row="1" style="width:63;height:26;"></td>
</tr>
<tr id="rowText2">
<td>2</td>
<td id="hnText2">ภาษาไทย</td>
<td id="slidenoText2">ภาษาไทย</td>
<td id="date_biopsyText2">2013-05-10</td>
<td id="nameText2">ภาษาไทย</td>
<td id="ageText2">42</td>
<td id="SEXText2">none</td>
<td id="siteText2">none</td>
<td id="ROLText2">ภาษาไทย</td>
<td id="locationText2">ภาษาไทย</td>
<td id="diagnosisText2">ภาษาไทย</td>
<td id="categoryText2">benign</td>
<td id="sub_categoryText2">Osteoma</td>
<td id="PictureText2"></td>
<td><input type="button" value="Change" name="Change" class="change btn btn-warning btn-small" row="2"></td>
<td><input type="button" value="Remove" name="Remove" class="remove btn btn-danger btn-small" row="2"></td>
</tr>
<tr style="display:none;" id="rowChange2">
<td>2</td>
<td id="hn2">ภาษาไทย</td><td><input type="text" value="ภาษาไทย" name="slideno2" id="slideno2" class="span2 slideno" style="width: 70px;"></td>
<td><input type="text" value="2013-05-10" name="date_biopsy2" id="date_biopsy2" class="span2 date_biopsy hasDatepicker" style="width: 90px;"></td>
<td><input type="text" value="ภาษาไทย" name="name2" id="name2" class="span2 name" style="width: 180px;"></td>
<td><input type="text" value="42" name="age2" id="age2" class="span2 age" style="width: 30px;"></td>
<td><select id="SEX2" class="sex" style="height: 30px; width: 80px;"><option value="none" selected="selected">none</option><option value="Male">Male</option><option value="Female">Female</option>
</select></td><td><select id="site2" class="site" style="height: 30px; width: 80px;"><option value="none" selected="selected">none</option><option value="Left">Left</option><option value="Right">Right</option>
</select></td><td><input type="text" value="ภาษาไทย" name="ROL2" id="ROL2" class="span2 ROL" style="width:100;height:30;"></td>
<td><input type="text" value="ภาษาไทย" name="location2" id="location2" class="span2 location" style="width:100;height:30;"></td>
<td><input type="text" value="ภาษาไทย" name="diagnosis2" id="diagnosis2" class="span2 diagnosis" style="width:100;height:30;"></td>
<td><input type="text" value="benign" name="category2" id="category2" class="span2 category" style="width:100;height:30;"></td>
<td><input type="text" value="Osteoma" name="sub_category2" id="sub_category2" class="span2 sub_category" style="width:100;height:30;"></td>
<td></td><td><input type="button" value="Save" name="save" data-loading-text="Saving..." class="save btn btn-success btn-small" row="2" style="width:63;height:26;"></td>
<td><input type="button" value="Cancel" name="Cancel" class="cancel btn btn-primary btn-small" row="2" style="width:63;height:26;"></td>
</tr>
<tr id="rowText3">
<td>3</td>
<td id="hnText3">75348-46</td>
<td id="slidenoText3">466491</td>
<td id="date_biopsyText3">2013-05-22</td>
<td id="nameText3">สมชาย ดวงดี</td>
<td id="ageText3">42</td>
<td id="SEXText3">Male</td>
<td id="siteText3">Right</td>
<td id="ROLText3">elbow</td>
<td id="locationText3">foot</td>
<td id="diagnosisText3">OSAnecrosis 18</td>
<td id="categoryText3">malignant</td>
<td id="sub_categoryText3">Plasmacytoma</td>
<td id="PictureText3"><a class="fancybox" href="../img/Radiographic/XRAY/75348-46_377709_414934218602166_970630003_n.jpg" data-fancybox-group="75348-46" title="1">#1</a>&nbsp;<a class="fancybox" href="../img/Radiographic/XRAY/75348-46_clean-backgrounds-for-powerpoint.jpg" data-fancybox-group="75348-46" title="2">#2</a>&nbsp;</td>
<td><input type="button" value="Change" name="Change" class="change btn btn-warning btn-small" row="3"></td>
<td><input type="button" value="Remove" name="Remove" class="remove btn btn-danger btn-small" row="3"></td>
</tr>
<tr style="display:none;" id="rowChange3">
<td>3</td>
<td id="hn3">75348-46</td><td><input type="text" value="466491" name="slideno3" id="slideno3" class="span2 slideno" style="width: 70px;"></td>
<td><input type="text" value="2013-05-22" name="date_biopsy3" id="date_biopsy3" class="span2 date_biopsy hasDatepicker" style="width: 90px;"></td>
<td><input type="text" value="สมชาย ดวงดี" name="name3" id="name3" class="span2 name" style="width: 180px;"></td>
<td><input type="text" value="42" name="age3" id="age3" class="span2 age" style="width: 30px;"></td>
<td><select id="SEX3" class="sex" style="height: 30px; width: 80px;"><option value="none">none</option><option selected="selected" value="Male">Male</option><option value="Female">Female</option>
</select></td><td><select id="site3" class="site" style="height: 30px; width: 80px;"><option value="none">none</option><option value="Left" selected="selected">Left</option><option value="Right">Right</option>
</select></td><td><input type="text" value="elbow" name="ROL3" id="ROL3" class="span2 ROL" style="width:100;height:30;"></td>
<td><input type="text" value="foot" name="location3" id="location3" class="span2 location" style="width:100;height:30;"></td>
<td><input type="text" value="OSAnecrosis 18" name="diagnosis3" id="diagnosis3" class="span2 diagnosis" style="width:100;height:30;"></td>
<td><input type="text" value="malignant" name="category3" id="category3" class="span2 category" style="width:100;height:30;"></td>
<td><input type="text" value="Plasmacytoma" name="sub_category3" id="sub_category3" class="span2 sub_category" style="width:100;height:30;"></td>
<td><a class="fancybox" href="../img/Radiographic/XRAY/75348-46_377709_414934218602166_970630003_n.jpg" data-fancybox-group="75348-46" title="1">#1</a>&nbsp;<a class="fancybox" href="../img/Radiographic/XRAY/75348-46_clean-backgrounds-for-powerpoint.jpg" data-fancybox-group="75348-46" title="2">#2</a>&nbsp;</td><td><input type="button" value="Save" name="save" data-loading-text="Saving..." class="save btn btn-success btn-small" row="3" style="width:63;height:26;"></td>
<td><input type="button" value="Cancel" name="Cancel" class="cancel btn btn-primary btn-small" row="3" style="width:63;height:26;"></td>
</tr>
<tr id="rowText4">
<td>4</td>
<td id="hnText4">75348-46</td>
<td id="slidenoText4">466491</td>
<td id="date_biopsyText4">2013-05-22</td>
<td id="nameText4">สมชาย ดวงดี</td>
<td id="ageText4">42</td>
<td id="SEXText4">Male</td>
<td id="siteText4">Right</td>
<td id="ROLText4">elbow</td>
<td id="locationText4">foot</td>
<td id="diagnosisText4">OSAnecrosis 18</td>
<td id="categoryText4">malignant</td>
<td id="sub_categoryText4">Plasmacytoma</td>
<td id="PictureText4"><a class="fancybox" href="../img/Radiographic/XRAY/75348-46_377709_414934218602166_970630003_n.jpg" data-fancybox-group="75348-46" hn"75348-46_1" title="1">#1</a><i no="1" class="icon-trash"></i>&nbsp;<a class="fancybox" href="../img/Radiographic/XRAY/75348-46_image_1367847555243159.jpg" data-fancybox-group="75348-46" title="2">#2</a>&nbsp;</td>
<td><input type="button" value="Change" name="Change" class="change btn btn-warning btn-small" row="4"></td>
<td><input type="button" value="Remove" name="Remove" class="remove btn btn-danger btn-small" row="4"></td>
</tr>
<tr style="display:none;" id="rowChange4">
<td>4</td>
<td id="hn4">75348-46</td><td><input type="text" value="466491" name="slideno4" id="slideno4" class="span2 slideno" style="width: 70px;"></td>
<td><input type="text" value="2013-05-22" name="date_biopsy4" id="date_biopsy4" class="span2 date_biopsy hasDatepicker" style="width: 90px;"></td>
<td><input type="text" value="สมชาย ดวงดี" name="name4" id="name4" class="span2 name" style="width: 180px;"></td>
<td><input type="text" value="42" name="age4" id="age4" class="span2 age" style="width: 30px;"></td>
<td><select id="SEX4" class="sex" style="height: 30px; width: 80px;"><option value="none">none</option><option selected="selected" value="Male">Male</option><option value="Female">Female</option>
</select></td><td><select id="site4" class="site" style="height: 30px; width: 80px;"><option value="none">none</option><option value="Left" selected="selected">Left</option><option value="Right">Right</option>
</select></td><td><input type="text" value="elbow" name="ROL4" id="ROL4" class="span2 ROL" style="width:100;height:30;"></td>
<td><input type="text" value="foot" name="location4" id="location4" class="span2 location" style="width:100;height:30;"></td>
<td><input type="text" value="OSAnecrosis 18" name="diagnosis4" id="diagnosis4" class="span2 diagnosis" style="width:100;height:30;"></td>
<td><input type="text" value="malignant" name="category4" id="category4" class="span2 category" style="width:100;height:30;"></td>
<td><input type="text" value="Plasmacytoma" name="sub_category4" id="sub_category4" class="span2 sub_category" style="width:100;height:30;"></td>
<td><a class="fancybox" href="../img/Radiographic/XRAY/75348-46_377709_414934218602166_970630003_n.jpg" data-fancybox-group="75348-46" title="1">#1</a>&nbsp;<a class="fancybox" href="../img/Radiographic/XRAY/75348-46_image_1367847555243159.jpg" data-fancybox-group="75348-46" title="2">#2</a>&nbsp;</td>
<td><input type="button" value="Save" name="save" data-loading-text="Saving..." class="save btn btn-success btn-small" row="4" style="width:63;height:26;"></td>
<td><input type="button" value="Cancel" name="Cancel" class="cancel btn btn-primary btn-small" row="4" style="width:63;height:26;"></td>
</tr>
</tbody></table>
<input type="button" id="submit"/>
<button id="create-user">Create new user</button>
 
 <script type="text/javascript">
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

 </script>
</body>
</html>