<?php
if(isset($_POST['email'])) {
    //In case of form input errors
    function died($error) { 
        echo "We are very sorry, but there were error(s) found with the form you submitted.<br/>";
        echo "These errors appear below.<br /><br />";
        echo $error."<br /><br />";
        echo "Please go back and fix these errors.<br /><br />";
        die();
    }
     
    //Checks for presence of inputted info
    if(!isset($_POST['first']) ||
       !isset($_POST['last']) ||
       !isset($_POST['email']) ||
       !isset($_POST['emailtarget']) ||
       !isset($_POST['bodytext'])) {
       died('We are sorry, but there appears to be a problem with the form you submitted.');       
    }
    
	//Assigns user inputted information to variables
    $first = $_POST['first'];
    $last = $_POST['last'];
    $email = $_POST['email'];
    $emailtarget = $_POST['emailtarget'];
    $bodytext = $_POST['bodytext'];
    
	
	//Checks for and prevents invalid user input and formatting
    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';  
	  if(!preg_match($email_exp,$email)) {
	    $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
	  }
	    $string_exp = "/^[A-Za-z .'-]+$/";
	  if(!preg_match($string_exp,$first)) {
	    $error_message .= 'The First Name you entered does not appear to be valid.<br />';
	  }
	  if(!preg_match($string_exp,$last)) {
	    $error_message .= 'The Last Name you entered does not appear to be valid.<br />';
	  }
	  if(strlen($bodytext) < 2) {
	    $error_message .= 'The Comments you entered do not appear to be valid.<br />';
	  }
	  if(strlen($error_message) > 0) {
	    died($error_message);
	  }
    $email_message = "Inquiry details below.\n\n";
    
	//Checks for and removes invalid user input email commands
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }
    
	//Adds user information to email message
    $email_message .= "First Name: ".clean_string($first)."\n";
    $email_message .= "Last Name: ".clean_string($last)."\n";
    $email_message .= "Email: ".clean_string($email)."\n";
    $email_message .= "Topic Target: ".clean_string($emailtarget)."\n";
    $email_message .= "Comments/Questions:\n".clean_string($bodytext)."\n";
     
	 //Decides which email address to send the email message to
	 $email_to = "tech@ecaasu2013.org";
	 if($emailtarget == "Registration"){
	 	$email_to = "tech@ecaasu2013.org";
	 }
	 if($emailtarget == "Hotel or Hosting"){
	 	$email_to = "logistics-admin@ecaasu2013.org";
	 }
	 if($emailtarget == "Sponsors"){
	 	$email_to = "fundraising@ecaasu2013.org";
	 }
	 if($emailtarget == "Entertainment"){
	 	$email_to = "entertainment@ecaasu2013.org";
	 }
	 if($emailtarget == "Talent Competition"){
	 	$email_to = "entertainment@ecaasu2013.org";
	 }
	 if($emailtarget == "Logistics"){
	 	$email_to = "logistics-admin@ecaasu2013.org";
	 }
	 if($emailtarget == "Programming"){
	 	$email_to = "programming@ecaasu2013.org";
	 }
	 if($emailtarget == "Other"){
	 	$email_to = "tech@ecaasu2013.org";
	 }
	 
	 //Gets current timestamp information (EST) to add to email message
	 $timestamp = new DateTime("now", new DateTimeZone('America/New_York'));
	 $timestamp = $timestamp->format('Y-m-d H:i:s');
	 $email_subject = "ECAASU 2013 Inquiry: " . $emailtarget . " " . $timestamp;
     
     //Sends email message
	 @mail($email_to, $email_subject, $email_message);  
 
 	 //Redirects user to appropriate submitted page
	 $URL="http://www.ecaasu2013.org/contactsent.html";  
	 header ("Location: $URL");  
}
?>