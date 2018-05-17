var naamOef;


// Initialize Firebase
var config = {
    apiKey: "AIzaSyBWE4f_COU1kizVOw-fpcI_zpuIZ9h74Ww",
    authDomain: "shoppinglist-24737.firebaseapp.com",
    databaseURL: "https://shoppinglist-24737.firebaseio.com",
    projectId: "shoppinglist-24737",
    storageBucket: "shoppinglist-24737.appspot.com",
    messagingSenderId: "560804101253"
};
var waarde;
$("document").ready(function(){

    $("#addform").on("click",function () {
        window.location.href="../pages/addOefPage.php";
        })
    $(".soortVraag").on("change",function () {
        waarde=$(this).val();
        console.log("functie 1 uitgevoerd");
        console.log("waarde:" + waarde );

        /*switch (waarde){
            case "Materiaal":
                $(this).parents("form").append("<br>Hoeveel verschillende materialen zijn er in de vraag?<input name='aantal'></input>");
                break;
            case "Keuze":
                $(this).parents("form").append("<br>Hoeveel verschillende keuzes zijn er in de vraag? <input name='aantal'></input>");
                break;
        }*/


    })
   $(".geefVragenIn").on("click",function (e) {
       e.preventDefault();
       console.log("uitgevoerd");
       //waarde=$(this).siblings(".soortvraag").filter("selected").text();
       var stapNr=$(this).siblings(".stapNr").val();
       var aantal=$(this).siblings(".aantal").val();
       console.log(stapNr);
       console.log(waarde);
       console.log(aantal);
       switch (waarde){
           case "Materiaal":
               for (var i=1;i<=aantal;i++){
                   nameNr="nr"+stapNr+i;
                   nameJF="JF"+stapNr+i;
                   $(this).parents("div").append("<br>"+"vraag"+ i +"<input type='file' name="+ nameNr +"> </input>");

                   $(this).parents("div").append(
                       "<input type=radio name="+nameJF+" value='juist'>juist</input>" +
                       "<input type=radio name="+nameJF+" value='fout'>fout</input>");
               }

               break;
           case "Keuze":
               for (var i=1;i<=aantal;i++){
                   nameNr="nr"+stapNr+i;
                   nameJF="JF"+stapNr+i;
                   $(this).parents("div").append("<br>"+"vraag"+ i +"<input type='text' name="+nameNr+"> </input>");

                   $(this).parents("div").append(
                       "<input type=radio name="+nameJF+" value='juist'>juist</input>" +
                       "<input type=radio name="+nameJF+" value='fout'>fout</input>");
               }
               break;
       }









   })









} );