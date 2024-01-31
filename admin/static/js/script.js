"use strict"

var services = document.querySelectorAll('.services');
var featureButton = document.getElementsByClassName('feature_button');
var mode = document.querySelectorAll('.mode');
var modePages = document.getElementsByClassName('mode_page');
var uploadButton = document.querySelector('.upload_button');
var logo = document.querySelector(".logo");
var deleteButton = document.querySelector(".delete");


// Show the features
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

// Default features;
globalFuction();





// Web mode
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
    deleteButton.style.display = "block";




}



// uploadButton.addEventListener('click', () => {

//     const inputFile = document.createElement('input');
//     inputFile.setAttribute("type", 'file');
//     inputFile.classList.add("logoSelect");
//     inputFile.click();
//     inputFile.addEventListener("change", setImage);
//     const logoImage = document.querySelector('.logo');
//     logoImage.style.display = "block";






// });





// delete
deleteButton.addEventListener('click', () => {
    const logoImage = document.querySelector('.logo');
    logoImage.style.display = "none";
    deleteButton.style.display = "none";

});




// Jquery
(function ($) {
    $(document).on('click', '.upload_button', function (e) {
        e.preventDefault();
        var $this = $(this);
        var image = wp.media({
            title: 'Upload Image',
            // mutiple: true if you want to upload multiple files at once
            multiple: false
        }).open()
            .on('select', function (e) {
                // This will return the selected image from the Media Uploader, the result is an object
                var uploaded_image = image.state().get('selection').first();
                // We convert uploaded_image to a JSON object to make accessing it easier
                // Output to the console uploaded_image
                var image_url = uploaded_image.toJSON().url;
                // Let's assign the url value to the input field
                $this.prev('.img-input-selector').val(image_url);

            });
    });

})(jQuery);