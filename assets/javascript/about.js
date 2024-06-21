const faqSectionButtons = document.querySelectorAll('.faqSectionButton');

faqSectionButtons.forEach(faqSectionButton => {
    faqSectionButton.addEventListener("click", () => {
        const buttonChild = faqSectionButton.querySelector('.faqQAContainer');
        const styleButtonChild = window.getComputedStyle(buttonChild);
        const buttonChildDisplay = styleButtonChild.display;

        if (buttonChildDisplay === "none") {
            buttonChild.style.display = "block";
        } else {
            buttonChild.style.display = "none";
        }


    });
});

// Slick slider Test
$(document).ready(function(){
    // The sliderTimer is used in the Slick slider to give it auto play time
    var sliderTimer = 5000;
    var $imageSlider = $('.your-class');

    $('.your-class').slick({
        autoplay: true,
		autoplaySpeed: sliderTimer,
		speed: 1000,
		arrows: false,
		dots: false,
		adaptiveHeight: true,
		pauseOnFocus: false,
		pauseOnHover: false,
        infinite: true,
        fade: true,
        cssEase: 'linear'
    });

    function progressBar(){
		$('.slider-progress').find('span').removeAttr('style');
		$('.slider-progress').find('span').removeClass('active');
        
		setTimeout(function(){
			$('.slider-progress').find('span').css('transition-duration', (sliderTimer/1000)+'s').addClass('active');
		}, 100);
	}

	progressBar();

	$imageSlider.on('beforeChange', function(e, slick) {
		progressBar();
	});
});