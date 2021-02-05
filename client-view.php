<html>
<head>
<title>Client View</title>
<style type="text/css">
table { border: 2px solid #000000;
	background-color: #FFFFFF;
	font-family: "Noto Sans", sans-serif;
	margin-left: auto;
	margin-right: auto; }
	
th { border-bottom: 3px solid #000;
	 text-align: center; }
	
td { border-bottom: 1px solid #666;	}

</style>
</head>
<body>
<form action="client-view.php" method="post">
<?php
include('connect-mysql.php'); #connect to DB file
$sqlget = "SELECT appointments.appt_id, appointments.date, time_blk.time, time_blk.block_id FROM appointments 
INNER JOIN time_blk ON appointments.blk_id=time_blk.block_id WHERE appointments.client_id IS NULL AND appointments.date >=CURDATE() AND appointments.date <=(CURDATE() + 14) ORDER BY appointments.date, time_blk.block_id"; #retrieves info from DB Limits amount of appointments shows to today's date +14 days
$sqldata = mysqli_query($dbcon, $sqlget) or die('error retrieving the data'); #cannot connect error
echo "<table>";
echo "<tr><th>Date</th><th>Time Slot</th><th></th></tr>"; #start table
while($row = mysqli_fetch_array($sqldata, MYSQLI_ASSOC)) {
	$dat3=$row['appt_id'];
	echo "<tr>";
	echo "<td>".$row['date']."</td>"; #display date
	echo "<td>".$row['time']."</td>"; #display time block
	echo "<td><a href='/book-appt.php?id=$row[appt_id]'>Book Appointment</a></td>"; #link to book appt function using the id of the appt
	echo "</tr>";
	
	}
echo "</table>";
?>
</body>
</html>