var naamOef;
var waarde;


$("document").ready(function(){

    $("#addform").on("click",function () {
        window.location.href="../pages/addOefPage.php";
        })
    $(".soortVraag").on("change",function () {
        waarde=$(this).val();
    })
   $(".geefVragenIn").on("click",function (e) {
       e.preventDefault();
       var id = $(this).attr("id");
       var stapNr=$(".stapNr").val();
       var aantal=$(".aantal"+id).val();
       switch (waarde){
           case "Materiaal":
               for (var i=1;i<=aantal;i++){
                   var nameNr="nr"+i;
                   var nameJF="JF"+i;
                   $("#"+id).append("<br>"+"Vraag "+ i + ": " + "<input type='file' name="+ nameNr +"> </input>");

                   $("#"+id).append(
                       "<input type=radio name="+"id"+id+nameJF+" value='juist'>Juist</input>" +
                       "<input type=radio name="+"id"+id+nameJF+" value='fout'>Fout</input>");
               }

               break;
           case "Keuze":
               for (var i=1;i<=aantal;i++){
                   var nameNr="nr"+i;
                   var nameJF="JF"+i;
                   $("#"+id).append("<br>"+"Vraag "+ i + ":" + "<input type='text' name="+nameNr+"> </input>");

                   $("#"+id).append(
                       "<input type=radio name="+"id"+id+nameJF+" value='juist'>Juist</input>" +
                       "<input type=radio name="+"id"+id+nameJF+" value='fout'>Fout</input>");
               }
               break;
       }
   })
});