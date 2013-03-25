  <head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <meta name="description" content="ECAASU 2013 Check-In App" />
    <meta name="keywords" content="ecaasu, east coast, east coast asian american student union, student union, asian american,asian,asian american politics,politics, culture, community service" />
    <title>ECAASU 2013 Check-In App</title>

	<link rel='stylesheet' type='text/css' href='../registration.css' />
  </head>
  		<img id="specbground" src="../subway/bgcity.png" alt="NYC Background"/>
  		<div id="appheader">ECAASU Check-In Application<br/>
		Written by James Wen
		</div>
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

    //Starts writing SQL query
	$query = "SELECT * FROM ecaasu_registration";
	$WHEREwritten = 0;//0 is false, 1 is true
    
    //Function that writes the SQL operators from in between pieces of info to query
    //Writes WHERE if it is start of query (right after SELECT * FROM etc.)
    //Writes AND if it is adding on extra pieces of information to query
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

    //Adds info to query depending on whether search query included it in search
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
    //Orders output by registrant ID (ascending)
    $query .= " ORDER BY registrant_id";
	
    //Writes the actual table with registrants that match search parameters
    //Each registrant has ID, first name, last name, institution, email address,
    //whether or not they are checked in, and a personal check in button listed
	printf ("<table id='registranttable' border='1'><tr><th>Registrant ID</th><th>First Name</th><th>Last Name</th><th>Institution</th><th>Email Address</th><th>Checked In?</th><th>Check People In</th></tr>");
	$result = mysqli_query($con, $query);
	while ( $row = mysqli_fetch_array($result, MYSQLI_ASSOC) ) {
		printf ("<tr><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td><form name = 'checkin' action='checkregistrant.php' method='post'><input class='hiddeninput' type = 'text' name='registrantid' value='%s'><input class='checkinbut' type='submit' name='button' value='Check In'></form></td></tr>", $row["registrant_id"], $row["first_name"], $row["last_name"], $row["institution_name"], $row["email_address"], $row["checked_in"], $row["registrant_id"]);
	}
	printf("</table><br/><br/><br/>");

    //Back to Search button
    printf("<a id='backbutton' href='http://www.ecaasu2013.org/checkinapp/checkin.php'>Back to Search</a>");
    
?> 
