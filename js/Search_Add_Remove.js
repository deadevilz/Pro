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