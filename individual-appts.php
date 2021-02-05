<html>
<head>
<title>View Individual Appointments</title>

<style type="text/css">
table { border: 2px solid #000000;
	background-color: #FFFFFF;
	font-family: "Noto Sans", sans-serif;
 }
	
th { border-bottom: 3px solid #000;
	 text-align: center; }
	
td { border-bottom: 1px solid #666;	}

</style>
</head>
<body>

<h1>View Individual Appointments</h1>

<?php

include('connect-mysql.php'); #connect to DB

$sqlget = "SELECT * FROM client WHERE client_id='$_GET[id]'"; #gather all data from client table
$sqldata = mysqli_query($dbcon, $sqlget) or die('error retrieving the data');

echo "<table>"; #create table to display info
echo "<tr><th>ID</th><th>First Name</th><th>Last Name</th><th>Email Address</th><th>Phone Number</th></tr>";

while($row = mysqli_fetch_array($sqldata, MYSQLI_ASSOC)) {
	echo "<tr><td>";
	echo $row['client_id']; #display client ID from DB
	echo "</td><td>";
	echo $row['first_name']; #display first name from DB
	echo "</td><td>";
	echo $row['last_name']; #display last name from DB
	echo "</td>";
	echo "<td>";
	echo $row['email_address']; #display email from DB
	echo "</td>";
	echo "<td>";
	echo $row['phone_number']; #display phone number from DB
	echo "</td>";
	echo  "<td><a href='delete.php?id=$_GET[id]'>Delete</a></td>";
	echo  "<td><a href='edit.php?id=$_GET[id]'>Edit</a></td>";
	echo "</tr>";
	}
	echo "</table>";
	echo "<br><br>";
	echo "<table>"; #display Table
	echo "<tr><th>Appt ID</th><th>Date</th><th>Time Slot</th></tr>";


$sqlget2 = "SELECT appointments.appt_id, appointments.date, time_blk.time, time_blk.block_id FROM appointments 
INNER JOIN time_blk ON appointments.blk_id=time_blk.block_id WHERE appointments.client_id='$_GET[id]'  ORDER BY appointments.date, time_blk.block_id"; #gather all data from client table
$sqldata2 = mysqli_query($dbcon, $sqlget2) or die('error retrieving the data');
while($row = mysqli_fetch_array($sqldata2, MYSQLI_ASSOC)) {
	$apptid = $row['appt_id'];

	echo "<tr>";
	echo "<td>".$row['appt_id']."</td>";
	echo "<td>".$row['date']."</td>";
	echo "<td>".$row['time']."</td>";
	echo "<td><a href='cancel-appointment.php?id=$apptid'>Cancel Appointment</a></td>";
	echo "</tr>";
	
	}
echo "</table>";



?>

	<br><input type=button value="Go Back" onClick="parent.location='/display-data.php/'">
	<input type="hidden" name="passid" value="<?php echo $apptid; ?>"/>	

</body>
</html>
