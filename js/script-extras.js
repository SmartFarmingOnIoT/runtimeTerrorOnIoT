function runMotorA() {
    var xhr = new XMLHttpRequest();
    xhr.open("GET", 'http://localhost/checkbuttonprior.php', false);
    xhr.send( null );
    var response=xhr.responseText;
    var buttonStatus = JSON.parse(response);
    var prevbutton1=buttonStatus.button1;
    if (prevbutton1=='on'){
        var xhr2 = new XMLHttpRequest();
        xhr2.open("GET", 'http://localhost/button.php?button1=off', false);
        xhr2.send( null );
        document.getElementById("buttonA").innerHTML = "Start Motor";
    }
    else if (prevbutton1=='off'){
        var xhr2 = new XMLHttpRequest();
        xhr2.open("GET", 'http://localhost/button.php?button1=on', false);
        xhr2.send( null );
        document.getElementById("buttonA").innerHTML = "Stop Motor";
    }
}

function runMotorB() {
    var xhr = new XMLHttpRequest();
    xhr.open("GET", 'http://localhost/checkbuttonprior.php', false);
    xhr.send( null );
    var response=xhr.responseText;
    var buttonStatus = JSON.parse(response);
    var prevbutton2=buttonStatus.button2;
    if (prevbutton2=='on'){
        var xhr2 = new XMLHttpRequest();
        xhr2.open("GET", 'http://localhost/button.php?button2=off', false);
        xhr2.send( null );
        document.getElementById("buttonB").innerHTML = "Start Motor";
    }
    else if (prevbutton2=='off'){
        var xhr2 = new XMLHttpRequest();
        xhr2.open("GET", 'http://localhost/button.php?button2=on', false);
        xhr2.send( null );
        document.getElementById("buttonB").innerHTML = "Stop Motor";
    }
}

function checkSoilMoistureA(){
    var xhr = new XMLHttpRequest;
    xhr.open("GET", 'http://localhost/datatograph.php', false);
    xhr.send(null);
    var soilMoistureStatus = JSON.parse(xhr.responseText);
    if (soilMoistureStatus.mosture < 10) {
        var xhr2 = new XMLHttpRequest();
        xhr2.open("GET", 'http://localhost/button.php?button1=on', false);
        xhr2.send( null );
        document.getElementById("buttonA").innerHTML = "Stop Motor";
    }
}






