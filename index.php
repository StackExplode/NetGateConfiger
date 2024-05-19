<?php

session_start();

//$mypathfile = fopen("path.conf", "r") or die("Unable to open path file!");
$jsonpathfile = file_get_contents("/var/www/webdavroot/test/path.json");
$jsonpath = json_decode($jsonpathfile);
//fclose($mypathfile);

//echo $jsonpath->confpath;

// Read the JSON file  
$json = file_get_contents($jsonpath->confpath); 
  
// Decode the JSON file 
$json_data = json_decode($json,true); 
  
// Display data 
//print_r($json_data); 

if(isset($_SESSION["login"]) && $_SESSION["login"]==true)
{
	header('Location: main.php');
	exit();
}
else
{
	header('Location: login.php');
	exit();
}
