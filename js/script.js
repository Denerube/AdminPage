var naamOef;

$("document").ready(function(){

    $("#addform").on("click",function () {
        window.location.href="../pages/addOefPage.php";
        })
    $(".soortVraag").on("change",function () {
        var waarde=$(this).val();
        console.log("functie uitgevoerd");
        console.log("waarde:" + waarde );
        switch (waarde){
            case "Materiaal":
                $(this).parents("form").append("<br>Hoeveel verschillende materialen zijn er in de vraag?<input name='aantal'></input>");
                break;
            case "Keuze":
                $(this).parents("form").append("<br>Hoeveel verschillende keuzes zijn er in de vraag? <input name='aantal'></input>");
                break;
        }


    })









} );