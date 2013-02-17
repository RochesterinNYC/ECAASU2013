<?php
	
     //Establishes server and database connection
	 $con = mysqli_connect("mysql.ecaasu.org","columbiatech","centralp@rk", "ecaasu2013");
	 
	 //Server connection error 
	 if (mysqli_connect_errno()) {
	    printf("Connect failed: %s\n", mysqli_connect_error());
	    exit();
	 }
	 
	 // Retrieve data from Query String
	$registrationID = $_POST['registrantid'];
	if($registrationID != "Registrant ID"){
		$registrationID = intval($registrationID);
	}
	$firstName = $_POST['firstname'];
	$lastName = $_POST['lastname'];
	$emailAddress = $_POST['emailaddress']; 
	 
	$query = "SELECT * FROM ecaasu_registration";
	$WHEREwritten = 0;//0 is false, 1 is true
	function writeStart(){
		global $query;
		global $WHEREwritten;
		if ($WHEREwritten == 0){
			$query .= " WHERE";
			$WHEREwritten = 1;
			
		}
		else if($WHEREwritten == 1)	{
			$query .= " AND";
			
		}
		
	}
	if(is_numeric($registrationID)){
		writeStart();
		$query .= " registrant_id=$registrationID";
	}
	if($firstName != "First Name"){
		writeStart();
		$query .= " first_name='$firstName'";
	}
	if($lastName != "Last Name"){
		writeStart();
		$query .= " last_name='$lastName'";
	}
	if($emailAddress != "Email Address"){
		writeStart();
		$query .= " email_address='$emailAddress'";
	}
	
	$result = mysqli_query($con, $query);
	
	while ( $row = mysqli_fetch_array($result, MYSQLI_ASSOC) ) {
	printf ("%s %s\n", $row["first_name"], $row["last_name"]);
	}
	
     // Escape User Input to help prevent SQL Injection
	//$age = mysql_real_escape_string($age);
	//$sex = mysql_real_escape_string($sex);
	//$wpm = mysql_real_escape_string($wpm);
	//build query
	
	
	//Execute query
	//$queryResult = mysql_query($query) or die(mysql_error());	
	
?> 