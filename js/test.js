

var baseUrl = "https://c41f0f46-dc80-44f1-a4b4-cfc752fa88b5-bluemix.cloudant.com/test/6fa44601f131e0b0a81d6d9d3af0bbff";
function errorHandler(jqXHR, textStatus, errorThrown) {
    console.log("something went wrong: " + textStatus + " " + errorThrown + " " + JSON.stringify(jqXHR));
}


$("#hallo").on("click",function (e) {

e.preventDefault();
    var file= JSON.stringify({
            //_id: "newplaylist",
            //_rev: "playlist"
            "test":"hallo"
    });
    $.ajax({
        url: baseUrl,
        type: "PUT",
        contentType: "application/json",
        data:file,
        error: errorHandler
    })

});