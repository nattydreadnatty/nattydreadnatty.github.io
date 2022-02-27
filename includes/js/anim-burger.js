setInterval(myTimer, 6000);
setInterval(myTimer1, 7000);

function myTimer(){
    var accueilDot = document.querySelector("#Ellipse_1");
    accueilDot.setAttribute("style", "transform:translateX(0px);animation: slideItemDot1 0.25s ease-out backwards;animation-delay: 0s;");

    var aProposDot = document.querySelector("#Ellipse_2");
    aProposDot.setAttribute("style", "transform:translateX(0px);animation: slideItemDot2 0.25s ease-out backwards;animation-delay: 0.1s;");

    var realisationsDot = document.querySelector("#Ellipse_3");
    realisationsDot.setAttribute("style", "transform:translateX(0px);animation: slideItemDot3 0.25s ease-out backwards;animation-delay: 0.2s;");

    var prestationsDot = document.querySelector("#Ellipse_4");
    prestationsDot.setAttribute("style", "transform:translateX(0px);animation: slideItemDot4 0.25s ease-out backwards;animation-delay: 0.3s;");

    var contactDot = document.querySelector("#Ellipse_5");
    contactDot.setAttribute("style", "transform:translateX(0px);animation: slideItemDot5 0.25s ease-out backwards;animation-delay: 0.4s;");



};

function myTimer1(){
    var accueilDot = document.querySelector("#Ellipse_1");
    accueilDot.setAttribute("style", "transform:translateX(0px);animation: unset;animation-delay: unset;");

    var aProposDot = document.querySelector("#Ellipse_2");
    aProposDot.setAttribute("style", "transform:translateX(0px);animation: unset;animation-delay: unset;");

    var realisationsDot = document.querySelector("#Ellipse_3");
    realisationsDot.setAttribute("style", "transform:translateX(0px);animation: unset;animation-delay: unset;");

    var prestationsDot = document.querySelector("#Ellipse_4");
    prestationsDot.setAttribute("style", "transform:translateX(0px);animation: unset;animation-delay: unset;");

    var contactDot = document.querySelector("#Ellipse_5");
    contactDot.setAttribute("style", "transform:translateX(0px);animation: unset;animation-delay: unset;");

};