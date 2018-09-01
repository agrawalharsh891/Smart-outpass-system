<html>
<head>
<title>Update Details</title>
<link rel="stylesheet" type="text/css" href="css/main.css">

</head>
</html>
<?php
session_set_cookie_params(0);
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "smartout";

// Variables Initialization
$EnrollmentNo = $_POST['EnrollmentNo'];
$FirstName = $_POST['FirstName'];
$LastName = $_POST['LastName'];
$Age = $_POST['Age'];
$Programme = $_POST['Programme'];
$Semester = $_POST['Semester'];
$HostelBlock = $_POST['HostelBlock'];
$Wing = $_POST['Wing'];
//$RoomNo = $_POST['RoomNo'];
$FloorNo = $_POST['FloorNo'];
$FlatNo = $_POST['FlatNo'];
$RoomNo = $_POST['RoomNo'];
$ParentName = $_POST['ParentName'];
$Address = $_POST['Address'];
$ContactNoSelf = $_POST['ContactNoSelf'];
$ContactNoParent = $_POST['ContactNoParent'];
$email = $_POST['email'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// sql to create table
$sql = "INSERT INTO studentreg (EnrollmentNo, FirstName,LastName, Age, Programme, Semester, HostelBlock, Wing, FloorNo, FlatNo, RoomNo, ParentName, Address, ContactNoSelf, ContactNoParent, email)
VALUES ('$EnrollmentNo','$FirstName','$LastName','$Age','$Programme','$Semester','$HostelBlock','$Wing','$FloorNo','$FlatNo','$RoomNo','$ParentName','$Address','$ContactNoSelf','$ContactNoParent','$email')";	  


if ($conn->query($sql) === TRUE) {
    $_SESSION['user_name'] = $EnrollmentNo;
	echo "
	<html>

		<body class=\"body\" style=\"background-image: url('Images/img3.jpg');\">
		<center>
			<form action=\"InsLoginCred.php\" method=\"post\">
				<br><h1><br>Registered Successfully</h1>
				<br/><br/><p><h2>Your Username is: $EnrollmentNo</h2></p><br/>
				<h2>Enter password: <input class=\"input2\" type=\"password\" name=\"user_pass\" placeholder=\"password\" required></h2><br><br><br>
				<input class=\"form-submit\" type=\"submit\" name=\"submit\" value=\"Finish\">
			</form>
		</center>
		</body>
	</html>";
;
} else {
    echo "Details Incorrect: " . $conn->error;
}
$conn->close();
?>
