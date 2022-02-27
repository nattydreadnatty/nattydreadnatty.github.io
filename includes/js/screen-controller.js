var screenContainer = document.querySelector("#lamouche-screen-container");
var screenPart1 = document.querySelector("#qui-1");
var screenPart2 = document.querySelector("#qui-2");
var rouage = document.querySelector("#rouage");
var rouageScreen = document.querySelector("#rouage-screen");
var acoutCta = document.querySelector("#about-cta-container");

screenContainer.addEventListener("mouseover", addClass, false);

function addClass() {
  screenContainer.setAttribute("class", "none")
  screenPart1.setAttribute("class", "move-left");
  screenPart2.setAttribute("class", "move-right");
  rouageScreen.setAttribute("class", "rotate");
  acoutCta.setAttribute("class", "flex-gap show");
  
}