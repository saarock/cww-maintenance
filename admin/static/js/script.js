const services = document.querySelectorAll('.services');
const featureButton = document.getElementsByClassName('feature_button');




function showFeature() {
    [...featureButton].map((currentButton, index) => {
        currentButton.addEventListener('click', () => {
            if (index === 0) {
                services[index].style.display = 'block';
                services[1].style.display = 'none';
                services[2].style.display = 'none';
                currentButton.style.backgroundColor = "pink";
                featureButton[1].style.backgroundColor = "gainsboro";
                featureButton[2].style.backgroundColor = "gainsboro";


            } else if (index === 1) {
                services[index].style.display = 'block';
                services[0].style.display = 'none';
                services[2].style.display = 'none';
                currentButton.style.backgroundColor = "pink";
                featureButton[0].style.backgroundColor = "gainsboro";
                featureButton[2].style.backgroundColor = "gainsboro";

            } else if (index === 2) {
                services[index].style.display = 'block';
                services[1].style.display = 'none';
                services[0].style.display = 'none';
                currentButton.style.backgroundColor = "pink";
                featureButton[1].style.backgroundColor = "gainsboro";
                featureButton[0].style.backgroundColor = "gainsboro";
            }


        });

    });
}

showFeature();

function globalFuction() {
    featureButton[0].style.backgroundColor = "pink";

    services[0].style.display = 'block';

}
globalFuction()