const menuIconOpen = document.querySelector("#cohabitMenuIcon");
const menuIconClose = document.querySelector("#cohabitMenuCloseIcon");
const navOptionsContainer = document.querySelector("#cohabitNavigationOptionsContainer");
const cohabitLogo = document.querySelector("#cohabitLogoContainer");
const navFlexContainer = document.querySelector("#cohabitContainer");

menuIconOpen.addEventListener("click", function () {
    console.log("Menu Open");

    menuIconOpen.style.display = "none";
    menuIconClose.style.display = "block";

    navFlexContainer.style.height = "100%";
    navFlexContainer.style.width = "100%";
    navFlexContainer.style.backgroundColor = "#F7F9F7";
    navFlexContainer.style.zIndex = "999";
    navFlexContainer.style.flexDirection = "column-reverse";
    navFlexContainer.style.position = "fixed";
    navFlexContainer.style.margin = "0";

    navOptionsContainer.style.display = "block";

    cohabitLogo.style.height = "150px";
});

menuIconClose.addEventListener("click", function () {
    console.log("Menu Close");

    menuIconOpen.style.display = "block";
    menuIconClose.style.display = "none";

    navFlexContainer.style.height = "";
    navFlexContainer.style.width = "";
    navFlexContainer.style.backgroundColor = "";
    navFlexContainer.style.zIndex = "";
    navFlexContainer.style.flexDirection = "";
    navFlexContainer.style.position = "";
    navFlexContainer.style.margin = "";

    navOptionsContainer.style.display = "";

    cohabitLogo.style.height = "";
});

// Slider for front page
let slideIndex = 0;
const slides = document.querySelectorAll('.slide');

function showSlide(amount) {
    if (amount >= slides.length) {
        slideIndex = 0;
    }
    if (amount < 0) {
        slideIndex = slides.length - 1;
    }
    for (let i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }

    slides[slideIndex].style.display = "block";
}

function nextSlide() {
    showSlide(slideIndex += 1);
}

function autoSlide() {
    nextSlide();
}

setInterval(autoSlide, 2000); // 3 seconds

// Check Window Size
if (window.innerWidth <= 1250) {
    // Mobile
    document.getElementById('slider').style.display = 'block';
    document.getElementById('defaultContent').style.display = 'none';

    window.addEventListener('resize', function () {
        // Check window width and toggle slider visibility
        if (window.innerWidth <= 1250) {
            // Mobile
            document.getElementById('slider').style.display = 'block';
            document.getElementById('defaultContent').style.display = 'none';
        } else {
            // Desktop
            document.getElementById('slider').style.display = 'none';
            document.getElementById('defaultContent').style.display = 'flex';
        }
    });

} else {
    // Desktop
    document.getElementById('slider').style.display = 'none';
    document.getElementById('defaultContent').style.display = 'flex';

    window.addEventListener('resize', function () {
        // Check window width and toggle slider visibility
        if (window.innerWidth <= 1250) {
            // Mobile
            document.getElementById('slider').style.display = 'block';
            document.getElementById('defaultContent').style.display = 'none';
        } else {
            // Desktop
            document.getElementById('slider').style.display = 'none';
            document.getElementById('defaultContent').style.display = 'flex';
        }
    });
}


function slideSlider() {
    $("#logosSliderTrack").css({ "left": "0%", "transition": "all 0s linear" });
    $("#logosSliderTrack").css({ "left": String(parseInt($("#logosSliderTrack").css("left")) - 500) + "px", "transition": "all 5s linear" });
    setTimeout(function () { moveSliderItem() }, 2635);
}

function moveSliderItem() {
    $("#logosSliderTrack div").first().detach().appendTo($("#logosSliderTrack"));
    slideSlider();
}

slideSlider();
