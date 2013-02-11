<?php
	 //Establishes server connection
	 $con = mysql_connect("mysql.ecaasu.org","columbiatech","centralp@rk");
	 
	 //Server connection error 
	 if (!$con){
     	die('Could not connect: ' . mysql_error());
     }
	 
	 //Establishes database connection
	 mysql_select_db("ecaasu2013", $con);
	 
	 //Translates month data from word to number
	 $month = '00';
     switch ($_POST[month]) {
 		 case "January":
    	 	$month = '01';
    	 	break;
  		 case "February":
    	 	$month = '02';  
    	 	break;
  		 case "March":
    	 	$month = '03';
    	 	break;
		 case "April":
    	 	$month = '04';
    	 	break;
  		 case "May":
    	 	$month = '05';  
    	 	break;
  		 case "June":
    	 	$month = '06';
    	 	break; 
		 case "July":
    	 	$month = '07';
    	 	break;
  		 case "August":
    	 	$month = '08';  
    	 	break;
  		 case "September":
    	 	$month = '09';
    	 	break; 
		 case "October":
    	 	$month = '10';
    	 	break;
  		 case "November":
    	 	$month = '11';  
    	 	break;
  		 case "December":
    	 	$month = '12';
    	 	break;
  		 default:
    	 	$month = '00';
	 }
	 
	 //Properly formats the "How did you hear about ECAASU" input data
	 $hearecaasupre = '';
	 for($i=0;$i<count($_POST[hearecaasu]);$i++){  
	 	if(trim($_POST[hearecaasu][$i]) != ''){		  
   		   $hearecaasupre .= $_POST[hearecaasu][$i];
		   $hearecaasupre .= ', ';
		}
	 }
	 $hearecaasu = substr($hearecaasupre, 0, -2);
	 
	 //Properly formats the birthdate input data
	 $birthdate = $_POST["year"] . '-' . $month . '-' . $_POST[day];
	 
	 //Gets current timestamp information (EST)
	 date_default_timezone_set('America/New_York');
	 $timestamp = new DateTime("now", new DateTimeZone('America/New_York'));
	 $timestamp = $timestamp->format('Y-m-d H:i:s');
	 
	 //Assigns user registration input information to variables
	 $value1 = $timestamp;
	 $value2 = $_POST['firstname'];
	 $value3 = $_POST['lastname'];
	 $value4 = $birthdate;
	 $value5 = $_POST['emailaddress'];
	 $value6 = $_POST['phonenumber'];
	 $value7 = $_POST['gender'];
	 $value8 = $_POST['ethnicity'];
	 $value9 = $_POST['institution'];
	 $value10 = $_POST['gradyear'];
	 $value11 = $_POST['major'];
	 $value12 = $_POST['aagroup'];
	 $value13 = $_POST['travelmethod'];
	 $value15 = $hearecaasu;
	 $value16 = $_POST['pastecaasu'];
	 $value17 = $_POST['emergencycontact'];
	 $value18 = $_POST['emergencyphone'];
	 $value19 = $_POST['emergencyrelationship'];
	 $value20 = $_POST['extrahealth'];
	 $value21 = $_POST['extrainfo'];
	 $value22 = $_POST['groupcode'];
	 $value23 = $_POST['ambassador'];
	 
	 //Creates new entry in Registration SQL database table
	 $sql = "INSERT INTO ecaasu_registration (time_stamp, first_name, last_name, birth_date, email_address, phone_number, gender,
	 			  	   		    ethnicity, institution_name, grad_year, intended_major, aa_group, travel_method,
								hear_ecaasu, num_conferences, emergency_name, emergency_phone,
								emergency_relationship, extra_health, extra_info, group_code, campus_ambassador)
	 	     VALUES('$value1','$value2','$value3','$value4','$value5','$value6','$value7','$value8','$value9','$value10','$value11','$value12','$value13',
			        '$value15','$value16','$value17','$value18','$value19','$value20','$value21','$value22','$value23')";
	 
	 //Server or database connection error
	 if (!mysql_query($sql,$con)){
  	 	die('Error: ' . mysql_error());
  	 }
	 
	 //Closes server connection
	 mysql_close($con);
	 
	 //Redirects user to submitted page
	 $URL="http://www.ecaasu2013.org/submitted1.html";  
	 header ("Location: $URL");   
?>	 