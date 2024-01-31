// Global variables
var dateElement = document.querySelector(".date");
var timeElement = document.querySelector(".time");
var timeSecond = document.querySelector(".second");
var expireDate = new Date(dateElement.innerHTML + " " + timeElement.innerHTML)
var expireTime = expireDate.getTime()




// CountDown timer
setInterval(() => {
    const now = new Date().getTime();
    const distance = expireTime - now;
    const days = Math.floor(distance / (1000 * 60 * 60 * 24));
    const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    const seconds = Math.floor((distance % (1000 * 60)) / 1000);

    dateElement.innerHTML = days + " Days";
    // if (hours < 11) {
    //     timeElement.innerHTML = hours + "0" + ": " + minutes;
    // } else {
    timeElement.innerHTML = hours + ": " + minutes;
    // }

    timeSecond.innerHTML = seconds;
}, 1000);


// Donont show if the 