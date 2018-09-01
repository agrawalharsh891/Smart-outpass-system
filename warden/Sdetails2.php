
<?php
    if(isset($_POST['search'])){
        include_once '../database.php';
		$FloorNo = $_POST['FloorNo'];
		$FlatNo = $_POST['FlatNo'];
		$RoomNo = $_POST['RoomNo'];
		
		$sql = "SELECT * FROM studentreg WHERE FloorNo='$FloorNo' &&FlatNo='$FlatNo' && RoomNo='$RoomNo'";
		
		$result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);
        if($resultCheck >0)
        {
			echo"<html>
			<head>
			<style>
			table, th, td 
			{
				border: 1px solid black;
				border-collapse: collapse;
			}
			th, td
			{
			padding: 15px;
			text-align: left;
			}
			table#t01 
			{
				width: 100%;    
				background-color: #f1f1c1;
			}
			</style>
			</head>
			<body>
			
			<table id=\"t01\">
			<tr>
			<th>Enrollment Number</th>
			<th>First Name</th>
			<th>Last Name</th>
			<th>Age</th>
			<th>Programme</th>
			<th>Semester</th>
			<th>Hostel Block</th>
			<th>Wing</th>
			<th>Floor Number</th>
			<th>Flat Number</th>
			<th>Room Number</th>
			<th>Parent Name</th>
			<th>Address</th>
			<th>Your Contact Number</th>
			<th>Parent's Contact Number</th>
			<th>Email Id</th>
			</tr>";
			while($row = mysqli_fetch_assoc($result))
			{
				echo"
				<tr>
				<td>".$row['EnrollmentNo']."</td>
				<td>".$row['FirstName']."</td>
				<td>".$row['LastName']."</td>
				<td>".$row['Age']."</td>
				<td>".$row['Programme']."</td>
				<td>".$row['Semester']."</td>
				<td>".$row['HostelBlock']."</td>
				<td>".$row['Wing']."</td>
				<td>".$row['FloorNo']."</td>
				<td>".$row['FlatNo']."</td>
				<td>".$row['RoomNo']."</td>
				<td>".$row['ParentName']."</td>
				<td>".$row['Address']."</td>
				<td>".$row['ContactNoSelf']."</td>
				<td>".$row['ContactNoParent']."</td>
				<td>".$row['email']."</td>
				</tr>";
			}
			
				echo"</table>
			</body>
			</html>";			
        
		}
		else
		{
			echo"No student register in this room no.";
		}
		echo"<button type=\"button\" onclick=\"location.href = 'WardenLogin.php'\">OK</button>";
		
		
	}
	else
	{
		
			header("Location: Hostel.php");
			exit();
	}
?>
			
        