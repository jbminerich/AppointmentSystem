<html>
<head>
<title>Display All Appointments</title>
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
<h1>View Upcoming Appointments</h1>
<form action="client-view.php" method="post">
<?php
include('connect-mysql.php'); #connect to DB
$sqlget = "SELECT appointments.appt_id, appointments.date, time_blk.time, client.client_id, client.first_name, client.last_name, 
client.email_address, client.phone_number FROM appointments INNER JOIN client ON appointments.client_id=client.client_id
INNER JOIN time_blk ON appointments.blk_id=time_blk.block_id WHERE appointments.date >=CURDATE() && appointments.date <=CURDATE()+14
ORDER BY appointments.date, time_blk.block_id"; #SQL query to retrieve info from DB and join tables together
$sqldata = mysqli_query($dbcon, $sqlget) or die('error retrieving the data');
echo "<table>"; #display Table
echo "<tr><th>Appt ID</th><th>Date</th><th>Time Slot</th><th>Client ID</th><th>First Name</th><th>Last Name</th><th>Email Address</th><th>Phone Number</th></tr>";
while($row = mysqli_fetch_array($sqldata, MYSQLI_ASSOC)) {
	$apptid = $row['appt_id'];
	$clientid = $row['client_id'];
	echo "<tr>";
	echo "<td>".$row['appt_id']."</td>";
	echo "<td>".$row['date']."</td>";
	echo "<td>".$row['time']."</td>";
	echo "<td>".$row['client_id']."</td>";
	echo "<td>".$row['first_name']."</td>";
	echo "<td>".$row['last_name']."</td>";
	echo "<td>".$row['email_address']."</td>";
	echo "<td>".$row['phone_number']."</td>";
	echo "<td><a href='cancel-appointment.php?id=$apptid'>Cancel Appointment</a></td>";
	echo "</tr>";
	}
echo "</table>";	
?>
<input type="hidden" name="passid" value="<?php echo $apptid; ?>"/>	
<input type="hidden" name="passclient" value="<?php echo $clientid; ?>"/>	
<p><input type=button value="Go Back" onClick="parent.location='/view-appointments/'"></p>
</body>
</html>