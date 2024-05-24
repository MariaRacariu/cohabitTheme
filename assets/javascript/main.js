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

// Logo Slider
let logoSliderIndex = 0;
const logoSlides = document.querySelectorAll('.logoSlide');

function showLogoSlide(logoAmount) {
    if (logoAmount >= logoSlides.length) {
        logoSliderIndex = 0;
    }
    if (logoAmount < 0) {
        slideIndex = logoSlides.length - 1;
    }
    for (let i = 0; i < logoSlides.length; i++) {
        logoSlides[i].style.display = "none";
    }

    logoSlides[logoSliderIndex].style.display = "block";
}

function logoNextSlide() {
    showLogoSlide(logoSliderIndex += 1);
}

function logoAutoSlide() {
    logoNextSlide();
}

setInterval(logoAutoSlide, 2000);

if (window.innerWidth <= 700) {
    // Mobile
    document.getElementById('logosSlider').style.display = 'block';
    document.getElementById('logosDefaultContent').style = 'none';

    window.addEventListener('resize', function () {
        if (window.innerWidth <= 700) {
            // Mobile
            document.getElementById('logosSlider').style.display = 'block';
            document.getElementById('logosDefaultContent').style = 'none';
        } else {
            // Desktop
            document.getElementById('logosSlider').style.display = 'none';
            document.getElementById('logosDefaultContent').style = 'flex';
        }
    });
} else {
    // Desktop
    document.getElementById('logosSlider').style.display = 'none';
    document.getElementById('logosDefaultContent').style = 'flex';

    window.addEventListener('resize', function () {
        if (window.innerWidth <= 700) {
            document.getElementById('logosSlider').style.display = 'block';
            document.getElementById('logosDefaultContent').style = 'none';
        } else {
            document.getElementById('logosSlider').style.display = 'none';
            document.getElementById('logosDefaultContent').style = 'flex';
        }
    })
}