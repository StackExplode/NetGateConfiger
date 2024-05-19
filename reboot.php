<?php

require_once( 'checklogin.php' );

CheckLogin();

$jsonpathfile = file_get_contents("path.json");
$jsonpath = json_decode($jsonpathfile);

exec($jsonpath->rebootscript);

?>



<html>
	<head>
		<title>Rebooting...</title>
		<link rel="stylesheet" href="main.css" />
	</head>
<body>

	<div class="allcenter">
		<h1>System is rebooting...</h1>
		<h3>Please wait for a moment and reopen <a href="main.php">config page</a>.</h3>

	</div> 

<footer>

<p>Copyleft by Jennings @2024 with GPLv3 licence. All rights reversed!</p>
</footer>

</body>

</html>
