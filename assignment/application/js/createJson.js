$.getJSON('../application/model/data.php', function (data) {
    document.getElementById("title1").innerHTML = data[0].title1;
    document.getElementById("title2").innerHTML = data[1].title2;
}