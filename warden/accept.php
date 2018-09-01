<!DOCTYPE html>
<html>
<body>
	<?php
		include '../database.php';
		session_start();
		$outpassno = $_SESSION['out_no'];
		$enrolno = $_SESSION['enrol'];
		$sql1 = "UPDATE outpass SET status='accepted' WHERE outpassNo= $outpassno";
		$sql2 = "SELECT * FROM studentreg WHERE enrollmentNo= '$enrolno'";
		$sms = "Your outpass no. $outpassno has been accepted by your warden!";
		if (mysqli_query($conn, $sql1)) {
			if($result = mysqli_query($conn, $sql2)) {
				if(mysqli_num_rows($result) > 0){
					while($row = mysqli_fetch_array($result)){
						$contact = $row["ContactNoSelf"];
						$curl = curl_init();
						curl_setopt_array($curl, array(
						CURLOPT_URL => "http://api.msg91.com/api/sendhttp.php?sender=SMTOUT&route=4&mobiles=$contact&authkey=118547APg6ybN95acd2bef&country=91&message=$sms",
						CURLOPT_RETURNTRANSFER => true,
						CURLOPT_ENCODING => "",
						CURLOPT_MAXREDIRS => 10,
						CURLOPT_TIMEOUT => 30,
						CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
						CURLOPT_CUSTOMREQUEST => "GET",
						CURLOPT_SSL_VERIFYHOST => 0,
						CURLOPT_SSL_VERIFYPEER => 0,
					));

						$response = curl_exec($curl);
						$err = curl_error($curl);

						curl_close($curl);

						if ($err) {
						  echo "cURL Error #:" . $err;
						} else {
						  echo $response;
						}
					}
				}
			}
			header('Location: validate_outpass.php');
		}
	?>
</body>
</html>