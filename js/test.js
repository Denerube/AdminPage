


function errorHandler(jqXHR, textStatus, errorThrown) {
    console.log("something went wrong: " + textStatus + " " + errorThrown + " " + JSON.stringify(jqXHR));
}

var url="https://ceb1f13c-d64d-4ddc-a4b4-12833d7843eb-bluemix.cloudant.com/projectmobileapps/c0a82b412d43ff4cbb362eccfef0d002"



$(document).ready(function() {
    $("#click").on("submit",function () {
        e.preventDefault();
        var lol= $("#test").text();
        console.log(JSON.stringify(lol));

        $.ajax({
            url: url,
            type: "PUT",
            contentType: "applicsation/json",
            data:lol,
            error: errorHandler

        });
    window.location = '../pages/MainPage.php';
    })

})
