/*----------------------------------------------*/ 
$(document).ready(function(){
//Åbner burgermenu
  $("#mobilknap, #navm-venstre, #navm-højre").click(function() {
  $("#mobilmenu, #menuluk, #mfacebook, #minstagram").css("display", "block");
  $("#mfacebook, #minstagram").css("display", "inline-block");
  $("#mobilknap, #navm-venstre, #navm-højre").css("display", "none");
});

 //Lukker burgermenu  
    $("#menuluk").click(function () {
        $("#mobilmenu, #menuluk, #mfacebook, #minstagram").css("display", "none")
        $("#mobilknap, #navm-venstre, #navm-højre").css("display", "block")
});
});
/*----------------------------------------------*/ 
