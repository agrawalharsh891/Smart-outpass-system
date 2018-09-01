<!DOCTYPE html>
<html>
<head>
<title>Update Details</title>
<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body class="body">
	<form action="InsStuReg.php" method="post">
  	  <table align="center">
  	  	<br><br>
	  <tr>
	  <td>Enrollment No.:</td>
	  <td><input class="input2" type="text" name="EnrollmentNo" required >
	  </td>
	  </tr>
	  <tr>
	  <td>First Name:</td>
 	  <td><input class="input2" type="text" name="FirstName" required >
	  </td>
	  </tr>
	  <tr>
	  <td>Last Name:</td>
	  <td><input class="input2" type="text" name="LastName" required >
	  </td>
	  </tr>
	  <tr>
	  <td>Age:</td>
	  <td><input class="input2" type="text" name="Age" required >
	  </td>
	  </tr>
	  <tr>
	  <td>Programme:</td>
	  <td><input class="input2" type="text" name="Programme" required >
	  </td>
	  </tr>
	  <tr>
	  <td>Semester:</td>
	  <td><input class="input2" type="text" name="Semester" required >
	  </td></tr>
	  <tr>
	  <td>Hostel Block:</td>
	  <td><select class="input2" name="HostelBlock">
	  <option value="1">H-1</option>
	  <option value="2">H-2</option>
	  <option value="3">H-3</option>
	  <option value="4">H-4</option>
	  <option value="5">H-5</option>
	  </select>
	  </td>
	  </tr>
	  <tr>
	 <!-- <input type="text" name="HostelBlock">-->
	  
	  <td>Wing:</td>
	  <td><input class="input2" type="text" name="Wing" required ></td>
	  </tr>
	  <tr>
	  
	  <td>Room No:</td>
	  <td>
	  <select  class="input2" name="FloorNo">
    <option value="0">Ground Floor</option>
    <option value="1">First Floor</option>
    <option value="2">Second Floor</option>
    <option value="3">Third Floor</option>
    <option value="4">Fourth Floor</option>
	<option value="5">Fifth Floor</option>
  </select>
  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
 

   <select class="input2" name="FlatNo">
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
	<option value="6">6</option>
    <option value="7">7</option>
    <option value="8">8</option>
    <option value="9">9</option>
    <option value="10">10</option>
    <option value="11">11</option>
    <option value="12">12</option>
    <option value="13">13</option>
    <option value="14">14</option> 
 </select>
 &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
 <select class="input2" name="RoomNo">
    <option value="1">A</option>
    <option value="2">B</option>
    <option value="3">C</option>
 </select>
	  <!--<input type="text" name="RoomNo" required >-->
	  </td>
	  </tr>
	  <tr>
	  <td>Parent Name/ Local Guardian:</td>
	  <td><input class="input2" type="text" name="ParentName" required >
	  </td>
	  </tr>
	  <tr>
	  <td>Address:</td>
	  <td><input class="input2" type="text" name="Address" required ></td>
	  </tr>
	  <tr>
	  <td>Contact No:<td></tr>
	  <tr>
	  <td>Self:</td>
	  <td><input class="input2" type="text" name="ContactNoSelf" required >
	  </td>
	  </tr>
	  <tr>
	  <td>Parent's:</td>
	  <td><input class="input2" type="text" name="ContactNoParent" required >
	  </td>	  
	  </tr>
	  <tr>
	  <td>Email:</td>
	  <td><input class="input2" type="text" name="email" required ></td>
	  </tr>
	  <tr><td></td>
	  </tr>
	  <tr>
	  </tr>
	  <tr>
	  <td></td>
	  <td><input class="form-submit" type="submit" value="Submit"></td>
	  <td></td>
	  </tr>
	</form>
	
</body>
</html>
