


function errorHandler(jqXHR, textStatus, errorThrown) {
    console.log("something went wrong: " + textStatus + " " + errorThrown + " " + JSON.stringify(jqXHR));
}

var url="https://c41f0f46-dc80-44f1-a4b4-cfc752fa88b5-bluemix.cloudant.com/testdatabase/82e256d2d40c54bac03da4badfd243c3"



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
