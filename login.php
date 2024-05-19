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
$jsonpathfile = file_get_contents("path.json");
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
<head>
  <title>NetGate Login</title>
  <link rel="stylesheet" href="main.css" />
</head>

<body>

<div class="allcenter">

	<p><h1>Welcome to Netgate Config Page!</p></h1>
	<form action="login.php" method="post">
		<span class="passspan">
		<input id="adminpass" name="adminpass" placeholder="Input admin password..." type="password" class="passtextbox" />
		<span>

		<span>
		<input type="Submit" value="OK" class="button" />
		<span>
	</form>
	<p style="color: red;"><?php echo $errtext ?></p>
</div>



<footer>

<p>Copyleft by Jennings @2024 with GPLv3 licence. All rights reversed!</p>
</footer>

</body>


</html>
