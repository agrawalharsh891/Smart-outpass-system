<!DOCTYPE html>
<?php
	session_set_cookie_params(0);
	session_start();
?>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../css/main.css">
</head>
<body style="background-color:#2f8ece" >
	<center>
		<br><br><br><br>
		<button class="form-sub" type="button" onclick="location.href = 'StudentLogin.php'">Home</button>
		<br><br><br><br>
		<button class="form-sub" type="button" onclick="location.href = '../logout.php'">Logout</button>

	</center>

</body>
</html>

<?php	
	$host = "localhost";
	$username = "root";
	$password = "";
	$dbname = "smartout";
	$dbconn = mysqli_connect($host, $username, $password, $dbname);
	if($dbconn == true) {
		date_default_timezone_set("Asia/Kolkata");
		$outpassno = 1000001;
		$enrol = $_SESSION['user_name'];
		$date = $_POST['out_date'];
		$tomorrow = date("Y-m-d", strtotime('tomorrow'));
		if($date != $tomorrow) {
			echo "Sorry! You can only request the outpass for tomorrow";
		}
		elseif(date("D", strtotime($tomorrow)) == "Fri" or date("D", strtotime($tomorrow)) == "Sat"){
			$purpose = $_POST['out_purpose'];
			$status = "pending";

			$sql1 = "SELECT * FROM outpass";
			if (mysqli_query($dbconn, $sql1)) {
				if($result = mysqli_query($dbconn, $sql1)) {
					if(mysqli_num_rows($result) >= 0){
						$newid = 1;
						while($row = mysqli_fetch_array($result)){
							
							$newid = $newid + 1;
						}
						$outpassno += $newid-1;
						$sql2 = "INSERT INTO outpass (outpassNo, enrollmentNo, outpassDate, purpose, status) VALUES ('$outpassno', '$enrol', '$date', '$purpose', '$status')";
						$sql3 = "SELECT * FROM outpass WHERE enrollmentNo = '$enrol' AND outpassDate = '$date'";
						if (mysqli_query($dbconn, $sql3)) {
							if ($result = mysqli_query($dbconn, $sql3)) {
								if(mysqli_num_rows($result) > 0) {
									echo "You have already requested outpass for this date";
								}
								else {
									if (mysqli_query($dbconn, $sql2)) {
										echo "Outpass successfully requested. Please wait for the warden to approve it.<br>Your Outpass no. is: ".$outpassno."<br><br>";
										echo "<html><body><a href = \" ../StudentLogin.php\"> Go Back </a></body></html>";
									}
								}
							}
						}
					}
				}
			}
		}
		else {
			echo "Request outpass only for Saturday or Sunday";
		}
	}
mysqli_close($dbconn);
?>