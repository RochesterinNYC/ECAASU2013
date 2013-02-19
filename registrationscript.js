//Processes and outputs user inputted registration info for user validation
function processRegistration(){
		 //Assigns user inputted data from form to variables
		 var firstName = document.ecaasureg.firstname.value;
		 var lastName = document.ecaasureg.lastname.value;
		  
		 var birthMonth = getBirthMonth(document.ecaasureg.month.value);
		 var birthDay = document.ecaasureg.day.value;
		 var birthYear = document.ecaasureg.year.value;
		 
		 var emailAddress = document.ecaasureg.emailaddress.value;
		 var phoneNumber = document.ecaasureg.phonenumber.value;
		 var ethnicity = document.ecaasureg.ethnicity.value;
		 
		 var institution = document.ecaasureg.institution.value;
		 var gradYear = document.ecaasureg.gradyear.value;
		 var major = document.ecaasureg.major.value;
		 var aaGroup = document.ecaasureg.aagroup.value;
		 var groupCode = document.ecaasureg.groupcode.value;
		 
		 //Properly formats the "How did you hear about ECAASU?" data
		 var hearecaasu = "";
		 var hearecaasucount = document.ecaasureg.elements['hearecaasu[]'].length;
		 for (var i = 0;i < hearecaasucount; i++){
		 	 if (document.ecaasureg.elements['hearecaasu[]'][i].checked){
		 	    hearecaasu += document.ecaasureg.elements['hearecaasu[]'][i].value;
				hearecaasu += ', ';
			}
		 }
		 hearecaasu = hearecaasu.slice(0,hearecaasu.length-2);	 

		 var pastecaasus = document.ecaasureg.pastecaasu.value;
		 var ambassador = document.ecaasureg.ambassador.value;
		 
		 var emergencyContact = document.ecaasureg.emergencycontact.value; 
		 var emergencyPhone = document.ecaasureg.emergencyphone.value;

		 var extraInfo = document.ecaasureg.extrainfo.value;
		 
		 //Formats and prepares the user inputted data for output validation
		 var checkmessage = '<p><h4>Please check and ensure that all the following details are correct:</h4></p><br />';
		 var registrantInfo = '<p><h4>Name: </h4>' + firstName + ' ' + lastName + '</p><br />' + 
		 	 				  '<p><h4>Birthdate: </h4>' + birthMonth+'/'+birthDay+'/'+birthYear + '</p><br />' + 
							  '<p><h4>Email Address: </h4>' + emailAddress + '</p><br />' +
							  '<p><h4>Phone Number: </h4>' + phoneNumber + '</p><br />' +
							  '<p><h4>Ethnicity: </h4>' + ethnicity + '</p><br />';
		 var institutionInfo = '<p><h4>Institution: </h4>' + institution + '</p><br />' +
							   '<p><h4>Graduation Year: </h4>' + gradYear + '</p><br />' +
							   '<p><h4>Major: </h4>' + major + '</p><br />' +
							   '<p><h4>Affiliated Organizations: </h4>' + aaGroup + '</p><br />' +
							   '<p><h4>Group Code: </h4>' + groupCode + '</p><br />' ;
		 var logisticsInfo = '<p><h4>How did you hear about ECAASU: </h4>' + hearecaasu + '</p><br />' +
							 '<p><h4>How many past ECAASU conferences have you attended: </h4>' + pastecaasus + '</p><br />' +		 
							 '<p><h4>The campus ambassador that referred you: </h4>' + ambassador + '</p><br />';	
		 var emergencyInfo = '<p><h4>Emergency Contact: </h4>' + emergencyContact + '</p><br />' +
		 	 			   	 '<p><h4>Emergency Contact Number: </h4>' + emergencyPhone + '</p><br />' ;
		 var extraInfo = '<p><h4>Extra Information: </h4>' + extraInfo + '</p><br />';						 
		
		 //Removes the validation output area
		 var child = document.getElementById('regtest');
         var parent = document.getElementById('verification');
         parent.removeChild(child);
		 
		 //Adds the validation output area
		 //Adding and removing of validation output area allows for refresh of validation area with latest user inputted data
		 document.getElementById('verification').innerHTML += "<div id='regtest'></div>";
		 
		 //Writes the user inputted registration data to validation area
		 document.getElementById("regtest").innerHTML += checkmessage;
		 document.getElementById("regtest").innerHTML += registrantInfo;
		 document.getElementById("regtest").innerHTML += institutionInfo;
		 document.getElementById("regtest").innerHTML += logisticsInfo;
		 document.getElementById("regtest").innerHTML += emergencyInfo;
		 document.getElementById("regtest").innerHTML += extraInfo;	 
};

//Controls the presence of the form submission button
//Form cannot be submitted unless Terms and Conditions are agreed to through checkbox selection
var submitSelected = false;
function displaySubmit(){
         //Adds form submission button
		 if (!submitSelected){//Terms and Conditions are agreed to
		 	submitSelected = true;
		 	var submitButton = "<input type='submit' name='button' value='Submit Registration' onClick='parent.location='''>";
			document.getElementById('submitarea').innerHTML += "<div id='submitbutton'></div>";
		 	document.getElementById('submitbutton').innerHTML += submitButton;
		 }
		 //Removes form submission button
		 else{//Terms and Conditions are not agreed to
		 	submitSelected = false;
			var child = document.getElementById('submitbutton');
            var parent = document.getElementById('submitarea');
            parent.removeChild(child);
		}
}

//Translates month data from word to number
function getBirthMonth(birthMonth){
		 var month = '00';
		 switch (birthMonth) {
     		 case "January":
        	   month = '01';
        	   break;
      		 case "February":
        	   month = '02';  
        	   break; 
      		 case "March":
        	   month = '03';
        	   break;	 
    		 case "April":
        	   month = '04';
        	   break;
      		 case "May":
        	   month = '05';  
        	   break;
      		 case "June":
        	   month = '06';
        	   break; 
    		 case "July":
        	   month = '07';
        	   break;
      		 case "August":
        	   month = '08';  
        	   break;
      		 case "September":
        	   month = '09';
        	   break; 
    		 case "October":
        	   month = '10';
        	   break;
      		 case "November":
        	   month = '11';  
        	   break;
      		 case "December":
        	   month = '12';
        	   break;
      		 default:
        	   month = "Month";
		 }
		 return month;
};

//Miniature travel method for FAQ page (only Y-axis movement)
function faqtravel(target){
		 $.scrollTo(target, 200, {axis:'y'} );
};