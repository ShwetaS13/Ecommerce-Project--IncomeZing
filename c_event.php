<?php
			$dbuser = "root";
			$dbpass = "your_password";
			$dbhost = "localhost";
			$dbname = "ECOMM";
		//	$dbport = "3306";
			
			//create a connection
			
			$connector = mysql_connect($dbhost,$dbuser,$dbpass);
			if ($connector) echo "could connect with server";
			else echo "Connection was not establshed::";
			
			//select database
			$selected = mysql_select_db($dbname, $connector);
				if ($selected) echo "could connect with DB";
			else echo "Coud not connect to the DB::";
			

			$sql = "INSERT INTO cevents (Uname, Event, EmpNum, Description, Date) VALUES ('$_POST[Uname]', '$_POST[event_name]', '$_POST[number_of_employees]', '$_POST[Desc]', '$_POST[date]')";
			$r = mysql_query($sql, $connector);
			if ($r) echo "inserted";
			else echo "not";
			mysql_close($connector);
?>