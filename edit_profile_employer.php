<?php
$dbuser = "root";
			$dbpass = "your_password";
			$dbhost = "localhost";
			$dbname = "ECOMM";
			
			//create a connection
			
			$connector = mysql_connect($dbhost,$dbuser,$dbpass);
			if ($connector) echo "could connect with server";
			else echo "Connection was not established::";
			
			//select database
			$selected = mysql_select_db($dbname, $connector);
				if ($selected) echo "could connect with DB";
			else echo "Could not connect to the DB::";
			
			//Uname    | fname | lname   | firm | SAddress | City   | State   | Zipcode | Phone| Email | Plan  | Amount
			
			//update query to edit profile
			$update_employer = "UPDATE EMployer SET fname=$_POST[fname],lname=$_POST[lname],SAddress=$_POST[stadd],City=$_POST[city],State=$_POST[state],
								Zipcode=$_POST[zip],Phone=$_POST[Phno],Email=$_POST[emailid],Plan=$_POST[plan],Amount=$_POST[amount]
								WHERE Uname=$_POST[username];"
								
			$sql = mysql_query($update_employer, $connector);		
			//mysql_close($connector);
header("location:profile_home_employer.html");
?>