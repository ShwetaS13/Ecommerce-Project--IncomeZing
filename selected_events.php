<?php
			$dbuser = "root";
			$dbpass = "your_password";
			$dbhost = "localhost";
			$dbname = "ECOMM";
			$myusername = $_POST['username']; 
			$date = getdate("Y/M/D");
			
			//create a connection
			
			$connector = mysql_connect($dbhost,$dbuser,$dbpass);
			if ($connector) echo "could connect with server";
			else echo "Connection was not establshed::";
			
			//select database
			$selected = mysql_select_db($dbname, $connector);
				if ($selected) echo "could connect with DB";
			else echo "Coud not connect to the DB::";
			
			$strSQL = "SELECT * FROM sevents where Uname = '$myusername' and Date >= '$date'";
			$rs = mysql_query($strSQL);		
			echo '<table border="1">
					<tr>
					<th> Event Name </th>
					<th> Event Date </th>
					</tr>';
			while($row = mysql_fetch_array($rs))
				{
					echo '<tr>
					<td> <b> '. $row[Event] .'  </td>
					<td> <b> '. $row[Date] .' </td></tr>';
				}
					echo '</table>';
					?>