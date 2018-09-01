<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "smartout";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// sql to create table
$sql = "CREATE TABLE StudentReg (
	EnrollmentNo VARCHAR(12) NOT NULL PRIMARY KEY,
	FirstName VARCHAR(30) NOT NULL,
 	LastName VARCHAR(30) NOT NULL,
	Age INT (3) NOT NULL,
	Programme VARCHAR(30) NOT NULL,
	Semester INT (2) NOT NULL,
	HostelBlock INT (1) NOT NULL,
	Wing VARCHAR (1) NOT NULL,
	RoomNo VARCHAR(4) NOT NULL,
	ParentName VARCHAR(30) NOT NULL,
	Address VARCHAR(100) NOT NULL,
	ContactNoSelf INT(10) NOT NULL,
	ContactNoParent INT(10) NOT NULL,
	email VARCHAR(50),
	reg_date TIMESTAMP
	  
)";

if ($conn->query($sql) === TRUE) {
    echo "Table StudentReg created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>
