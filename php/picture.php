<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
	<title></title>
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
</head>
<body>
	<div id="dialog-form" title="Delete Picture">
	  	<form method="POST" class="well span8" id="picture_form"  name="picture_form" enctype="multipart/form-data">
			
		</form>
	</div>
	<input type="text" class="btn" id="hn"/>
	<input type="button" class="btn" id="button" />
	<script type="text/javascript">
		$(".fancybox").fancybox();

		
		$("#button").click(function(){
			$("#picture_form").html("");
			$.ajax
			({
				url:"http://localhost/pro/php/service_PicturePath.php",
				data:"hn="+"75348-46",
				type:"POST",
				dataType:"JSON",
				success:function(data)
				{
					//console.log(data);
					for(var i=0;i<data.length;i++)
					{
						$("#picture_form").append("<p><center><a class='fancybox' id='pic"+i+"' href='"+data[i].path+"' title='"+data[i].path+"'><img class='img-polaroid' src='"+data[i].path+"' alt='' height='50' width='100' /></a></center></p>");
						$("#picture_form").append("<p><center><a id='path"+i+"' class='btn disabled'>"+data[i].path+"</a></center></p>");
						$("#picture_form").append("<p><center><input id='del' class='deletePic btn btn-small' type='button' value='delete' row='"+i+"' path='"+data[i].path+"'/></center>")//<a class='deletePic btn btn-small' href='#' path='"+data[i].path+"' row='"+i+"' ><i class='icon-star icon-white'></i> Delete</a>
					}
				}
			});
		});

		$('#picture_form').delegate('input','click',function() {
			var path = $(this).attr('path');
			var row = $(this).attr('row');
			var $target = $(event.target);
			$.ajax({
				url:"http://localhost/pro/php/service_delete_picture.php",
				data:"picture_path="+path,
				type:"POST",
				success:function(data)
				{
					console.log(data);
					if(data=="การลบรูปสำเร็จ")
		       		{	$("#pic"+row).remove();
		       			$("#path"+row).remove();
		       			$target.remove();
		       		}
				}
			})
        return false;
    	});
	</script>
</body>
</html>