<!doctype html>
<html>
<head>
<meta charset="utf-8">
</head>
<body>
<?php
include ('connect-mysql.php'); // Using database connection file here
$id = $_GET[id]; // get id through query string
    $edit = mysqli_query($dbcon,"");
$del = mysqli_query($dbcon,"DELETE FROM `ApptSys`.`client` WHERE (`client_id` = '$id')"); // delete query
$clear = mysqli_query($dbcon, "UPDATE `ApptSys`.`appointments` SET `client_id` = NULL WHERE (`client_id` = '$id')");
if($del)
{
    if($clear){
		echo "Client cleared from all appointments";
	}
	mysqli_close($dbcon); // Close connection
    header("location:display-data.php"); // redirects to all clients page
    exit;	
}
else
{
    echo "Error deleting record"; // display error message if not delete
}
?>
</body>
</html>
