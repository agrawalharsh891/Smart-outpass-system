<!DOCTYPE HTML>  
<html>
<body>  

<?php
	session_start();
	// define variables and set to empty values
	$out_no = "";
	if (empty($_POST["out_no"])) {
	    $out_no = "";
	  } else {
	    $out_no = test_input($_POST["out_no"]);
	  }

	function test_input($data) {
	  $data = trim($data);
	  $data = stripslashes($data);
	  $data = htmlspecialchars($data);
	  return $data;
	}

?>

<h2>Outgoing Student</h2>
<p></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
	Outpass No. <input type="text" name="out_no" value="<?php echo $out_no;?>">
	<input type="submit" name="submit" value="Submit">  
</form>

<?php
	include '../database.php';
	try {
		$sql1 = "SELECT status FROM outpass WHERE outpassNo = $out_no";
		if($result = mysqli_query($conn, $sql1)) {
			if(mysqli_num_rows($result) > 0){
				while($row = mysqli_fetch_array($result)){
					if ($row['status'] == "accepted") {
						$use = "out";
						$sql2 = "UPDATE outpass SET status = '$use' WHERE outpassNo = '$out_no'";
						if (mysqli_query($conn, $sql2)) {
							echo "<h4>Accepted!</h4>";
						}
					}
					else if ($row['status'] == "out") {
						echo "<h4>Outpass already used!</h4>";
					}
					else {
						echo "<h4>Outpass not issued!</h4>";
					}
				}
			}
			else {
				echo "Invalid Outpass No.";
			}
		}
	}
	catch  	(Exception $e) {
		echo "Some error occured, please try again";
	}
	echo"<br><br><button type=\"button\" onclick=\"location.href = 'GaurdLogin.php'\">OK</button>";
		
?>


</body>
</html>