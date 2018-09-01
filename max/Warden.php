<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "smartout";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$room ="407";
$sql = "SELECT * FROM studentreg where RoomNo = $room";
$result = mysqli_query($conn, $sql);
if (mysqli_query($conn, $sql)) {
	if ($result = mysqli_query($conn, $sql)) {
		if (mysqli_num_rows($result) > 0) {
    		// output data of each row
	    	while($row = mysqli_fetch_array($result)) {
		        echo "Details: " . $row["EnrollmentNo"] . $row["FirstName"]. " " . $row["LastName"]. "<br>";
    		}
		}
	}
}
$conn->close();
?>
</body>
</html>