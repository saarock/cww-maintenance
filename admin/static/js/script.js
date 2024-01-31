var services = document.querySelectorAll('.services');
var featureButton = document.getElementsByClassName('feature_button');
var mode = document.querySelectorAll('.mode');
var modePages = document.getElementsByClassName('mode_page');


function showFeature() {
    [...featureButton].map((currentButton, index) => {
        currentButton.addEventListener('click', () => {
            if (index === 0) {
                services[index].style.display = 'block';
                services[1].style.display = 'none';
                services[2].style.display = 'none';
                currentButton.style.backgroundColor = "rgb(1, 7, 11)";
                featureButton[1].style.backgroundColor = "rgb(0, 65, 91)";
                featureButton[2].style.backgroundColor = "rgb(0, 65, 91)";


            } else if (index === 1) {
                services[index].style.display = 'block';
                services[0].style.display = 'none';
                services[2].style.display = 'none';
                currentButton.style.backgroundColor = "rgb(1, 7, 11)";
                featureButton[0].style.backgroundColor = "rgb(0, 65, 91)";
                featureButton[2].style.backgroundColor = "rgb(0, 65, 91)";

            } else if (index === 2) {
                services[index].style.display = 'block';
                services[1].style.display = 'none';
                services[0].style.display = 'none';
                currentButton.style.backgroundColor = "rgb(1, 7, 11)";
                featureButton[1].style.backgroundColor = "rgb(0, 65, 91)";
                featureButton[0].style.backgroundColor = "rgb(0, 65, 91)";
            }


        });

    });
}

showFeature();

function globalFuction() {
    featureButton[0].style.backgroundColor = "rgb(1, 7, 11)";
    services[0].style.display = 'block';
    modePages[0].style.display = "block";

}
globalFuction();





function webMode(index) {
    if (index === 0) {
        modePages[index].style.display = "block";
        modePages[1].style.display = "none";
        modePages[2].style.display = "none";
    } else if (index === 1) {
        modePages[index].style.display = "block";
        modePages[0].style.display = "none";
        modePages[2].style.display = "none";
    } else {
        modePages[index].style.display = "block";
        modePages[0].style.display = "none";
        modePages[1].style.display = "none";
    }


}

mode.forEach((current, index) => {
    current.addEventListener('click', () => {
        webMode(index)
    })
})