  <head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <meta name="description" content="Registrant Checked In!" />
    <meta name="keywords" content="ecaasu, east coast, east coast asian american student union, student union, asian american,asian,asian american politics,politics, culture, community service" />
    <title>Registrant Checked In!</title>

	<link rel='stylesheet' type='text/css' href='../registration.css' />
  </head>
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
	 
	 $registrantID = $_POST['registrantid'];
	 //Gets current timestamp information (EST)
	 date_default_timezone_set('America/New_York');
	 $timestamp = new DateTime("now", new DateTimeZone('America/New_York'));
	 $timestamp = $timestamp->format('Y-m-d H:i:s');

	$sql = "UPDATE ecaasu_registration
			SET checked_in='Yes', checkin_time='$timestamp'
			WHERE registrant_id = '$registrantID'";		 
	//Server or database connection error
	 if (!mysqli_query($con, $sql)){
  	 	die('Error: ' . mysql_error());
  	 }
	 printf ("<div id='registrantchecked'>Registrant was checked in! You will be returned to the search app in a second.</div>");
	 header("Refresh: 1;url=http://www.ecaasu2013.org/checkinapp/checkin.php");

?> 