<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Edit Client Info</title>
</head>
<body>
<?php
include ('connect-mysql.php'); // Using database connection file here
$id = $_GET['id']; // get id through query string
$qry = mysqli_query($dbcon,"SELECT * from clients WHERE client_id='$id'"); // select query
$data = mysqli_fetch_array($qry); // fetch data
#echo "Trying to update client id " .$id;
if(isset($_POST['update'])) // when click on Update button
{
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
	$email_adress = $_POST['email_address'];
    $phone_number = $_POST['phone_number'];
    $edit = mysqli_query($dbcon, "UPDATE `ApptSys`.`client` SET `first_name` = '$first_name', `last_name` = '$last_name', `phone_number` = '$phone_number', `email_address` = '$email_adress'  WHERE (`client_id` = '$id')");
    if($edit)
    {
        mysqli_close($dbcon); // Close connection
        header("location:individual-appts.php?id=$id"); // redirects to all clients page
        exit;
    }
    else
    {
        echo mysqli_error();
    }    	
}
?>
<h3>Update Data</h3>

<form method="POST" accept-charset="utf-8">
  <input type="text" name="first_name" value="<?php echo $data['first_name'] ?>" placeholder="Enter First Name" REQUIRED>
  <input type="text" name="last_name" value="<?php echo $data['last_name'] ?>" placeholder="Enter Last Name" REQUIRED>
  <input type="text" name="phone_number" value="<?php echo $data['phone_number'] ?>" placeholder="Enter Phone Number" REQUIRED>
  <input type="text" name="email_address" value="<?php echo $data['email_address'] ?>" placeholder="Enter Email Address" REQUIRED>
  <input type="submit" name="update" value="Update">
	<br><br>
	<input type=button value="Go Back" onClick="history.go(-1)">
</form>
</body>
</html>