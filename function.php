<?php
include('connect-mysql.php'); #connects to DB

$first_name = $_POST['first_name']; #gather first name from form
$last_name = $_POST['last_name']; #gather last name from form
$phone_number = $_POST['phone_number']; #gather phone number from form
$email_address = $_POST['email_address']; #gather email from form

$sql = "INSERT INTO `ApptSys`.`client` (`first_name`, `last_name`, `phone_number`, `email_address`) VALUES ('$first_name', '$last_name', '$phone_number', '$email_address')"; #sql function to insert data into DB

$rs = mysqli_query($dbcon, $sql);

if($rs) {
	echo "Contact Record Inserted"; # display if inserted properly
	include('display-data.php'); # display new client list
} else{
	echo "Error.";
}
?>