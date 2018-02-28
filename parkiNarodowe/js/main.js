navClock()

function navClock() {
    
    var getTime = new Date();
    var hour = getTime.getHours();
    if (hour < 10) {
        hour = "0" + hour;
    }
    var minutes = getTime.getMinutes();
    if (minutes < 10) {
        minutes = "0" +minutes;
    }
    var second = getTime.getSeconds();
    if (second < 10) {
        second = "0" + second;
    }

    document.getElementById("clock").innerHTML = hour + ":" + minutes + ":" + second
    
    setTimeout("navClock()",1000);
};

