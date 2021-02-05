<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Search for Client</title>
	<style type="text/css">
table {
	border: 2px solid #06009C;
	background-color: #E4E4DB;
	}
	
th {
	border-bottom: 5px solid #000;
	}
	
td {
	border-bottom: 2px solid #666;
	}
	
</style>
</head>

<body>
<h1>Search for Client</h1>

<form method="GET" action="">
<input type="text" name="search"/>
<input type="submit" value="search">
</form>
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
	echo "</td><td>";
	
	
	echo "</td></tr>";

	
}
	echo "</table>";
}
	
	
mysql_close();	


?>


</body>
	
	
	
</html>
