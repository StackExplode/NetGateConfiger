<?php

require_once( 'checklogin.php' );

CheckLogin();

$jsonpathfile = file_get_contents("path.json");
$jsonpath = json_decode($jsonpathfile);

$arr = array(
	"gateid" => $_POST['gateid'],
	"localip" => $_POST['localip'],
	"localmask" => $_POST['localmask'],
	"serverip" => $_POST['serverip'],
	"serverport" => $_POST['serverport'],
	"adminpass" => $_POST['adminpass'],
);

$json_str = json_encode($arr,JSON_PRETTY_PRINT);

file_put_contents($jsonpath->confpath,$json_str);

$rst = "Write config success!"
?>

<html>
	<head>
		<title>Config Result</title>
		<link rel="stylesheet" href="main.css" />
	</head>
<body>

	<div class="allcenter">
		<h1><?php echo $rst ?> </h1>
		<h3>You should reboot to make config take effect!</h3>
		<p>
			<span><a href="reboot.php"><input type="button" value="Reboot Now" class="button" style="margin-right: 20px;"></a></span>
			<span><a href="main.php"><input type="button" value="Back to Config" class="button"></a></span>
		</p>

	</div> 


<footer>

<p>Copyleft by Jennings @2024 with GPLv3 licence. All rights reversed!</p>
</footer>
</body>

</html>