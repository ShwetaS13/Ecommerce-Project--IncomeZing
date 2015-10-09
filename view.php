<?php
			$dbuser = "root";
			$dbpass = "your_password";
			$dbhost = "localhost";
			$dbname = "ECOMM";
			$myusername=$_POST['username']; 
		
			//create a connection
			
			$connector = mysql_connect($dbhost,$dbuser,$dbpass);
			if ($connector) echo "could connect with server";
			else echo "Connection was not establshed::";
			
			//select database
			$selected = mysql_select_db($dbname, $connector);
				if ($selected) echo "could connect with DB";
			else echo "Coud not connect to the DB::";
			
			$strSQL = "SELECT * FROM cevents";
			$rs = mysql_query($strSQL);		
			echo '<table border="1">
					<tr>
					<th> Select </th>
					<th> Event Name </th>
					<th> Event Date </th>
					<th> Event Description </th>
					</tr>';
			while($row = mysql_fetch_array($rs))
				{
					echo '<tr>
					<td> <b> <input type = "radio" name = “select" value = “event" required/>
					<td> <b> '. $row[Event] .'  </td>
					<td> <b> '. $row[Date] .' </td>
					<td> <b> '. $row[Description] .' </td></tr>
					</table>';
	
				}
					echo '<input type = "submit" value = "SELECT"/>'
					?>