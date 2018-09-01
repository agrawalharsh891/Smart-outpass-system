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
	<center>
	<br>
<button class="form-sub" type="button" onclick="location.href = 'Sdetails1.php'">Student Details</button>
<br>
<button class="form-sub" type="button" onclick="location.href = 'validate_outpass.php'">Accept Outpass</button>
<br>
<button class="form-sub" type="button" onclick="location.href = '../logout.php'">Logout</button>
</center>
</body>
</html>
