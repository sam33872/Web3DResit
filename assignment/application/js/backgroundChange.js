function changeColor(selected) {
    var backColour;
    var headerfooterColour;


    if (selected == 'orange') {
        backColour = "orange";
        headerfooterColour = "orangered";
    }
    else if (selected == 'red') {
        backColour = "brown";
        headerfooterColour = "red";
    }
    else if (selected == 'blue') {
        backColour = "lightblue";
        headerfooterColour = "blue";
    }
    else if (selected == 'green') {
        backColour = "lightgreen";
        headerfooterColour = "green";
    }
    else {
        backColour = "lightgrey";
        headerfooterColour = "grey";
    }




    document.getElementById("header").style.background = headerfooterColour;
    document.getElementById("mainContainer").style.background = backColour;
    document.getElementById("footerColor").style.background = headerfooterColour;
    document.getElementById("mailList").style.background = backColour;
}