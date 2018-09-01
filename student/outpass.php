<html>
<head>
	<title>Outpass Request Form</title>
</head>
<body>
	<?php
		session_set_cookie_params(0);
		session_start();
		
		date_default_timezone_set("Asia/Kolkata");
	?>
	<h3>Hello! You can only request outpass for <?php echo date("d-m-Y", strtotime('tomorrow'))?></h3>
	<div class="container">  
		<form id="contact" action="request.php" method="post">
			<fieldset>
				<!--<input placeholder="Enrollment No." type="text" tabindex="1" name="enrol_no" required autofocus>-->
				<?php echo $_SESSION['user_name'];?>
			</fieldset>
			<fieldset>
				<input placeholder="Date for Outpass" type="date" tabindex="2" value="" name="out_date">
			</fieldset>
			<fieldset>
				<textarea placeholder="Purpose" tabindex="3" name="out_purpose" required></textarea>
			</fieldset>
			<fieldset>
				<button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
			</fieldset>
		</form>
	</div>
</body>
</html>