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
			
			//signup for employee
			$signup_employee = "INSERT INTO Members (username, password, category) VALUES ('$_POST[username_Employee]','$_POST[password1_Employee]',"employee")";
			$signup_Employee = mysql_query($signup_employee, $connector);
			
			$sql_employee = "INSERT INTO Employee (Uname, fname, lname, dob, Gender, SAddress, City, State, Zipcode, Phone, Email, Academic, WorkAut, Plan, Amount) 
					VALUES ('$_POST[username_Employee]', '$_POST[fname_Employee]', '$_POST[lname_Employee]', '$_POST[dob_Employee]', '$_POST[sex_Employee]',
							'$_POST[stadd_Employee]','$_POST[city_Employee]','$_POST[state_Employee]','$_POST[zip_Employee]','$_POST[Phno_Employee]',
							'$_POST[emailid_Employee]','$_POST[Academic]','$_POST[work_auth]','$_POST[Plan_Employee]','$_POST[amount_Employee]')";
			$r_employee = mysql_query($sql_employee, $connector);
			if ($r_employee) echo "inserted";
			else echo "not";
			
			//signup for employer
			$signup_employer = "INSERT INTO Members (username, password, category) VALUES ('$_POST[username_Employer]','$_POST[password_Employer]',"employer")";
			$signup_Employer = mysql_query($signup_employer, $connector);
			
			$sql_employer = "INSERT INTO EMployer (Uname, fname, lname, firm, SAddress, City, State, Zipcode, Phone, Email, Plan, Amount) 
					VALUES ('$_POST[username_Employer]', '$_POST[fname_Employer]', '$_POST[lname_Employer]', '$_POST[firm_name_Employer]',
					'$_POST[stadd_Employer]','$_POST[city_Employer]','$_POST[state_Employer]','$_POST[zip_Employer]','$_POST[Phno_Employer]',
							'$_POST[emailid_Employer]','$_POST[Plan_Employer]','$_POST[amount_Employer]')";
			$r_employer = mysql_query($sql_employer, $connector);
			if ($r_employer) echo "inserted";
			else echo "not";
			
			mysql_close($connector);
?>