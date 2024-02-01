// Global variables
var dateElement = document.querySelector(".date");
var timeElement = document.querySelector(".time");
var timeSecond = document.querySelector(".second");
var expireDate = new Date(dateElement.innerHTML + " " + timeElement.innerHTML);
var expireTime = expireDate.getTime();
var menuOpen = document.getElementsByClassName('cww_openform_button')[0];
var form = document.querySelector('.cww_template2_form');
var cutForm = document.querySelector(".cww_form_cut");




// CountDown timer
setInterval(() => {
    const now = new Date().getTime();
    const distance = expireTime - now;
    const days = Math.floor(distance / (1000 * 60 * 60 * 24));
    const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    const seconds = Math.floor((distance % (1000 * 60)) / 1000);

    dateElement.innerHTML = days + " Days";
    timeElement.innerHTML = hours + ": " + minutes;
    timeSecond.innerHTML = seconds;
}, 1000);




// click menu to open form
menuOpen.addEventListener('click', () => {
    form.classList.add("cww_showtemplate2_form");
});


//Click cut form to remove the form
cutForm.addEventListener('click', () => {
    form.classList.remove("cww_showtemplate2_form");

});

