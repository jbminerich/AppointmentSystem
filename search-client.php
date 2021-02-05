<?php
include('connect-mysql.php');


if(isset($_GET['search']))
{
$key=$_GET["search"];  //key=pattern to be searched

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$result=mysqli_query($dbcon,"SELECT * FROM `client` WHERE `first_name` LIKE '%{$key}%'"); 


echo "<table>"; #create table to display info
echo "<tr><th>ID</th><th>First Name</th><th>Last Name</th></tr>";
	
while($row=mysqli_fetch_assoc($result))
{
// Print your search variables 
	echo "<tr><td>";
	echo $row['client_id'];
	echo "</td><td>";
	echo $row['first_name'];
	echo "</td><td>";
	echo $row['last_name'];
	echo "</td></tr>";
	echo "</table>";
	
}

}
	
	
mysql_close();	


?>