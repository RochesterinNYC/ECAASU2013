<?php
	 //Establishes server connection
	 $con = mysql_connect("mysql.ecaasu.org","columbiatech","centralp@rk");
	 
	 //Server connection error
	 if (!$con){
     	die('Could not connect: ' . mysql_error());
     }
	 
	 //Establishes database connection
	 mysql_select_db("ecaasu2013", $con);
	 
	 //Gets timestamp information (EST)
	 date_default_timezone_set('America/New_York');
	 $timestamp = new DateTime("now", new DateTimeZone('America/New_York'));
	 $timestamp = $timestamp->format('Y-m-d H:i:s');
	 
	 //Assigns user hotel registration input information to variables
	 $value1 = $timestamp;
	 $value2 = $_POST['roomtype'];
	 $value3 = $_POST['p1first'];
	 $value4 = $_POST['p1last'];
	 $value5 = $_POST['p1email'];
	 $value6 = $_POST['p1phone'];
	 $value7 = $_POST['p2first'];
	 $value8 = $_POST['p2last'];
	 $value9 = $_POST['p2email'];
	 $value10 = $_POST['p3first'];
	 $value11 = $_POST['p3last'];
	 $value12 = $_POST['p3email'];
	 $value13 = $_POST['p4first'];
	 $value14 = $_POST['p4last'];
	 $value15 = $_POST['p4email'];
	 $value16 = $_POST['extrainfo'];
	 $value17 = $_POST['groupcode'];
	 if ($value3=='First'){
	 	$value3='';
	 }
	 if ($value4=='Last'){
	 	$value4='';
	 }
	 if ($value7=='First'){
	 	$value7='';
	 }
	 if ($value8=='Last'){
	 	$value8='';
	 }
	 if ($value10=='First'){
	 	$value10='';
	 }
	 if ($value11=='Last'){
	 	$value11='';
	 }
	 if ($value13=='First'){
	 	$value13='';
	 }
	 if ($value14=='Last'){
	 	$value14='';
	 }
	 
	 //Creates new entry in Hotel Registration SQL database table
	 $sql = "INSERT INTO hotel_registration (time_stamp, room_type, pp1_firstname, pp1_lastname, pp1_email, pp1_phone,
	 										 pp2_firstname, pp2_lastname, pp2_email, pp3_firstname, pp3_lastname, pp3_email,
	 										 pp4_firstname, pp4_lastname, pp4_email,extra_info,group_code)
	 	     VALUES('$value1','$value2','$value3','$value4','$value5','$value6','$value7','$value8','$value9','$value10','$value11','$value12','$value13',
			        '$value14','$value15','$value16','$value17')";
	 
	 //Server or database connection error
	 if (!mysql_query($sql,$con)){
  	 	die('Error: ' . mysql_error());
	 } 

	 //Closes server connection
	 mysql_close($con);
	 
	 //Redirects user to appropriate submitted page based on room type selection
	 if($value2=="Standard Queen"){
	 	$URL="http://www.ecaasu2013.org/hotelsubmitted.html";	
	 }
	 else{
	 	$URL="http://www.ecaasu2013.org/hotelsubmitted1.html";
	 }
	 header ("Location: $URL");   
?>	 