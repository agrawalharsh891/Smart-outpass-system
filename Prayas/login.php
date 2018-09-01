<?php
	$type = $_POST['logintype'];
	$id = $_POST['login_id'];
	$pass = $_POST['login_pass'];
	if ($type == "warden") {
		echo "warden";
	}
?>