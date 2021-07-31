// JavaScript Document
$(document).ready(function () {

	//AJAX service request to get the main text data from the json data store
	$.getJSON('application/model/data.json', function (jsonObj) {
		console.log(jsonObj);
		//Get the slideshow page 1 data
        $('#slide1').html('<p>' + jsonObj.data[0].num + '</p>');
        $('#slide1text').html('<p>' + jsonObj.data[0].desc + '</p>');
        //Get the slideshow page 2 data
        $('#slide2').html('<p>' + jsonObj.data[1].num + '</p>');
        $('#slide2text').html('<p>' + jsonObj.data[1].desc + '</p>');
        //Get the slideshow page 3 data
        $('#slide3').html('<p>' + jsonObj.data[2].num + '</p>');
        $('#slide3text').html('<p>' + jsonObj.data[2].desc + '</p>');
        // Model label names
        $('#navFanta').html('<a>' + jsonObj.data[3].fanta + '<a>');
        $('#navCokeZero').html('<a>' + jsonObj.data[3].zero + '<a>');
        $('#navCoke').html('<a>' + jsonObj.data[3].coke + '<a>');
        // Main Page Brand Logo Text
        $('#fantaLogoText').html('<a>' + jsonObj.data[4].fanta + '<a>');
        $('#zeroLogoText').html('<a>' + jsonObj.data[4].zero + '<a>');
        $('#cokeLogoText').html('<a>' + jsonObj.data[4].coke + '<a>');
        // Models Gallery Text
        $('#galleryText').html('<p>' + jsonObj.data[5].text + '</p>');
        $('#galleryTitle').html('<h1>' + jsonObj.data[5].title + '</h1>');
        // Model Edit Sections
        $('#cameraText').html('<p>' + jsonObj.data[6].camera + '</p>');
        $('#animationText').html('<p>' + jsonObj.data[6].animation + '</p>');
        $('#renderText').html('<p>' + jsonObj.data[6].render + '</p>');
        $('#navText').html('<p>' + jsonObj.data[6].nav + '</p>');
        // Contacts
        $('#contactText1').html('<p>' + jsonObj.data[7].name + '<p>');
        $('#contactText2').html('<p>' + jsonObj.data[7].uni + '<p>');
        $('#contactText3').html('<p>' + jsonObj.data[7].email + '</p>');
        // About
        $('#aboutText').html('<p>' + jsonObj.data[8].text + '<p>');
	});
});