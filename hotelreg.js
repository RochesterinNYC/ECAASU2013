//Removes and adds 3rd and 4th guest input areas based on room selection type
var doubleSelected = false;
function roomAdjust(){
         //Adds 3rd and 4th guest input area
         if (!doubleSelected){//if Deluxe Double is selected
            doubleSelected = true;
            var guest3Info = " <h3>Guest 3 Information</h3> <div class='name'> <label>Name:</label> <br /> <div class='firstname'> <input type='text' name='p3first' value='First'> </div> <div class='lastname'> <input type = 'text' name='p3last' value='Last'> </div> </div> <div class='emailaddress'> <label>Email Address:</label><br /> <input type = 'text' name='p3email'> <h8>Please make sure that this email address is the same as the one you registered with.</h8> </div>";
            document.getElementById('guest3').innerHTML += "<div id='g3'></div>";
            document.getElementById('g3').innerHTML += guest3Info;
            var guest4Info = " <h3>Guest 4 Information</h3> <div class='name'> <label>Name:</label> <br /> <div class='firstname'> <input type='text' name='p4first' value='First'> </div> <div class='lastname'> <input type = 'text' name='p4last' value='Last'> </div> </div> <div class='emailaddress'> <label>Email Address:</label><br /> <input type = 'text' name='p4email'> <h8>Please make sure that this email address is the same as the one you registered with.</h8> </div> <br />";
            document.getElementById('guest4').innerHTML += "<div id='g4'></div>";
            document.getElementById('g4').innerHTML += guest4Info;
         }
         //Removes 3rd and 4th guest input area
         else{//if Standard Queen is selected
            doubleSelected = false;
            var child = document.getElementById('g3');
            var parent = document.getElementById('guest3');
            parent.removeChild(child);
            var child = document.getElementById('g4');
            var parent = document.getElementById('guest4');
            parent.removeChild(child);
        }
};

//Processes and outputs user inputted hotel registration info for user validation
function processRegistration(){
    
         //Assigns user inputted data from form to variables
         var roomType = document.hotelreg.roomtype.value;
         
         var p1FirstName = document.hotelreg.p1first.value;
         var p1LastName = document.hotelreg.p1last.value;
         var p1Email = document.hotelreg.p1email.value;
         var p1Phone = document.hotelreg.p1phone.value;   
            
         var p2FirstName = document.hotelreg.p2first.value;
         var p2LastName = document.hotelreg.p2last.value;
         var p2Email = document.hotelreg.p2email.value;

         if(doubleSelected){
             var p3FirstName = document.hotelreg.p3first.value;
             var p3LastName = document.hotelreg.p3last.value;
             var p3Email = document.hotelreg.p3email.value;         
             
             var p4FirstName = document.hotelreg.p4first.value;
             var p4LastName = document.hotelreg.p4last.value;
             var p4Email = document.hotelreg.p4email.value;
         }
         var groupCode = document.hotelreg.groupcode.value;
         var extraInfo = document.hotelreg.extrainfo.value;
        
         //Formats and prepares the user inputted hotel registration data for output validation
         var checkmessage = '<p><h4>Please check and ensure that all the following details are correct:</h4></p><br /><br />';
         var roomInfo = '<p><h4>Room Type: </h4>' + roomType + '</p><br />';
         var registrant1Info = '<p><h4>Point Person Name: </h4>' + p1FirstName + ' ' + p1LastName + '</p><br />' + 
                              '<p><h4>Email Address: </h4>' + p1Email + '</p><br />' +
                              '<p><h4>Phone Number: </h4>' + p1Phone + '</p><br />';
         var registrant2Info = '<p><h4>Guest 2 Name: </h4>' + p2FirstName + ' ' + p2LastName + '</p><br />' + 
                              '<p><h4>Email Address: </h4>' + p2Email + '</p><br />';
         if(doubleSelected){
             var registrant3Info = '<p><h4>Guest 3 Name: </h4>' + p3FirstName + ' ' + p3LastName + '</p><br />' + 
                                  '<p><h4>Email Address: </h4>' + p3Email + '</p><br />';
             var registrant4Info = '<p><h4>Guest 4 Name: </h4>' + p4FirstName + ' ' + p4LastName + '</p><br />' + 
                                  '<p><h4>Email Address: </h4>' + p4Email + '</p><br />';    
         }
         var groupInfo = '<p><h4>Group Code: </h4>' + groupCode + '</p><br />';
         var extraInfo = '<p><h4>Extra Information: </h4>' + extraInfo + '</p><br />';                       
         
         //Removes the validation output area
         var child = document.getElementById('regtest');
         var parent = document.getElementById('verification');
         parent.removeChild(child);
         
         //Adds the validation output area
         //Adding and removing of validation output area allows for refresh of validation area with latest user inputted data
         document.getElementById('verification').innerHTML += "<div id='regtest'></div>";
         
         //Writes the user inputted hotel registration data to validation area
         document.getElementById("regtest").innerHTML += checkmessage;
         document.getElementById("regtest").innerHTML += roomInfo;
         if(p1FirstName!="First"){
            document.getElementById("regtest").innerHTML += registrant1Info;       
         }
         if(p2FirstName!="First"){
            document.getElementById("regtest").innerHTML += registrant2Info;
         }
         if(doubleSelected){
            if(p3FirstName!="First"){
                document.getElementById("regtest").innerHTML += registrant3Info;        
            }
            if(p4FirstName!="First"){
                document.getElementById("regtest").innerHTML += registrant4Info;
            }
         }
         if (groupCode !=""){
             document.getElementById("regtest").innerHTML += groupInfo;
         }
         if(extraInfo!="Extra Information:"){
            document.getElementById("regtest").innerHTML += extraInfo;
         }
};

//Controls the presence of the form submission button
//Form cannot be submitted unless Terms and Conditions are agreed to through checkbox selection
var submitSelected = false;
function displaySubmit(){
         //Adds form submission button
         if (!submitSelected){//Terms and Conditions are agreed to
            submitSelected = true;
            var submitButton = "<input type='submit' name='button' value='Submit Registration' onClick='parent.location='www.cracked.com''>";
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
};