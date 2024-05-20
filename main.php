<?php

require_once( 'checklogin.php' );

CheckLogin();

$jsonpathfile = file_get_contents("path.json");
$jsonpath = json_decode($jsonpathfile);
//fclose($mypathfile);

//echo $jsonpath->confpath;

// Read the JSON file  
$json = file_get_contents($jsonpath->confpath); 
  
// Decode the JSON file 
$json_data = json_decode($json); 


?>

<html>
<head>
	<title>NetGate Config</title>
	<link rel="stylesheet" href="main.css" />
</head>

<body>

<div>
<header>
<div class="headdiv"><h1>Edit the configurations</h1></div>
</div>
</header>
</div>




<div class="confmain">
<form action="setting.php" method="post">
<p><span>NetGate ID:</span><input name="gateid" type="text" value="<?php echo $json_data->gateid ?>" /></p>
<p><span>NetGate Name:</span><input name="gatename" type="text" value="<?php echo $json_data->gatename ?>" /></p>
<p><span>Local IP:</span><input name="localip" type="text" value="<?php echo $json_data->localip ?>"/></p>
<p><span>Local Mask:</span><input name="localmask" type="text" value="<?php echo $json_data->localmask ?>"/></p>
<p><span>Server IP:</span><input name="serverip" type="text" value="<?php echo $json_data->serverip ?>"/></p>
<p><span>Server Port:</span><input name="serverport" type="text" value="<?php echo $json_data->serverport ?>"/></p>
<p><span>Server Password:</span><input name="serverpass" type="text" value="<?php echo $json_data->serverpass ?>" /></p>
<p><span>Admin Password:</span><input name="adminpass" type="text" value="<?php echo $json_data->adminpass ?>"/></p>


<p style="margin-top: 60px;">

<span><input type="submit" value="Write Config" class="button" style="margin-left: 60px;"></span>
<span><a href="logout.php"><input type="button" value="Logout" class="button" style="float: right;margin-right: 60px;"></a></span>
</p>
</form>
</div>


<footer>
<p>Copyleft by Jennings @2024 with GPLv3 licence. All rights reversed!</p>
</footer>
	
</div>
</body>

</html>

