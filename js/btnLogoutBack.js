$("#back").click(function()
{
   	parent.history.back();
    return false;
});
$("#logout").click(function()
{
	window.location.href = "../php/login.php";
});