/*----------------------------------------------*/ 
$(document).ready(function(){
//Modalboks åbnes
  $(".modalinfo").click(function() {
  var number = $(this).attr("id").replace("pakke", "");
  $("#modal" + number).css("display", "inline-block");
  $(".modalinfo, #priser-wrap").css("display", "none")
  $("#buttons").css("display", "none")
});

 //Luk modalboks  
    $(".pakkeclose").click(function () {
        $(".pakker").css("display","none");
        $(".modalinfo, #priser-wrap").css("display", "block")
        $("#buttons").css("display", "block")
});
    
});
/*----------------------------------------------*/ 
