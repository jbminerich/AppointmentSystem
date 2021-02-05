<?php
include('connect-mysql.php'); #connects to DB
$sqlget = "SELECT * FROM appointments"; #gather all data from appts table

$sql2 = "UPDATE `ApptSys`.`appointments` SET `client_id` = [$last_id] WHERE (`appt_id` = [$apptid])";



$rs = mysqli_query($dbcon, $sqlget, $sql2);

if($rs) {
	echo "Appointment Booked"; # display if inserted properly
} else{
	echo "Error." .$last_id. " Row " .$apptid;
}




?>