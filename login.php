<?php

session_start();

if(isset($_SESSION["login"]) && $_SESSION["login"]==true)
{
	header('Location: main.php');
	exit();
}

$errtext="";

$method = $_SERVER["REQUEST_METHOD"];

if($method == "POST")
{

$postpass = $_POST["adminpass"];
	
	//$mypathfile = fopen("path.conf", "r") or die("Unable to open path file!");
$jsonpathfile = file_get_contents("/var/www/webdavroot/test/path.json");
$jsonpath = json_decode($jsonpathfile);
//fclose($mypathfile);

//echo $jsonpath->confpath;

// Read the JSON file  
$json = file_get_contents($jsonpath->confpath); 
  
// Decode the JSON file 
$json_data = json_decode($json); 

//print_r($json_data);


if($postpass === $json_data->adminpass)
{
	$_SESSION["login"] = true;
	header('Location: main.php');
	exit();
}
else
{
	$errtext="Wrong Password!";
}


}


?>

<html>
<head><title>NetGate Login</title></head>

<body>

<div>
	<form action="login.php" method="post">
		<span>Admin Password:</span>
		<span>
		<input id="adminpass" name="adminpass" type="password" />
		<span>

		<span>
		<input type="Submit" value="OK"/>
		<span>
	</form>
</div>

<p style="color: red;"><?php echo $errtext ?></p>
</body>


</html>
