<form method="post" class="lofasz">
<input type="submit" class="button" id="yolocska" name="hova" style="width:100px; height:100px;" value="Fel">
<input type="submit" id="yolocska" name="hova" style="width:100px; height:100px;" value="Le">
<input type="submit" id="yolocska" name="hova" style="width:100px; height:100px;" value="Nemit">
</form>
<?php
	$iphone = strpos($_SERVER['HTTP_USER_AGENT'],"iPhone");
	$android = strpos($_SERVER['HTTP_USER_AGENT'],"Android");
	$palmpre = strpos($_SERVER['HTTP_USER_AGENT'],"webOS");
	$berry = strpos($_SERVER['HTTP_USER_AGENT'],"BlackBerry");
	$ipod = strpos($_SERVER['HTTP_USER_AGENT'],"iPod");

	if ($iphone || $android || $palmpre || $ipod || $berry )
	{
		echo '<meta name="viewport" content="width=device-width, user-scalable=no" />';
		echo '<link rel="stylesheet" type="text/css" href="style.css" />';
	}
?>
<?php 		
	if(isset($_POST['hova']) && $_POST['hova']!='')
	{
		switch($_POST['hova'])
		{
			case "Fel":
			system('nircmd.exe changesysvolume 10000');
			break;
			
			case "Le":
			system('nircmd.exe changesysvolume -10000');
			break;
			
			case "Nemit":
			system('nircmd.exe mutesysvolume 2');
			break;
			
		}
	}

?>
