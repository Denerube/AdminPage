


function errorHandler(jqXHR, textStatus, errorThrown) {
    console.log("something went wrong: " + textStatus + " " + errorThrown + " " + JSON.stringify(jqXHR));
}

var url="https://c41f0f46-dc80-44f1-a4b4-cfc752fa88b5-bluemix.cloudant.com/testdatabase/82e256d2d40c54bac03da4badfd243c3"

var doc;
/*
$.ajax({
    url: url,
    dataType: 'jsonp',
    success: function(data, textStatus, jqXHR) {

        console.log(data);
        test(data);



    }
});
function test( hallo ){
    console.log(hallo);
    hallo.test="hallowereld";
    hallo.test2="kek";
    var test=JSON.stringify(hallo);
    console.log("update");

    console.log(test);

    $.ajax({
        url: url,
        type: "PUT",
        contentType: "application/json",
        data:test,
        error: errorHandler
    })

}



$("#hallo").on("click",function (e) {


e.preventDefault();

    $.ajax({
        url: baseUrl,
        type: "PUT",
        contentType: "application/json",
        data:file,
        error: errorHandler
    })

});*/

$(document).ready(function() {

        e.preventDefault();
        var lol= $("#test").text();
        console.log(JSON.stringify(lol));

        $.ajax({
            url: url,
            type: "PUT",
            contentType: "application/json",
            data:lol,
            error: errorHandler

        });
    window.location = '../pages/MainPage.php';


})
