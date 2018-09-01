<!DOCTYPE html>
<html>
<head>
	<title>Outpass Validation</title>
</head>
<body>
	<?php
		session_start();
		include '../database.php';
		date_default_timezone_set("Asia/Kolkata");
		$today = date("Y-m-d");
		$status = "pending";
		$tab = "SELECT * FROM `outpass` WHERE outpassDate = '$today' AND status = '$status'";
		if (mysqli_query($conn, $tab)) {
			echo '<table border="1px"><tr><th>Outpass No.</th><th>Enrollment No.</th><th>Date</th><th>Purpose</th><th>Status</th><th>Accept</th>';
			if($result = mysqli_query($conn, $tab)) {
				if(mysqli_num_rows($result) > 0){
					while($row = mysqli_fetch_array($result)){
						echo '<tr>
							<td>' . $row['outpassNo'] . '</td>
							<td>' . $row['enrollmentNo'] . '</td>
							<td>' . $row['outpassDate'] . '</td>
							<td>' . $row['purpose'] . '</td>
							<td>' . $row['status'] . '</td>';
							$_SESSION['out_no'] = $row['outpassNo'];
							$_SESSION['enrol'] = $row['enrollmentNo'];
						echo '<td><button onclick = "location.href = \'accept.php\'">Accept</button></td>';
					}
					echo '</table>';
		
				}
			}
		}
		else {
			echo "db connection error";
		}
		echo"<button type=\"button\" onclick=\"location.href = 'WardenLogin.php'\">Home</button>";
	?>
</body>
</html>