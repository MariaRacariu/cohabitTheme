const menuIconOpen = document.querySelector("#cohabitMenuIcon");
const menuIconClose = document.querySelector("#cohabitMenuCloseIcon");
const navOptionsContainer = document.querySelector("#cohabitNavigationOptionsContainer");
const cohabitLogo = document.querySelector("#cohabitLogoContainer");
const navFlexContainer = document.querySelector("#cohabitContainer");
const bodyElement = document.body;

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

    bodyElement.style.height = "100%";
    bodyElement.style.overflow = "hidden";

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

    bodyElement.style.height = "";
    bodyElement.style.overflow = "";

    navOptionsContainer.style.display = "";

    cohabitLogo.style.height = "";
});