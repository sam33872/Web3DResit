function swap(selected) {
    document.getElementById("home").style.display = 'none';
    document.getElementById("about").style.display = 'none';
    document.getElementById("models").style.display = 'none';
    document.getElementById("gallery").style.display = 'none';

    document.getElementById(selected).style.display = 'block';
}

function popup(selected) {
    document.getElementById("fantaInfo").style.display = 'none';
    document.getElementById("zeroInfo").style.display = 'none';
    document.getElementById("cokeInfo").style.display = 'none';

    document.getElementById(selected).style.display = 'block';
}

// w3schools.com modal

// Open the modal
document.getElementById("myModal").onclick = function () {
    document.getElementById("contact").style.display = "block";
}

// Close the modal
document.getElementsByClassName("close")[0].onclick = function () {
    document.getElementById("contact").style.display = "none";
}

// Close modal when clicked outside
window.onclick = function (event) {
    if (event.target != document.getElementById("myModal")) {
        document.getElementById("contact").style.display = "none";
    }
}