/*
 Travel Algorithm for subway travel/scrolling effect:
 Travels to the target area and then target frame through x-axis and y-axis travel/scrolling.
 Order of x-axis and y-axis travel depends on the layout of the target area. 
 Target areas are represented primary by travel hubs (categorical frames that travel to all other frames within an area must go through), since the scrollTo function requires a frame target.
 - Streamlined for relative speed through keeping track of current area instead of current frame
 - Five frame areas (About Us, Program, Homeframe, Logistics, Sponsors)
 - Implemented using the spatial relationships between different areas and frames within areas.
 - scrollTo method is part of Ariel Flesler's JQuery scroll plugin
 @param target - target frame to travel to
 @param targetArea - the area that the target frame is in
 */
var screenStatus=3; //Home frame on initial page load
function travel(target, targetArea){
    //Travels to the target area
    if (screenStatus !== targetArea){ //if current area is not the target area
        switch(screenStatus){
            case 1: 
                $.scrollTo( '#frame8', 2000, {axis:'x'} ); 
                $.scrollTo( '#frame20', 2000, {axis:'y'} ); 
                break; 
            case 2: 
                $.scrollTo( '#frame36', 2000, {axis:'y'} ); 
                $.scrollTo( '#frame20', 2000, {axis:'x'} ); 
                break; 
            case 4: 
                $.scrollTo( '#frame51', 2000, {axis:'y'} ); 
                $.scrollTo( '#frame20', 2000, {axis:'x'} ); 
                break; 
            case 5: 
                $.scrollTo( '#frame66', 2000, {axis:'x'} ); 
                $.scrollTo( '#frame20', 2000, {axis:'y'} ); 
            default: 
                break; 
        }   
     } 
     //Travels to the target frame
     switch(targetArea){ 
         case 1: 
            $.scrollTo(target, 2000, {axis:'y'} ); 
            $.scrollTo(target, 2000, {axis:'x'} ); 
            break; 
         case 2: 
            $.scrollTo(target, 2000, {axis:'x'} ); 
            $.scrollTo(target, 2000, {axis:'y'} ); 
            break; 
         case 4: 
            $.scrollTo(target, 2000, {axis:'x'} ); 
            $.scrollTo(target, 2000, {axis:'y'} ); 
            break; 
         case 5: 
            $.scrollTo(target, 2000, {axis:'y'} ); 
            $.scrollTo(target, 2000, {axis:'x'} ); 
            break; 
         default: 
            break; 
     } 
     
     //Updates current area information
     screenStatus = targetArea; 
     
     //Minimizes announcements bar on bottom once travel function is called (travel link clicked)
     if (contentWritten==1){
         announcementOperation();
     }
};

//Minimizes and pops up the announcements bar on the bottom
var contentWritten = 0; //Announcement content written = 1, Announcement content not written = 0
function announcementOperation(){
    //Pops up announcements bar
    if(contentWritten==0){//if it is minimized
        document.getElementById('stickybar').innerHTML += "<div id='announcementstuff'></div>";
        var announcements = "<a class='annlink' onClick=\"travel('#frame29', 2);\"><div class='figure' style='float:left;'><p style='margin-bottom:5px;'>Check out the Keynote Speakers!</p><p><img src='announcements/speakers.png'></p></div></a><a class='annlink' href='registration.php' target='_blank'><div class='figure' style='float:left;margin-left:25px;'><p style='margin-bottom:5px;'>Limited Late Registration Spots</p>  <p><img src='announcements/registration.jpg'></p></div></a><a class='annlink' href='hotelregistration.html' target='_blank'><div class='figure' style='left:50%;margin-left:-135px;width:270px;position:absolute;'><p style='margin-bottom:5px;'>Standard Queen rooms still available!</p>  <p><img src='announcements/hotelregistration.jpg'></p></div></a><a class='annlink' onClick=\"travel('#frame43', 2);\"><div class='figure' style='float:right;'>  <p style='margin-bottom:5px;'>See our announced performers!</p><p><img src='announcements/performers.png'></p></div></a><a class='annlink' onClick=\"travel('#frame25', 2);\"><div class='figure' style='float:right;margin-right:25px;'>  <p style='margin-bottom:5px;'>Read over workshop info!</p><p><img src='announcements/workshops.png'></p></div></a>";
        document.getElementById('announcementstuff').innerHTML += announcements;
        document.getElementById('plusminus').src="close.gif";
        document.getElementById('announcementbartext').innerHTML='<b>Click to Minimize</a><br/><br/>';
        contentWritten=1;
    }
    //Minimizes announcements bar
    else if (contentWritten==1){//if it is popped up
        var child = document.getElementById('announcementstuff');
        var parent = document.getElementById('stickybar');
        parent.removeChild(child);
        document.getElementById('plusminus').src="open.gif";
        document.getElementById('announcementbartext').innerHTML='<b>Click for Announcements</a>';        
        contentWritten=0;
    }
};