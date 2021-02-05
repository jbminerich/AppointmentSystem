<!doctype html>
<style type="text/css">
table { border: 2px solid #06009C;
	background-color: #E4E4DB; }
	
th { border-bottom: 5px solid #000;	}
	
td { border-bottom: 2px solid #666;	}
	
</style>
<h2>Fill in the details</h2>

<table><tr><td>


<form action="function.php" method="post" accept-charset="utf-8"> <!-- reference function.php to insert -->
<p><strong>First Name:</strong><br /> <input type="text" name="first_name" /></p>
<p><strong>Last Name:</strong><br /> <input type="text" name="last_name"/></p>
<p><strong>Phone Number:</strong><br /> <input type="text" name="phone_number"/></p>
<p><strong>Email:</strong><br /> <input type="text" name="email_address"/></p>
	
<center><input type="submit" name="submit" value="Add Client" /></center><br>
		</tr></table>
<br><br><input type=button value="Go Back" onClick="history.go(-1)"> <!-- Go back one page -->
</form>

