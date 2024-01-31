var services = document.querySelectorAll('.services');
var featureButton = document.getElementsByClassName('feature_button');
var mode = document.querySelectorAll('.mode');
var modePages = document.getElementsByClassName('mode_page');
var uploadButton = document.querySelector('.upload_button');
var logo = document.querySelector(".logo");
var deleteButton = document.querySelector(".delete");
var track = 0;

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
    });
});






function setImage(e) {
    const file = e.target.files[0];
    console.log(file)
    const imgUrl = URL.createObjectURL(file);
    logo.src = imgUrl;
    deleteButton.classList.add('show');



}



uploadButton.addEventListener('click', () => {
    const logoImage = document.querySelector('.logo');
    logoImage.style.display = "block";
    const inputFile = document.createElement('input');
    inputFile.setAttribute("type", 'file');
    inputFile.classList.add("logoSelect");
    if (track === 1) {
        const logoSelect = document.querySelector('.logoSelect');
        logoSelect.value = '';
    }
    inputFile.click();
    inputFile.addEventListener("change", setImage);
});





// delete
deleteButton.addEventListener('click', () => {
    const logoImage = document.querySelector('.logo');
    logoImage.style.display = "none";
    deleteButton.style.display = "none";
    if (track === 0) {
        track++
    }
});