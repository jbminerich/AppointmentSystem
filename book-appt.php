<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Appointment Confirmation</title>
	<h1>Booking Confirmation</h1>
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
	
<!-- 
Purpose:
Show Date, Time Slot of the appointment we selected
Enter in our details which creates a client_id
Book Appt which assigns the client ID to that appt
Display Confirmation.
-->
	
<?php
	
include('connect-mysql.php'); #connect to DB

$sqlget = "SELECT appointments.appt_id, appointments.date, time_blk.time, time_blk.block_id FROM appointments 
INNER JOIN time_blk ON appointments.blk_id=time_blk.block_id WHERE appt_id='$_GET[id]'"; #gather all data from client table
	
$sqldata = mysqli_query($dbcon, $sqlget) or die('error retrieving the data');

echo "<table>"; #create table to display info
echo "<tr><th>Date</th><th>Time Slot</th></tr>";

while($row = mysqli_fetch_array($sqldata, MYSQLI_ASSOC)) {
	echo "<tr><td>";
	echo $row['date']; #display date from DB
	echo "</td><td>";
	echo $row['time']; #display ftime from DB
	echo "</td>";
	echo "</tr>";
	}
	echo "</table>";
	echo "<br><br>";
	echo "<table>"; #display Table

	$passid = $_GET[id]; #pass the appt ID to the function
	$passdate = $_GET['date'];
	$passtime = $_GET['time'];
	

?>
	
<h2>Fill in the details</h2>
<form action="book-function.php" method="post" accept-charset="utf-8"> <!-- reference function.php to insert -->
<p><strong>First Name:</strong><br /> <input type="text" name="first_name" /></p>
<p><strong>Last Name:</strong><br /> <input type="text" name="last_name"/></p>
<p><strong>Phone Number:</strong><br /> <input type="text" name="phone_number"/></p>
<p><strong>Email:</strong><br /> <input type="text" name="email_address"/></p>
<input type="hidden" name="passid" value="<?php echo $passid; ?>"/> <!-- Pass appt id to function-->
<input type="hidden" name="passdate" value="<?php echo $passdate; ?>"/>
<input type="hidden" name="passtime" value="<?php echo $passtime; ?>"/>
	
	
<input type="submit" name="submit" value="Book Appt" />
	
	
<p><input type=button value="Go Back" onClick="history.go(-1)"></p> <!-- Go back one page -->
</form>
	
</body>
</html>
