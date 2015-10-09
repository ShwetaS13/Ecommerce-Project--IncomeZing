<?php
			$dbuser = "root";
			$dbpass = "Ecommgenes";
			$dbhost = "localhost";
			$dbname = "ECOMM";
			$myusername=$_POST['username']; 
			$date = getdate("Y/m/d");
			
			//create a connection
			
			$connector = mysql_connect($dbhost,$dbuser,$dbpass);
			if ($connector) echo "could connect with server";
			else echo "Connection was not establshed::";
			
			//select database
			$selected = mysql_select_db($dbname, $connector);
				if ($selected) echo "could connect with DB";
			else echo "Coud not connect to the DB::";
			
			$strSQL = "SELECT * FROM cevents where ";
			$query = "SELECT * FROM cevents where ";
			$current = mysql_query($strSQL);
			$past = mysql_query($query);
			
			echo '<table border="1">
					<tr> Past Events </tr>
					<tr>
					<th> Event Name </th>
					<th> Empoyee Count </th>
					<th> Event Description> </th>
					<th> Event Date </th>
					</tr>';
			while($row = mysql_fetch_array($past))
				{
					echo '<tr>
					<td> <b> '. $row[Event] .'  </td>
					<td> <b> '. $row[EmpNum] .'  </td>
					<td> <b> '. $row[Description] .'  </td>
					<td> <b> '. $row[Date] .' </td></tr>
					</table>';
				}
					
			echo '<table border="1">
					<tr> Current Events </tr>
					<tr>
					<th> Select </th>
					<th> Event Name </th>
					<th> Empoyee Count </th>
					<th> Event Description> </th>
					<th> Event Date </th>
					</tr>';
			while($row = mysql_fetch_array($current))
				{
					echo '<tr>
					<td> <b> <input type="radio" name=“select" value=“event" required/>
					<td> <b> '. $row[Event] .'  </td>
					<td> <b> '. $row[EmpNum] .'  </td>
					<td> <b> '. $row[Description] .'  </td>
					<td> <b> '. $row[Date] .' </td></tr>
					</table>';
				}	
				echo '<input type = "Submit" value = "Select Event"/>' 		
?>	