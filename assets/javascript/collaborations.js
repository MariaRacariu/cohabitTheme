// Slick slider USPs
$(document).ready(function(){
    $('.collaborationsSlider').slick({
        dots: false,
        infinite: false,
        slidesToShow: 3,
        responsive: [
            {
                breakpoint: 1200,
                settings: {
                    dots: true,
                    infinite: true,
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    autoplay: true,
                    autoplaySpeed: 3000,
                    cssEase: 'linear',
                    pauseOnHover: true,
                    swipe: true,
                    swipeToSlide: true,
                    adaptiveHeight: true,
                    arrows: false,
                }
            }
        ]
    });
});

// Slick slider for Cohabit News
$(document).ready(function(){
    $('.cohabitNewsSlider').slick({
        dots: true,
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: false,
        autoplaySpeed: 3000,
        cssEase: 'linear',
        pauseOnHover: true,
        swipe: true,
        swipeToSlide: true,
        adaptiveHeight: true,
        centerMode: false,
        arrows: true,
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