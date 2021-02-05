<html>
<head>
<title>Display Data into DB</title>

<style type="text/css">
table {
	border: 2px solid red;
	background-color: #FFC;
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

<h1>Display Data from DB</h1>

<?php

include('connect-mysql.php');

$sqlget = "SELECT * FROM client";
$sqldata = mysqli_query($dbcon, $sqlget) or die('error retrieving the data');

echo "<table>";
echo "<tr><th>ID</th><th>First Name</th><th>Last Name</th></tr>";

while($row = mysqli_fetch_array($sqldata, MYSQLI_ASSOC)) {
	echo "<tr><td>";
	echo $row['client_id'];
	echo "</td><td>";
	echo $row['first_name'];
	echo "</td><td>";
	echo $row['last_name'];
	echo "</td>";

	echo "</tr>";
	}
echo "</table>";

?>


</body>
</html>