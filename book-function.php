<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Book Appointment</title>
</head>
<?php
	
	include('connect-mysql.php'); #connects to DB

$first_name = $_POST['first_name']; #gather first name from form
$last_name = $_POST['last_name']; #gather last name from form
$phone_number = $_POST['phone_number']; #gather phone number from form
$email_address = $_POST['email_address']; #gather email from form
$appt_id = $_POST['passid'];
$passdate = $_POST['passdate'];
$passtime = $_POST['passtime'];
$sql = "INSERT INTO `ApptSys`.`client` (`first_name`, `last_name`, `phone_number`, `email_address`) VALUES ('$first_name', '$last_name', '$phone_number', '$email_address')"; #sql function to insert data into DB
    $subject = 'Your Appointment Confirmation';
    $message = 'We cannot wait to see you during your appointment. Please be sure to arrive at least 5 minutes early to get you properly checked in. We require facemasks to be worn at this facility. Thank you for your cooperation!';

		if($dbcon->query($sql) === TRUE){
			$last_id = $dbcon->insert_id; # gather the client ID of the latest client added from form
			$sendit = "UPDATE `ApptSys`.`appointments` SET `client_id` = '$last_id' WHERE (`appt_id` = '$appt_id') AND `client_id` IS NULL"; #update the record
			$check_null = $dbcon->query("SELECT * FROM appointments WHERE appt_id = $appt_id AND client_id IS NULL");
			if ($check_null->num_rows > 0){
				if($dbcon->query($sendit) === TRUE) {
				echo "Appointment Booked! See you then, $first_name";
				//echo "<br><a href='/'>Click Here to return to the Home Page</a>";
				mail($email_address, $subject, $message);
				}
			} else {
				echo("That appointment is already booked, please try a different one.");
				}
				
			}

	$dbcon->close();
	?>
	
<body>
</body>
</html>
