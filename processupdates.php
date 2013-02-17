<?php
	 //Establishes server connection
	 $con = mysql_connect("mysql.ecaasu.org","columbiatech","centralp@rk");
	 
	 //Server connection error 
	 if (!$con){
     	die('Could not connect: ' . mysql_error());
     }
	 
	 //Establishes database connection
	 mysql_select_db("ecaasu2013", $con);
	  
	 //Gets current timestamp information (EST)
	 date_default_timezone_set('America/New_York');
	 $timestamp = new DateTime("now", new DateTimeZone('America/New_York'));
	 $timestamp = $timestamp->format('Y-m-d H:i:s');
	 
	 //Assigns user registration input information to variables
	 $value1 = $timestamp;
	 $value4 = $_POST['emailaddress'];
	 
	 //Creates new entry in Registration SQL database table
	 $sql = "INSERT INTO registration_updates (time_stamp, email_address)
	 	     VALUES('$value1','$value4')";
	 
	 //Server or database connection error
	 if (!mysql_query($sql,$con)){
  	 	die('Error: ' . mysql_error());
  	 }
	 
	 //Closes server connection
	 mysql_close($con);
	 
	 //Redirects user to submitted page
	 $URL="http://www.ecaasu2013.org/submitted4.html";  
	 header ("Location: $URL");   
?>	 