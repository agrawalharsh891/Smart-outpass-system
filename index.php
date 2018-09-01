<?php
  session_start();
?>
<!doctype html>
<html lang="en">
 <head>
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<title>Login</title>
</head>
 <body class="image">
	<center>
		<div class = "blue-block">
    		<form name = "login" class="form-signin" method="POST" action = "logincheck.php">
    		<br><br><br><br>
    		<img class = "icon" src="Images/img12.jpg">
	 		<h1>SMART OUTPASS SYSTEM<br> </h1>
			<select name="LoginType">
			<option value="1">Student</option>
			<option value="2">Warden</option>
			<option value="3">Guard</option>
			</select>
			<br><br><br><br>			
				<input class="input1" type="text" id="inputUser" name="inputUser" class="form-control" placeholder="User Name" required >
				<br><br><br>
				<input class="input1" type="password" id="inputPassword" name="inputPassword" class="form-control" placeholder="Password" required>
				<br><br><br>
				<?php        
					if(!empty($_REQUEST['login']) && $_REQUEST['login']=='error'){
						echo '<small id="passwordHelpInline" class="text-muted">
							  <font color="red">Wrong Email or Password !</font>
							  </small>';
					}
				?>
				<input class = "form-submit" type="submit" name="submit" value="Login">
				<br><br><br>
				 <h4>Not registered??? <a href = "StudentRegForm.php"> Register here... </a></h4>
				 </form>
	</div>
	</center>
   </body>
</html>
    