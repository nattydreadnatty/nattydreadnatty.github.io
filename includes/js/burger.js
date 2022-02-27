var accueilItem = document.querySelector("#Ellipse_1");
var aProposItem = document.querySelector("#Ellipse_2");
var realisationsItem = document.querySelector("#Ellipse_3");
var prestationsItem = document.querySelector("#Ellipse_4");
var contactItem = document.querySelector("#Ellipse_5"); 

var accueil = document.querySelector("#accueil");
var aPropos = document.querySelector("#a-propos");
var realisations = document.querySelector("#realisations");
var prestations = document.querySelector("#prestations");
var contact = document.querySelector("#contact");

accueilItem.addEventListener("mouseover", mOver, false);
accueilItem.addEventListener("mouseout", mOut, false);

aProposItem.addEventListener("mouseover", mOver1, false);
aProposItem.addEventListener("mouseout", mOut1, false);

realisationsItem.addEventListener("mouseover", mOver2, false);
realisationsItem.addEventListener("mouseout", mOut2, false);

prestationsItem.addEventListener("mouseover", mOver3, false);
prestationsItem.addEventListener("mouseout", mOut3, false);

contactItem.addEventListener("mouseover", mOver4, false);
contactItem.addEventListener("mouseout", mOut4, false);


function mOver() {
    accueil.setAttribute("style", "left:-40vw;animation:slideRight 0.3s linear forwards;")
}

function mOver1() {
    aPropos.setAttribute("style", "left:-40vw;animation:slideRight 0.3s linear forwards;")
}

function mOver2() {
    realisations.setAttribute("style", "left:-40vw;animation:slideRight 0.3s linear forwards;")
}

function mOver3() {
    prestations.setAttribute("style", "left:-40vw;animation:slideRight 0.3s linear forwards;")
}

function mOver4() {
    contact.setAttribute("style", "left:-40vw;animation:slideRight 0.3s linear forwards;")
}



function mOut() {
    accueil.setAttribute("style", "left:60px;animation:slideLeftMenuItem 0.5s linear forwards")
}

function mOut1() {
    aPropos.setAttribute("style", "left:60px;animation:slideLeftMenuItem 0.5s linear forwards")
}

function mOut2() {
    realisations.setAttribute("style", "left:60px;animation:slideLeftMenuItem 0.5s linear forwards")
}

function mOut3() {
    prestations.setAttribute("style", "left:60px;animation:slideLeftMenuItem 0.5s linear forwards")
}

function mOut4() {
    contact.setAttribute("style", "left:60px;animation:slideLeftMenuItem 0.5s linear forwards")
}