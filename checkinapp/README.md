Checkin Application

This application is intended for usage by ECAASU Conference volunteers for checking in Conference registrants.
It is extremely user-friendly and streamlined as up to 100-200 registrants may line up to check in at one time.
In practice, the check-in process for each registrant with this application takes 5-7 seconds.
Group check-in (of multiple people) is not allowed or implemented as registrants are required to individually present photo IDs while checking in.

Three pages in user (volunteer) flow:
http://www.ecaasu2013.org/checkinapp/checkin.php
http://www.ecaasu2013.org/checkinapp/getquery.php
http://www.ecaasu2013.org/checkinapp/checkregistrant.php

checkin.php:

- Search page
- Users can search by registrant ID (unique for each registrant), first name, last name, and/or email address
- Either one or multiple search parameters can be used in a search
- Clicking "Search" button directs to getquery.php with the search query

getquery.php:

- Page with a cleanly formatted table where each row is a registrant that matched all the search parameters entered in the search
- Each row and contains the registrant ID, first name, last name, institution, email address, whether or not they are already checked in, and a button to check that registrant in labeled "Check In"
- Volunteers/users may feel free to use the other information fields to verify the identity of the registrant
- Clicking the "Check In" button for a specific registrant will redirect to checkregistrant.php which checks that registrant in. 

checkregistrant.php:

- Checks the registrant (whose "Check In" button was clicked) in. (Check in status is logged in database so a repeat search for that registrant will show that registrant as checked in.)
- A confirmation message of check-in status will appear for 1 second and automatically redirect back to checkin.php
- Volunteers must be informed (before their shift) of this confirmation message.
