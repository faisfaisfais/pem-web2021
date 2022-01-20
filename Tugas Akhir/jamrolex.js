function displayTime(){
    var dateTIme = new Date();
    var hrs = dateTIme.getHours();
    var min = dateTIme.getMinutes();
    var sec = dateTIme.getSeconds();

    document.getElementById('hours').innerHTML = hrs;
    document.getElementById('minutes').innerHTML = min;
    document.getElementById('seconds').innerHTML = sec;
}

setInterval(displayTime, 10);