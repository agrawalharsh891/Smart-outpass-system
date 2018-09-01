<?php
session_start();
if(!isset($_SESSION['user_name']))
{
    // not logged in
    header('Location: index.php');
    exit();
}
?>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../css/main.css">
</head>
<body style="background-color:#2f8ece">
<!--<button type="button" onclick="location.href = 'outpass.php'">Accept Outpass</button>-->
<center><br>
<button class="form-sub" type="button" onclick="location.href = 'out.php'" >OUT Portal</button><br>
<button class="form-sub" type="button" onclick="location.href = 'in.php'" >IN Portal</button><br>
<button class="form-sub" type="button" onclick="location.href = '../logout.php'" >Logout</button><br>
</center>
</body>
</html>
