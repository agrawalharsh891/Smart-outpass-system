<?php
session_set_cookie_params(0);
session_start();
$user_name = $_SESSION['user_name'];
$user_pass = $_POST['user_pass'];
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "smartout";
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO credentials(user_name, user_pass,type)
VALUES ('$user_name', '$user_pass','student')";	  


if ($conn->query($sql) === TRUE) {
	header("Location: index.php");
                    exit();
}
                
else {
    echo "Details Incorrect: " . $conn->error;
}

?>