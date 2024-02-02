"use strict"

var services = document.querySelectorAll('.cww_services');
var featureButton = document.getElementsByClassName('cww_feature_button');
var mode = document.querySelectorAll('.cww_mode');
var modePages = document.getElementsByClassName('cww_mode_page');
var uploadButton = document.querySelector('.cww_upload_button');
var logo = document.querySelector(".cww_userselected_logo");
var deleteButton = document.querySelector(".cww_delete");
var deleteButtonBack = document.querySelector(".cww_maintenance_delete_background_image");
var cwwMaintenanceUserselectedBackgroundImage = document.querySelector(".cww_maintenance_userselected_background_image");



// Show the features
function showFeature() {

    [...featureButton].map((currentButton, index) => {
        currentButton.addEventListener('click', () => {
            if (index === 0) {
                services[index].style.display = 'block';
                services[1].style.display = 'none';
                services[2].style.display = 'none';
                services[3].style.display = 'none';
                currentButton.style.backgroundColor = "rgb(1, 7, 11)";
                featureButton[1].style.backgroundColor = "rgb(0, 65, 91)";
                featureButton[2].style.backgroundColor = "rgb(0, 65, 91)";
                featureButton[3].style.backgroundColor = "rgb(0, 65, 91)";



            } else if (index === 1) {
                services[index].style.display = 'block';
                services[0].style.display = 'none';
                services[2].style.display = 'none';
                currentButton.style.backgroundColor = "rgb(1, 7, 11)";
                featureButton[0].style.backgroundColor = "rgb(0, 65, 91)";
                featureButton[2].style.backgroundColor = "rgb(0, 65, 91)";
                featureButton[3].style.backgroundColor = "rgb(0, 65, 91)";


            } else if (index === 2) {
                services[index].style.display = 'block';
                services[1].style.display = 'none';
                services[0].style.display = 'none';
                currentButton.style.backgroundColor = "rgb(1, 7, 11)";
                featureButton[1].style.backgroundColor = "rgb(0, 65, 91)";
                featureButton[0].style.backgroundColor = "rgb(0, 65, 91)";
                featureButton[3].style.backgroundColor = "rgb(0, 65, 91)";
            } else if (index === 3) {
                services[3].style.display = 'block';
                services[1].style.display = 'none';
                services[2].style.display = 'none';
                services[0].style.display = 'none';
                currentButton.style.backgroundColor = "rgb(1, 7, 11)";
                featureButton[1].style.backgroundColor = "rgb(0, 65, 91)";
                featureButton[0].style.backgroundColor = "rgb(0, 65, 91)";
                featureButton[2].style.backgroundColor = "rgb(0, 65, 91)";
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










// delete the seelcted image
deleteButton.addEventListener('click', () => {
    const logoImage = document.querySelector('.cww_userselected_logo');
    logoImage.style.display = "none";
    deleteButton.style.display = "none";
    const imgInput = document.querySelector('.cww_img-src-save');

    // Let's assign the url value to the input field
    // $this.prev('.cww_img-src-save').val(image_url);
    imgInput.value = "";

});

// Vanilla javascript end 


// Jquery start 




// upload the logo
(function ($) {
    $(document).on('click', '.cww_upload_button', function (e) {
        e.preventDefault();
        var $this = $(this);
        var image = wp.media({
            title: 'Upload Image',
            // mutiple: true if you want to upload multiple files at once
            multiple: false
        }).open()
            .on('select', function (e) {
                const logoImage = document.querySelector('.cww_userselected_logo');
                logoImage.style.display = "block";
                // This will return the selected image from the Media Uploader, the result is an object
                var uploaded_image = image.state().get('selection').first();
                // We convert uploaded_image to a JSON object to make accessing it easier
                // Output to the console uploaded_image
                var image_url = uploaded_image.toJSON().url;
                console.log(image_url);
                logo.src = image_url;
                deleteButton.style.display = "block";
                const imgInput = document.querySelector('.cww_maintenance_logo_img-src-save');

                // Let's assign the url value to the input field
                // $this.prev('.cww_img-src-save').val(image_url);
                imgInput.value = image_url;
            });
    });

})(jQuery);



// Upload the background image

deleteButtonBack.addEventListener('click', () => {
    const backImage = document.querySelector('.cww_maintenance_userselected_background_image');
    backImage.style.display = "none";
    deleteButtonBack.style.display = "none";
    const imgInput = document.querySelector('.cww_maintenance_back_img-src-save');

    // Let's assign the url value to the input field
    // $this.prev('.cww_img-src-save').val(image_url);
    imgInput.value = "";

});

(function ($) {
    $(document).on('click', '.cww_maintenance_upload_back_button', function (e) {
        e.preventDefault();
        var $this = $(this);
        var image = wp.media({
            title: 'Upload Image',
            // mutiple: true if you want to upload multiple files at once
            multiple: false
        }).open()
            .on('select', function (e) {
                const logoImage = document.querySelector('.cww_maintenance_userselected_background_image');
                logoImage.style.display = "block";
                // This will return the selected image from the Media Uploader, the result is an object
                var uploaded_image = image.state().get('selection').first();
                // We convert uploaded_image to a JSON object to make accessing it easier
                // Output to the console uploaded_image
                var image_url = uploaded_image.toJSON().url;
                console.log(image_url);
                cwwMaintenanceUserselectedBackgroundImage.src = image_url;
                deleteButtonBack.style.display = "block";
                const imgInput = document.querySelector('.cww_maintenance_back_img-src-save');
                e
                // Let's assign the url value to the input field
                // $this.prev('.cww_img-src-save').val(image_url);
                imgInput.value = image_url;
            });
    });

})(jQuery);
