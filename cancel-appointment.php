<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	
<?php
include ('connect-mysql.php'); // Using database connection file here
$id = $_GET[id];
echo "You are trying to cancel appt id " .$id; // get id through query string
$qry = mysqli_query($dbcon,"SELECT * from appointments WHERE appt_id='$id'"); // select query
$data = mysqli_fetch_array($qry); // fetch data
if(isset($_POST['update'])) // when click on Update button
{
    $edit = mysqli_query($dbcon,"UPDATE `ApptSys`.`appointments` SET `client_id` = NULL WHERE (`appt_id` = '$id')");
    if($edit)
    {
        mysqli_close($dbcon); // Close connection
        header("location:display-data.php"); // redirects to all records page
        exit;
    }
    else
    {
        echo mysqli_error();
    }    	
}
?>
<h3>Update Data</h3>
<form method="POST">
  <input type="submit" name="update" value="Cancel">
</form>
</body>
</html>