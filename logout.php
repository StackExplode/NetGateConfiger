<?php

session_start();

if(isset($_SESSION["login"]) && $_SESSION["login"]==true)
{
	$_SESSION["login"] = false;
	header('Location: login.php');
	exit();
}

