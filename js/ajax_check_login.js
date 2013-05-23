$('#login').click(function(){
	var username = $('#username').val();
	var password = $('#password').val();
	$('#message').html();
	$.ajax({
		type: 'POST',
		url:'../php/checklogin.php',
		data: 'username='+username+'&password='+password,
		success: function(data)
		{
			$('#message').html(data);
			if(data=='Login Success')
				window.location.replace("../php/choose.php");
		}
	}).error(function(){
		$('#message').html('server not responding');
	});


});