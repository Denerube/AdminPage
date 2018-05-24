


function errorHandler(jqXHR, textStatus, errorThrown) {
    console.log("something went wrong: " + textStatus + " " + errorThrown + " " + JSON.stringify(jqXHR));
}

var url="https://c41f0f46-dc80-44f1-a4b4-cfc752fa88b5-bluemix.cloudant.com/test/708d5f21df17db06806e80fe13a1cb26"

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
    $("#click").on("submit",function (e) {
        e.preventDefault();
        var lol= $("#test").text();
        console.log(JSON.stringify(lol));

        $.ajax({
            url: url,
            type: "PUT",
            contentType: "application/json",
            data:lol,
            error: errorHandler
        })
    });

})
