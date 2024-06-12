const faqSectionButtons = document.querySelectorAll('.faqSectionButton');

faqSectionButtons.forEach(faqSectionButton => {
    
    faqSectionButton.addEventListener("click", () => {

        const buttonChild = faqSectionButton.querySelector('.faqQAContainer');
        const styleButtonChild = window.getComputedStyle(buttonChild);
        const buttonChildDisplay = styleButtonChild.display;

        if (buttonChildDisplay === "none") {
            buttonChild.style.display = "block";
        }else {
            buttonChild.style.display = "none";
        }
    });
});
