<html>
<head>
<title>Display All Clients</title>
<style type="text/css">
table { border: 2px solid #000000;
	background-color: #FFFFFF;
	font-family: "Noto Sans", sans-serif; }	
th { border-bottom: 3px solid #000;
	 text-align: center; }	
td { border-bottom: 1px solid #666;	}
</style>
</head>
<body>
<h1>Search for Client</h1>
<p>Note: Search by first name, last name, phone number, or email.</p>
<form method="GET" action="">
<input type="text" name="search"/>
<input type="submit" value="Search">
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
$result=mysqli_query($dbcon,"SELECT * FROM `client` WHERE `first_name` LIKE '%{$key}%'
OR `last_name` LIKE '%{$key}%'
OR `email_address` LIKE '%{$key}%'
OR `phone_number` LIKE '%{$key}%'"); 
echo "<table>"; #create table to display info
echo "<tr><th>ID</th><th>First Name</th><th>Last Name</th></tr>";	
while($row=mysqli_fetch_assoc($result))
{
// Print your search variables 
	echo "<tr><td>";
	echo $row['client_id']; #display client ID from DB
	echo "</td><td>";
	echo $row['first_name']; #display first name from DB
	echo "</td><td>";
	echo $row['last_name']; #display last name from DB
	echo "</td>";
	echo "<td><a href='/individual-appts.php?id=$row[client_id]'>View More</a></td>";
	echo "</tr>";
}
	echo "</table>";
}

?>
	<br><input type=button value="Go Back" onClick="parent.location='/view-appointments/'">

	<h1>Display All Clients</h1>

<?php

include('connect-mysql.php'); #connect to DB

$sqlget = "SELECT * FROM client ORDER BY client_id"; #gather all data from client table
$sqldata = mysqli_query($dbcon, $sqlget) or die('error retrieving the data');
echo "<br>";
echo "<table>"; #create table to display info
echo "<tr><th>ID</th><th>First Name</th><th>Last Name</th></tr>";
while($row = mysqli_fetch_array($sqldata, MYSQLI_ASSOC)) {
	echo "<tr><td>";
	echo $row['client_id']; #display client ID from DB
	echo "</td><td>";
	echo $row['first_name']; #display first name from DB
	echo "</td><td>";
	echo $row['last_name']; #display last name from DB
	echo "</td>";
	echo "<td><a href='/individual-appts.php?id=$row[client_id]'>View More</a></td>";
	echo "</tr>";
	}
echo "</table>";
	#mysql_close();	
?>
	<br><input type=button value="Go Back" onClick="parent.location='/view-appointments/'">
</body>
</html>