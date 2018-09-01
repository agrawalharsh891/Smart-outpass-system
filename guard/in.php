<!DOCTYPE HTML>  
<html>
<body>  

<?php
	session_start();
	// define variables and set to empty values
	$in_no = "";
	if (empty($_POST["in_no"])) {
	    $in_no = "";
	  } else {
	    $in_no = test_input($_POST["in_no"]);
	  }

	function test_input($data) {
	  $data = trim($data);
	  $data = stripslashes($data);
	  $data = htmlspecialchars($data);
	  return $data;
	}

?>

<h2>Incoming Student</h2>
<p></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
	Outpass No. <input type="text" name="in_no" value="<?php echo $in_no;?>">
	<input type="submit" name="submit" value="Submit">  
</form>

<?php
	include '../database.php';
	try {
		$sql1 = "SELECT status FROM outpass WHERE outpassNo = $in_no";
		if($result = mysqli_query($conn, $sql1)) {
			if(mysqli_num_rows($result) >= 0){
				while($row = mysqli_fetch_array($result)){
					if ($row['status'] == "out") {
						$use = "used";
						$sql2 = "UPDATE outpass SET status = '$use' WHERE outpassNo = '$in_no'";
						if (mysqli_query($conn, $sql2)) {
							echo "<h4>Entry allowed!</h4>";
						}
					}
					else {
						echo "<h4>Outpass not verified!</h4>";
					}
				}
			}
		}
	}
	catch  	(Exception $e) {
		echo "Some error occured, please try again";
	}
	echo"<button type=\"button\" onclick=\"location.href = 'GaurdLogin.php'\">OK</button>";
		
?>

</body>
</html>