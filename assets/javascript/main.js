// Frontpage USPs section slider using Slick
$(document).ready(function(){
    $('.uspsSlider').slick({
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

// Customer Reviews Slider using SLick
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

// Logo Slider using Slick
// $(document).ready(function(){
//     $('.logosSlider').slick({
//         dots: false,
//         infinite: true, 
//         slidesToShow: 6,
//         slidesToScroll: 1,
//         autoplay: true,
//         autoplaySpeed: 1000,
//         cssEase: 'ease-in',
//         adaptiveHeight: true,
//         arrows: false,
//     })
// });