// JavaScript Gallery Generator using Flickr to source the images
$(document).ready(function () {
    // Call the loadImage method , you can comment his out if you don't want it to load immediately
    //loadImages("Pepsi Can");
    
    loadImages("fanta");
});
function loadImages(txtInput) {
    // Grab the image type you are looking for
    //var txt = document.getElementById('txt').value;
    var txt = txtInput;
    // alert(txt);
    // console.log(txt);
    // Create a URI for the Flickr web service API call
    var urlFlickr = "http://api.flickr.com/services/feeds/photos_public.gne?jsoncallback=?";
    // Use the JQuery .getJson() method to fetch the JSON object back from the Flickr web service
    $.getJSON(urlFlickr, { tags: txt, tagmode: "all", format: "json" }, function (data) {
        // Use console.log() to inspect the returned JSON object
        console.log(data);
        // Then build a handler to grab the data you wnat, i.e. in this cases the images related to the input value stored in txt
        $('#title').html(data.title);
        $('#link').html(data.link);
        //$('#description').html(data.description);
        //$('#modified').html(data.modified);
        //$('#generator').html(data.generator);
        var htmlCode = "";
        $j = 0;
        // Examine the console.log(data) and you will see we have an array of items returned in the data JSON object that we have to loop round
        $.each(data.items, function (i, item) {
            // You will remember this approach from the previosu Gallery code in Lab 5
            htmlCode += '<div class="imgBox">' + '<div><h3> Title: ' + item.title + '</h3></div>';
            htmlCode += '<img width="700" height="700" src="' + item.media.m + '"/>';
            htmlCode += '<div><h4> Published: ' + item.published + '</h4></div></div>';
            $j++;
            // Set the loop variable, i.e. how many images you want returned, say the first 4 images. 
            // Or comment out if you want all images in the search returned
            if ($j == 1) return false;
        });
        // Assign the htmlCode to the images ID selector
        $('#images').html(htmlCode);
    });
}