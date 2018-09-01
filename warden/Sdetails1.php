<!DOCTYPE html>
<html>
<title>Hostel Rooms</title>
<body>

<h2>Select a room</h2>
Floors:&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
Flat No.:&nbsp &nbsp &nbsp &nbsp &nbsp
Room No.:

<form action="Sdetails2.php" method="post">
  <select name="FloorNo">
    <option value="0">Ground Floor</option>
    <option value="1">First Floor</option>
    <option value="2">Second Floor</option>
    <option value="3">Third Floor</option>
    <option value="4">Fourth Floor</option>
	<option value="5">Fifth Floor</option>
  </select>
  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
 

   <select name="FlatNo">
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
 <select name="RoomNo">
    <option value="1">A</option>
    <option value="2">B</option>
    <option value="3">C</option>
 </select>
  <input type="submit" name="search" value="search" >
  <br><br>
</form>

</body>
</html>
