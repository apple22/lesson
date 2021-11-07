$( document ).ready( function() {
    var obj = document.createElement("audio");
    $(".off,.off_01,.off_02,.off_03,.off_04").hide();
    obj.src="./js/sound.mp3";
    $('.inner').hide()
    $('.inner').fadeIn( 5000, function() {
        location.href="main.html";
        });
        
$(".wrapper ul li:nth-child(1)").click(function(){
    $(".off").animate({
        width: "toggle"
    }, 400, "linear");
});        

$(".wrapper ul li:nth-child(3)").click(function(){
    $(".off_02").animate({
        width: "toggle"
    }, 400, "linear");
});  


$(".wrapper ul li:nth-child(5)").click(function(){
    $(".off_03").animate({
        width: "toggle"
    }, 400, "linear");
});  

$(".wrapper ul li:nth-child(7)").click(function(){
    $(".off_04").animate({
        width: "toggle"
    }, 400, "linear");
});  






  });


