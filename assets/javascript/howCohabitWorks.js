const faqSectionButtons = document.querySelectorAll('.faqSectionButton');
// const buttonShadow = document.querySelector('.faqHeadingContainer');

faqSectionButtons.forEach(faqSectionButton => {
    
    faqSectionButton.addEventListener("click", () => {

        const buttonChild = faqSectionButton.querySelector('.faqQAContainer');
        const styleButtonChild = window.getComputedStyle(buttonChild);
        const buttonChildDisplay = styleButtonChild.display;

        if (buttonChildDisplay === "none") {
            buttonChild.style.display = "block";
            // buttonShadow.style.boxShadow = "0px 30px 40px -30px #d4d4d4";
            faqSectionButton.style.padding = "0px 0px 20px 0px";
        }else {
            buttonChild.style.display = "none";
            faqSectionButton.style.padding = "0px 0px 0px 0px";
        }
    });
});
