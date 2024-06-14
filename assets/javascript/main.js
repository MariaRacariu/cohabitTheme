// Navigation
const dropdown = document.querySelector('.sub-menu');
const navItem = document.querySelector('#menu-item-29');

navItem.addEventListener("mouseover", () => {
    dropdown.style.display = 'block';
    console.log("Hello");
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

setInterval(autoSlide, 1000); // 4 seconds

// Check Window Size
if (window.innerWidth <= 1250) {
    // Mobile
    document.getElementById('slider').style.display = 'flex';
    document.getElementById('defaultContent').style.display = 'none';

    window.addEventListener('resize', function () {
        // Check window width and toggle slider visibility
        if (window.innerWidth <= 1250) {
            // Mobile
            document.getElementById('slider').style.display = 'flex';
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
            document.getElementById('slider').style.display = 'flex';
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


// Customer Reviews Slider

// Slick slider
$(document).ready(function(){
    $('.reviewSlider').slick({
        dots: true,
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 3000,
        cssEase: 'linear',
        pauseOnHover: true,
        swipe: true,
        swipeToSlide: true,
        adaptiveHeight: true,
        centerMode: true,
        arrows: true,
        prevArrow: '<button type="button" class="slick-prev">Previous</button>',
        nextArrow: '<button type="button" class="slick-next">Next</button>',
        responsive: [
            {
                breakpoint: 1700,
                settings: {
                    slidesToShow: 2,
                    arrows: false,
                }
            },
            {
                breakpoint: 1200,
                settings: {
                    slidesToShow: 1,
                    arrows: false,
                }
            }
        ]
    });
});