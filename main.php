<?php

session_start();

if(isset($_SESSION["login"]) && $_SESSION["login"]==true)
{

}
else
{
	header('Location: login.php');
	exit();
}
?>

<html>
<head><title>NetGate Setting</title></head>

<body>
	
<div>
<header>
<p>aaa</p>
</header>

<div>
<form action="setting.php" method="post">
<p><span>NetGate ID:</span><input name="gateid" /></p>
<p><span>Local IP:</span><input name="localip" /></p>
<p><span>Local Mask:</span><input name="localmask" /></p>
</form>
</div>


<footer>

</footer>
	
</div>
</body>

</html>

