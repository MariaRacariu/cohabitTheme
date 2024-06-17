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