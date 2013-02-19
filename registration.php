<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <meta name="description" content="ECAASU 2013 Conference Registration" />
    <meta name="keywords" content="ecaasu, east coast, east coast asian american student union, student union, asian american,asian,asian american politics,politics, culture, community service" />
    <title>Registration</title>
    
    <!--[if IE]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <link rel='stylesheet' type='text/css' href='registration.css' />
    <script type="text/javascript" src="registrationscript.js"></script>
    <script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-35915936-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
  </head>
    
  <body>
        
        <img id="bground" src="subway/bgcity.png" alt="NYC Background"/>
        
        <section class = 'menu'>
      <a id='register' href="http://www.ecaasu2013.org/registration.php" >24 Hour Flash Sale! Register Here</a>
      <a id='goback' href="http://www.ecaasu2013.org/" >Go Back</a>
    <div class='socialbar'>
            <a id='twitbut' href='https://twitter.com/ecaasu'><img src='images/twitter.png' alt="Twitter Logo"/></a>
            <a href='http://www.facebook.com/Ecaasu2013'><img src='images/facebook.png' alt="Facebook Logo"/></a>
            <a href='http://www.tumblr.com/tagged/ecaasu'><img id='tumblr' src='images/tumblr2.png' alt="Tumblr Logo"/></a>
            <a href='mailto:tech@ecaasu2013.org'><img src='images/email.png' alt="Email Logo"></a>
            <script charset='utf-8' src='http://widgets.twimg.com/j/2/widget.js'></script>
            <div id='twitter'>
                 <script>
                   new TWTR.Widget({
                   version: 2,
                   type: 'profile',
                   rpp: 4,
                   interval: 30000,
                   width: 250,
                   height: 300,
                   theme: {
                   shell: {
                   background: '#
',
                   color: '#ffffff'
                   },
                   tweets: {
                   background: '#75b2dd',
                   color: '#000000',
                   links: '#000dff'
                   }
                   },
                   features: {
                   scrollbar: false,
                   loop: false,
                   live: false,
                   behavior: 'all'
                   }
                   }).render().setUser('ECAASU2013').start();
                 </script>
           </div><!--twitter-->
      </div><!--social bar-->
    </section><!--header-->
        
        <h2>Registration</h2>
        
        <h2 style="font-size:120%;">
        You are eligible for the Late Registration price of $85!<br/><br/>
        If you are a current Columbia student who is planning to volunteer and/or host, please do not register at this time.<br/><br/>
        Please check the FAQ before registering: <a class="faqa" target="_blank" href="http://www.ecaasu2013.org/faq.html">FAQ</a><br/>
        If you are looking to register as a group: <a class="faqa" target="_blank" href="http://www.ecaasu2013.org/faq.html#7">Group Registration Details</a></h2>      
        <form name = "ecaasureg" action="process.php" method="post" style="padding-top:1%;">
         <br /><br />
         <section class="infoframe">
            
            <h3>Personal Information</h3>
            <div class="name">
                 <label>Name:</label>
                 <br />
                 <div class="firstname">
                   <input type="text" name="firstname" value="First">
                 </div>
            
                 <div class="lastname">  
                   <input type = "text" name="lastname" value="Last">
                 </div>
            </div>
            
            <div id="birthdate">
              <label>Birthdate:</label><br />
              <select name="month">
              <option selected>Month</option>
              <option value="January">January</option>
              <option value="February">February</option>
              <option value="March">March</option>
              <option value="April">April</option>
              <option value="May">May</option>
              <option value="June">June</option>
              <option value="July">July</option>
              <option value="August">August</option>
              <option value="September">September</option>
              <option value="October">October</option>
              <option value="November">November</option>
              <option value="December">December</option>
              </select>
              
              <select name="day">
              <option selected>Day</option>
              <option value="01">01</option>
              <option value="02">02</option>
              <option value="03">03</option>
              <option value="04">04</option>
              <option value="05">05</option>
              <option value="06">06</option>
              <option value="07">07</option>
              <option value="08">08</option>
              <option value="09">09</option>
              <option value="10">10</option>
              <option value="11">11</option>
              <option value="12">12</option>
              <option value="13">13</option>
              <option value="14">14</option>
              <option value="15">15</option>
              <option value="16">16</option>
              <option value="17">17</option>
              <option value="18">18</option>
              <option value="19">19</option>
              <option value="20">20</option>
              <option value="21">21</option>
              <option value="22">22</option>
              <option value="23">23</option>
              <option value="24">24</option>
              <option value="25">25</option>
              <option value="26">26</option>
              <option value="27">27</option>
              <option value="28">28</option>
              <option value="29">29</option>
              <option value="30">30</option>
              <option value="31">31</option>
              </select>
              
              <select name="year">
              <option selected>Year</option>
              <option value="2012">2012</option>
              <option value="2011">2011</option>
              <option value="2010">2010</option>
              <option value="2009">2009</option>
              <option value="2008">2008</option>
              <option value="2007">2007</option>
              <option value="2006">2006</option>
              <option value="2005">2005</option>
              <option value="2004">2004</option>
              <option value="2003">2003</option>
              <option value="2002">2002</option>
              <option value="2001">2001</option>
              <option value="2000">2000</option>
              <option value="1999">1999</option>
              <option value="1998">1998</option>
              <option value="1997">1997</option>
              <option value="1996">1996</option>
              <option value="1995">1995</option>
              <option value="1994">1994</option>
              <option value="1993">1993</option>
              <option value="1992">1992</option>
              <option value="1991">1991</option>
              <option value="1990">1990</option>
              <option value="1989">1989</option>
              <option value="1988">1988</option>
              <option value="1987">1987</option>
              <option value="1986">1986</option>
              <option value="1985">1985</option>
              <option value="1984">1984</option>
              <option value="1983">1983</option>
              <option value="1982">1982</option>
              <option value="1981">1981</option>
              <option value="1980">1980</option>
              <option value="1979">1979</option>
              <option value="1978">1978</option>
              <option value="1977">1977</option>
              <option value="1976">1976</option>
              <option value="1975">1975</option>
              <option value="1974">1974</option>
              <option value="1973">1973</option>
              <option value="1972">1972</option>
              <option value="1971">1971</option>
              <option value="1970">1970</option>
              <option value="1969">1969</option>
              <option value="1968">1968</option>
              <option value="1967">1967</option>
              <option value="1966">1966</option>
              <option value="1965">1965</option>
              <option value="1964">1964</option>
              <option value="1963">1963</option>
              <option value="1962">1962</option>
              <option value="1961">1961</option>
              <option value="1960">1960</option>
              <option value="1959">1959</option>
              <option value="1958">1958</option>
              <option value="1957">1957</option>
              <option value="1956">1956</option>
              <option value="1955">1955</option>
              <option value="1954">1954</option>
              <option value="1953">1953</option>
              <option value="1952">1952</option>
              <option value="1951">1951</option>
              <option value="1950">1950</option>
              <option value="1949">1949</option>
              <option value="1948">1948</option>
              <option value="1947">1947</option>
              <option value="1946">1946</option>
              <option value="1945">1945</option>
              <option value="1944">1944</option>
              <option value="1943">1943</option>
              <option value="1942">1942</option>
              <option value="1941">1941</option>
              <option value="1940">1940</option>              
              <option value="1939">1939</option>
              <option value="1938">1938</option>
              <option value="1937">1937</option>
              <option value="1936">1936</option>
              <option value="1935">1935</option>
              <option value="1934">1934</option>
              <option value="1933">1933</option>
              <option value="1932">1932</option>
              <option value="1931">1931</option>
              <option value="1930">1930</option>
              <option value="1929">1929</option>
              <option value="1928">1928</option>
              <option value="1927">1927</option>
              <option value="1926">1926</option>
              <option value="1925">1925</option>
              <option value="1924">1924</option>
              <option value="1923">1923</option>
              <option value="1922">1922</option>
              <option value="1921">1921</option>
              <option value="1920">1920</option>
              <option value="1919">1919</option>
              <option value="1918">1918</option>
              <option value="1917">1917</option>
              <option value="1916">1916</option>
              <option value="1915">1915</option>
              <option value="1914">1914</option>
              <option value="1913">1913</option>
              <option value="1912">1912</option>
              <option value="1911">1911</option>
              <option value="1910">1910</option>
              </select>
            </div>
            <br />
            
            <div class="emailaddress">
              <label>Email Address:</label><br />
              <input type = "text" name="emailaddress">
            </div>
            
            <div id="phonenumber">  
              <label>Phone Number:</label><br />
              <input type = "text" name="phonenumber">
              (###) ###-#### Format
            </div>
            <br />
                        
              <div id="gender">
              <label>Gender:</label><br />
              <select name="gender">
              <option selected></option>
              <option value="male">Male</option>
              <option value="female">Female</option>
              <option value="neutral">Gender-Neutral</option>
              </select></div>
            
            <div id="ethnicity">  
              <label>Ethnicity:</label><br />
              <input type = "text" name="ethnicity">
              (Optional)
            </div>
              <br>
            
              
        </section>
        
        <section class="infoframe">
        
              <h3>Institutional Information</h3><br />
              
              <div id="institutionname">
              <label>Name of Institution:</label><br />
              <input type = "text" name="institution">
              </div>
              
              <div id="gradyear">
              <label>Graduation Year:</label><br />
              <select name="gradyear" style="width:100%;">
              <option selected></option>
              <option value="2020">2020</option>
              <option value="2019">2019</option>
              <option value="2018">2018</option>
              <option value="2017">2017</option>
              <option value="2016">2016</option>
              <option value="2015">2015</option>
              <option value="2014">2014</option>
              <option value="2013">2013</option>
              <option value="2012">2012</option>
              <option value="2011">2011</option>
              <option value="2010">2010</option>
              <option value="2009">2009</option>
              <option value="2008">2008</option>
              <option value="2007">2007</option>
              <option value="2006">2006</option>
              <option value="2005">2005</option>
              <option value="2004">2004</option>
              <option value="2003">2003</option>
              <option value="2002">2002</option>
              <option value="2001">2001</option>
              <option value="2000">2000</option>
              <option value="1999">1999</option>
              <option value="1998">1998</option>
              <option value="1997">1997</option>
              <option value="1996">1996</option>
              <option value="1995">1995</option>
              <option value="1994">1994</option>
              <option value="1993">1993</option>
              <option value="1992">1992</option>
              <option value="1991">1991</option>
              <option value="1990">1990</option>
              <option value="1989">1989</option>
              <option value="1988">1988</option>
              <option value="1987">1987</option>
              <option value="1986">1986</option>
              <option value="1985">1985</option>
              <option value="1984">1984</option>
              <option value="1983">1983</option>
              <option value="1982">1982</option>
              <option value="1981">1981</option>
              <option value="1980">1980</option>
              <option value="1979">1979</option>
              <option value="1978">1978</option>
              <option value="1977">1977</option>
              <option value="1976">1976</option>
              <option value="1975">1975</option>
              <option value="1974">1974</option>
              <option value="1973">1973</option>
              <option value="1972">1972</option>
              <option value="1971">1971</option>
              <option value="1970">1970</option>
              <option value="1969">1969</option>
              <option value="1968">1968</option>
              <option value="1967">1967</option>
              <option value="1966">1966</option>
              <option value="1965">1965</option>
              <option value="1964">1964</option>
              <option value="1963">1963</option>
              <option value="1962">1962</option>
              <option value="1961">1961</option>
              <option value="1960">1960</option>
              <option value="1959">1959</option>
              <option value="1958">1958</option>
              <option value="1957">1957</option>
              <option value="1956">1956</option>
              <option value="1955">1955</option>
              <option value="1954">1954</option>
              <option value="1953">1953</option>
              <option value="1952">1952</option>
              <option value="1951">1951</option>
              <option value="1950">1950</option>
              <option value="1949">1949</option>
              <option value="1948">1948</option>
              <option value="1947">1947</option>
              <option value="1946">1946</option>
              <option value="1945">1945</option>
              <option value="1944">1944</option>
              <option value="1943">1943</option>
              <option value="1942">1942</option>
              <option value="1941">1941</option>
              <option value="1940">1940</option>              
              <option value="1939">1939</option>
              <option value="1938">1938</option>
              <option value="1937">1937</option>
              <option value="1936">1936</option>
              <option value="1935">1935</option>
              <option value="1934">1934</option>
              <option value="1933">1933</option>
              <option value="1932">1932</option>
              <option value="1931">1931</option>
              <option value="1930">1930</option>
              <option value="1929">1929</option>
              <option value="1928">1928</option>
              <option value="1927">1927</option>
              <option value="1926">1926</option>
              <option value="1925">1925</option>
              <option value="1924">1924</option>
              <option value="1923">1923</option>
              <option value="1922">1922</option>
              <option value="1921">1921</option>
              <option value="1920">1920</option>
              <option value="1919">1919</option>
              <option value="1918">1918</option>
              <option value="1917">1917</option>
              <option value="1916">1916</option>
              <option value="1915">1915</option>
              <option value="1914">1914</option>
              <option value="1913">1913</option>
              <option value="1912">1912</option>
              <option value="1911">1911</option>
              <option value="1910">1910</option>
              </select>
              </div>
              
              
              <div id="major">
              <label>Intended Major:</label><br />
              <input type = "text" name="major">
              (Optional)
              </div>
              <br>
              
              
              <div id="apia">
              <label style="margin-right:0.5%">Please list any relevant Affiliated Organizations you are in:</label><br />
              <input type="text" name="aagroup" style="padding-right:8%;margin-right: 0.5%;">
              (APIA groups, greek life, other)
              </div>
              <br>
              
              <div id="groupcode">
              <label style="margin-right:0.5%">Group Code:</label><br />
              <input type="text" name="groupcode" style="padding-right:8%;margin-right: 0.5%;">
              (Only fill out if you are affiliated with a group that has contacted us.)
              </div>
              <br>
              
              
        </section>
        
        <section class="infoframe">
              
              <h3>Logistics Information</h3><br />
              
              <div id="hearecaasu">
              <label>How did you hear about ECAASU? (Can check multiple)</label><br>
              <label><input type="checkbox" name="hearecaasu[]" value="Email">Email</label><br>
              <label><input type="checkbox" name="hearecaasu[]" value="Website">Website</label><br>
              <label><input type="checkbox" name="hearecaasu[]" value="Campus Tour">Campus Tour</label><br>
              <label><input type="checkbox" name="hearecaasu[]" value="Campus Organization">Campus Organization</label><br>
              <label><input type="checkbox" name="hearecaasu[]" value="Friend">Friend</label><br>
              <label><input type="checkbox" name="hearecaasu[]" value="Twitter">Twitter</label><br>
              <label><input type="checkbox" name="hearecaasu[]" value="Facebook">Facebook</label><br>
              </div>
              <br>
              
              <div id="pastecaasu">
              <label>How many past ECAASU Conferences have you been to?</label>
              <select name="pastecaasu">
              <option selected></option>
              <option value="0">0</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5+">5+</option>
              </select>
              </div>
              <br>
              
              <div id="ambassador">
              <label style="margin-right:0.5%">Campus Ambassador:</label><br />
              <input type="text" name="ambassador" style="padding-right:8%;margin-right: 0.5%;">
              (If an ECAASU Campus Ambassador referred you, what was his or her name?)
              </div>
              <br>
        </section>
        
        <section class="infoframe">
          
          <h3>Emergency Information</h3><br />
          
              <div id="emergencyname">
              <label>Emergency Contact Name:</label><br />
              <input type="text" name="emergencycontact">
              </div>
              
              <div id="emergencynumber">
              <label>Emergency Contact Number:</label><br />
              <input type = "text" name="emergencyphone"><br />
              (###) ###-#### format
              </div>
              <br/><br/><br/>
        </section>
        
        <section class="infoframe">
              <label>Extra Info (Feel free to tell us any extra information or anything you feel is necessary):</label><br>
              <textarea name="extrainfo" rows="8" cols="40"></textarea>
              <br>
        </section>
        
        <section class="infoframe">
              <input type="button" value="Check Registration" onClick="processRegistration();">     
              <INPUT TYPE="reset" >
        </section>
              
        <section id="verification">
            <div id="regtest"></div>      
        </section>
              
        <br />
              
        <section id="termsconditions">
           <h3>Terms and Conditions</h3>
              <div id="tctext">
 
<p>The 2013 East Coast Asian American Student Union (ECAASU) Conference is an event planned by the ECAASU 2013 Conference board, one of the three boards that make up the 501(c)(3) nonprofit, the East Coast Asian American Student Union (ECAASU).</p><br/>
 
<p>ECAASU exists to inspire, educate and empower those interested in Asian Pacific Islander American (APA) Issues. ECAASU aims to strengthen Asian American student organizations through intercollegiate communication in order to advance the social and educational needs of Asian American students, advance the social equality of minorities by eliminating prejudice and discrimination and to promote community-building and mutual understanding among Asian Americans of different nationalities and with all people of color.</p><br/> 
 
<p><b>Participation in the ECAASU 2013 Conference:</b></p><br/>

<p>- Admittance to the conference (workshops, networking events, social events, etc) and ceremonies is strictly limited to paid attendees, volunteers, and conference board members. Since seating is limited, seating is first-come, first-serve.</p><br/> 

<p>- ECAASU will not distribute any personal or confidential information to other entities. ECAASU will also not collect any credit card information as this will all be collected through a separate entity, PayPal.  Should there be any concerns with credit card privacy, please contact PayPal.</p><br/>  

<p>- Unless you have received confirmation of housing via our hosting system or the Hudson Hotel, we are not responsible for finding housing for you.  Moreover, we cannot be held responsible for your travel arrangements and/or issues you encounter when traveling to New York.</p><br/>  

<p>- We are not responsible for any miscommunication via e-mail caused by your e-mail server (including but not limited to information being sent to spam folder, incorrect forwarding of e-mail, or incorrect e-mail entered in registration).</p><br/>

<p>- We are not responsible for providing wifi in any way. Furthermore, you are not allowed to tamper with the wifi network in any way.</p><br/>
 
<p><b>Code of Conduct:</b></p><br/>

<p>- You, the conference attendee, are held responsible for any and all actions that occur in the hotel and on the Columbia/Barnard campus.  You are expected to behave in the best manner possible for the entire duration of the conference.</p>  

<p>- You must respect property and personnel of the Hudson Hotel, or the hotel you choose to stay in as well as all University property and personnel.  Registration for the hotel is final- you may purchase travel insurance should you feel that you cannot attend or will not stay in the hotel.  As per New York State Law & Columbia policy, no smoking inside (or within 20 feet of any Columbia) building.   Moreover, we are not responsible for loss or damage to personal property.</p><br/>

 
<p><b>Photographs, Film and Video Recordings:</b></p><br/> 
<p>- ECAASU is entitled to take photographs, make films or video recordings of events during the conference, and use these for advertising purposes or for publication in the media.  Unless you have given explicit notice in advance that you do not want to be recorded in any form, we will assume that it is acceptable to have media cover this conference.</p><br/>
 
<p><b>Payment Terms:</b></p><br/>
<p>- ECAASU will not issue any refunds after a purchase has gone through. However, we will allow for registration tickets to be transferred to another person, but only after properly notifying the registration committee of the transfer and confirmation of transfer is sent to both the old ticket holder and new ticket holder.</p><br/>

<p>- ECAASU also holds a limited amount of tickets at each registration level (Early Bird, Regular, and Late), so the price of your registration ticket may jump to higher price if tickets at the lower level run out during your registration.</p><br/>

<p>- You can pay in a lump sum through PayPal using your credit card.</p><br/>
<p>- Should you choose to pay via check, you must e-mail tech@ecaasu2013.org the day you send the check notifying us the date it is postmarked as well as the amount on the check.  The day you write out the check, the amount you pay should equal the current price listed on the website*number of attendees you have sent over. </p><br/>

<p><b>Liability:</b></p><br/>
<p>- It is agreed that neither ECAASU nor any of its individual board members nor any of its sponsors shall have any liability or responsibility for any personal injury, property damage or other loss suffered by a conference participant resulting from the action or inaction of any person other than a board member of ECAASU.</p><br/>
 
<p>- It in the event of, or likelihood of, any circumstances that may create an extraordinary risk of injury or damage, ECAASU shall have the right at its sole discretion to determine the course of action to be followed.</p><br/>
 
<p>- This application for registration, when signed by a participant, shall serve as an agreement between ECAASU and the conference participant, and shall indicate that the Conditions of this Conference Registration Agreement have been read and understood by the delegate. ECAASU reserves the right to consider as incomplete any registration submitted without signature.</p><br/>
 
<p>By checking the box below and registering, I confirm that I have read, understood and accept, the ECAASU Terms and Conditions upon completion of ECAASU Registration. I accept that ECAASU has the right to ask any delegate to leave ECAASU without refund or explanation, if they are in breach of its Terms & Conditions.</p><br/>





              </div><br />
                  
          <label id ="tcagree">I have read, understood, and agree to all the above Terms and Conditions.   <input type="checkbox" onChange="displaySubmit();"></label>
              
        </section>
        
        <section id="submitarea">
        </section>          
              
        </form><!--large form-->
        <br/>
        <div class="infoframe" id="alreadypaid">If you have already registered and are looking to pay, please click here: <a href="payhere.html">Payment</a>
        </div>
  </body>
    
</html>