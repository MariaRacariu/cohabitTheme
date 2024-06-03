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

// Slick slider
$(document).ready(function(){
    $('.your-class').slick({
        dots: false,
        infinite: false,
        slidesToShow: 3,
        responsive: [
            {
                breakpoint: 1000,
                settings: {
                    dots: true,
                    infinite: true,
                    slidesToShow: 1,
                    autoplay: true,
                    autoplaySpeed: 2000,
                    centerPadding: '100px',
                    centerMode: true,
                    variableWidth: true,
                }
            }
        ]
    });
});