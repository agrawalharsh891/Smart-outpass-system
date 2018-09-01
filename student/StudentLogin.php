<?php
session_set_cookie_params(0);
session_start();
if(!isset($_SESSION['user_name']))
{
    // not logged in
    header('Location: index.php');
    exit();
}
?>
<!doctype html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../css/main.css">
</head>
<body style="background-color:#2f8ece" >
	<center>
		<br><br><br><br>
		<button class="form-sub" type="button" onclick="location.href = 'outpass.php'">Request Outpass</button>
		<br><br><br><br>
		<button class="form-sub" type="button" onclick="location.href = '../logout.php'">Logout</button>

	</center>

</body>
</html>
