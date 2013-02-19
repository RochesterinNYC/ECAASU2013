function login(){
    var password = document.ecaasulogin.checkinpass.value;
    if (password == "ecaasusteak"){
        var appWindow = window.open("http://www.ecaasu2013.org/checkinapp/checkin.php", "mywindow", "location=1,width=1000,height=1000,status=1,scrollbars=1");
        appWindow.moveTo(10, 10);
    }
    
    else{
        var pwswrong = document.getElementById("pwswrong");
        pwswrong.innerHTML = "Your password was wrong.";
    }
}
