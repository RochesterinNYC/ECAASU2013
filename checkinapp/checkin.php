<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <meta name="description" content="ECAASU 2013 Check-In App" />
    <meta name="keywords" content="ecaasu, east coast, east coast asian american student union, student union, asian american,asian,asian american politics,politics, culture, community service" />
    <title>ECAASU 2013 Check-In App</title>

	<link rel='stylesheet' type='text/css' href='../registration.css' />
</head>
	
  <body>
  		
	    <img id="bground" src="../subway/bgcity.png" alt="NYC Background"/>
		<div id="appheader">ECAASU Check-In Application<br/>
		Written by James Wen
		</div>
		<br/><br/><br/><br/><br/><br/>
		<div id="ecaasuupdates" style="width:750px;left:50%;position:absolute;margin:0 0 0 -375px;">
		<form name = "ecaasucheckin" action="getquery.php" method="post" style="padding-top:1%;">
        	  <input class="input" type = "text" name="registrantid" onclick="this.value='';" onfocus="this.select()" onblur="this.value=!this.value?'Registrant ID':this.value;" value="Registrant ID">
        	  <input class="input" type = "text" name="firstname" onclick="this.value='';" onfocus="this.select()" onblur="this.value=!this.value?'First Name':this.value;" value="First Name">
        	  <input class="input" type = "text" name="lastname" onclick="this.value='';" onfocus="this.select()" onblur="this.value=!this.value?'Last Name':this.value;" value="Last Name">
        	  <input class="input" type = "text" name="emailaddress" onclick="this.value='';" onfocus="this.select()" onblur="this.value=!this.value?'Email Address':this.value;" value="Email Address">			   	
		<input type='submit' style="display:inline-block;margin-left:auto;margin-right:auto;" name='button' value='  Search  ' >	  		
		</form>		
		</div>	

		<!--large form-->

  </body>
	
</html>