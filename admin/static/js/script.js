"use strict"

const services = document.querySelectorAll('.cww_services');
const featureButton = document.getElementsByClassName('cww_feature_button');
const mode = document.querySelectorAll('.cww_mode');
const modePages = document.getElementsByClassName('cww_mode_page');
const uploadButton = document.querySelector('.cww_upload_button');
const logo = document.querySelector(".cww_userselected_logo");
const deleteButton = document.querySelector(".cww_delete");
const deleteButtonBack = document.querySelector(".cww_maintenance_delete_background_image");
const cwwMaintenanceUserselectedBackgroundImage = document.querySelector(".cww_maintenance_userselected_background_image");
const cwwTemplateDiv = document.querySelectorAll('.cww_template');
const cwwActiveButton = document.getElementsByClassName('cww_active_button');


// Show the features
function showFeature() {

    [...featureButton].map((currentButton, index) => {
        currentButton.addEventListener('click', () => {
            if (index === 0) {
                services[index].style.display = 'block';
                services[1].style.display = 'none';
                services[2].style.display = 'none';
                services[3].style.display = 'none';
                services[3].style.display = 'none';

                currentButton.style.backgroundColor = "rgb(1, 7, 11)";
                featureButton[1].style.backgroundColor = "rgb(0, 65, 91)";
                featureButton[2].style.backgroundColor = "rgb(0, 65, 91)";
                featureButton[3].style.backgroundColor = "rgb(0, 65, 91)";


            } else if (index === 1) {
                services[index].style.display = 'block';
                services[0].style.display = 'none';
                services[2].style.display = 'none';
                services[3].style.display = 'none';

                currentButton.style.backgroundColor = "rgb(1, 7, 11)";
                featureButton[0].style.backgroundColor = "rgb(0, 65, 91)";
                featureButton[2].style.backgroundColor = "rgb(0, 65, 91)";
                featureButton[3].style.backgroundColor = "rgb(0, 65, 91)";


            } else if (index === 2) {
                services[index].style.display = 'block';
                services[1].style.display = 'none';
                services[0].style.display = 'none';
                services[3].style.display = 'none';

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


// Active the template 
activeTheTemplate()

function activeTheTemplate() {

    cwwTemplateDiv.forEach((currentElement, index) => {
        currentElement.onclick = () => {
            cwwActiveButton[index].click();

        }
    });
}



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


    /**
         * Icon picker
         * 
         */
    var delay = (function () {
        var timer = 0;
        return function (callback, ms) {
            clearTimeout(timer);
            timer = setTimeout(callback, ms);
        };
    })();
    $('body').on('click', '.sf-forms-icon-box .sf-forms-icon-list li', function () {
        var icon_class = $(this).find('i').attr('class');
        $(this).closest('.sf-forms-icon-box').find('.sf-forms-icon-list li').removeClass('icon-active');
        $(this).addClass('icon-active');
        $(this).closest('.sf-forms-icon-box').prev('.sf-forms-selected-icon').children('i').attr('class', '').addClass(icon_class);
        $(this).closest('.sf-forms-icon-box').next('input').val(icon_class).trigger('change');
        $(this).closest('.sf-forms-icon-box').slideUp();
    });

    $('body').on('click', '.sf-forms-icon-box .sf-forms-selected-icon', function () {
        $(this).next().slideToggle();
    });

    $('body').on('change', '.sf-forms-icon-box .sf-forms-icon-search select', function () {
        var selected = $(this).val();
        $(this).closest('.sf-forms-icon-box').find('.sf-forms-icon-search-input').val('');
        $(this).closest('.sf-forms-icon-box').find('.sf-forms-icon-list li').show();
        $(this).closest('.sf-forms-icon-box').find('.sf-forms-icon-list').hide().removeClass('active');
        $(this).closest('.sf-forms-icon-box').find('.' + selected).fadeIn().addClass('active');
    });

    $('body').on('keyup', '.sf-forms-icon-box .sf-forms-icon-search input', function (e) {
        var $input = $(this);
        var keyword = $input.val().toLowerCase();
        var search_criteria = $input.closest('.sf-forms-icon-box').find('.sf-forms-icon-list.active i');

        delay(function () {
            $(search_criteria).each(function () {
                if ($(this).attr('class').indexOf(keyword) > -1) {
                    $(this).parent().show();
                } else {
                    $(this).parent().hide();
                }
            });
        }, 500);
    });


    $(".cww-multiselect-values,#toggle_font_family").chosen({
        width: "95%"
    });

    $('body').on('change', '#container_bg_type', function () {
        var currentBG = $(this).val();
        if (currentBG == 'color') {
            $(this).parent().parent().next().next('.wrapper-bg-type-img').removeClass('active');
            $(this).parent().parent().next('.wrapper-bg-type-color').toggleClass('active');
        } else {
            $(this).parent().parent().next('.wrapper-bg-type-color').removeClass('active');
            $(this).parent().parent().next().next('.wrapper-bg-type-img').toggleClass('active');
        }
    });

})(jQuery);




