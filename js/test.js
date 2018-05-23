


function errorHandler(jqXHR, textStatus, errorThrown) {
    console.log("something went wrong: " + textStatus + " " + errorThrown + " " + JSON.stringify(jqXHR));
}

var url="https://c41f0f46-dc80-44f1-a4b4-cfc752fa88b5-bluemix.cloudant.com/test/6fa44601f131e0b0a81d6d9d3af0bbff"

var doc;

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
    doc=hallo;
    doc.test="hallowereld";

    $.ajax({
        url: url,
        type: "PUT",
        contentType: "application/json",
        data:doc,
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

});