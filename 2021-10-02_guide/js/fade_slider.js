$(function(){
$(".box1,.box2,.box3").clone().appendTo(".img_container")
$(".box5").clone().prependTo(".img_container")
$("#a").css("transform","scale(1.5)");

n = 1
flag = 1/*처음시작하자마자 바로*/
timeoutID = 0
intervalID = setInterval(
function(){
next()},2000)/*2초*/
/*시간지연함수 : 이벤트를 실행할때 딜레이를 발생시키는 역할
이벤트 반복시키는 역할*/

function change(){
$(".paging button").removeClass("active")
/*hasclass, removeclass, addclass */
$(".btn"+ n).addClass("active")
flag = 1 // 목적지 도착시 깃발을 다시 꽂는다
}//change end


function test() {
if (n == 1) {
$("#a").css("transform", "scale(1)");
$("#container_left #subject").text("봄");
} else if (n == 2) {
$("#b").css("transform", "scale(1.5)");
$("#a").css("transform", "scale(1)");
$("#container_left #subject").text("여름");
$(".wrapper").fadeOut(600, function () {
$(".wrapper").css({
"background": "url(data:image/jpeg;base64,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)"
});
$(".wrapper").fadeIn(600);
});
} else if (n == 3) {
$("#container_left #subject").text("가을");
$("#c").css("transform", "scale(1.5)");
$("#b").css("transform", "scale(1)");
$(".wrapper").fadeOut(600, function () {
$(".wrapper").css({
"background": "url(data:image/jpeg;base64,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)"
});
$(".wrapper").fadeIn(600);
});
} else if (n == 4) {
$("#container_left #subject").text("겨울");
$("#e").css("transform", "scale(1.5)");
$("#c").css("transform", "scale(1)");
$(".wrapper").fadeOut(600, function () {
$(".wrapper").css({
"background": "url(data:image/jpeg;base64,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)"
});
$(".wrapper").fadeIn(600);
});
} else if (n == 5) {
$(".wrapper").fadeOut(600, function () {
$(".wrapper").css({
"background": "url(data:image/jpeg;base64,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)"
});
$(".wrapper").fadeIn(600);
});
}
}

function next(){
n ++ /* 증감연산자 :  피연산자를 1씩 증가시키는 함수 */
if(flag==1){//깃발이 꽂혀 있다라면...처음시작지점이라면
test()
$(".img_container").animate(
	{'left': (n-1)*-300 }, /*오른쪽 300만큼 이동을 명령하는 함수*/
	function(){ //도착이 완료됬을때 할일 
if(n>5){ //6번째 칸이라면
n = 1 //1번칸으로 목적지 변경
$(".img_container").css('left',(n-1)*-300)
$("#a").css("transform","scale(1.5)");
$("#b,#e,#c,#f").css("transform","scale(1)");
}//if end
change()
})//animate end
flag = 0 // 출발시 깃발을 뽑는다
}//if flage end
}//next end

function auto(){
flag = 0 // 출발시 깃발을 뽑는다
clearInterval(intervalID)
clearTimeout(timeoutID)
timeoutID=setTimeout(function(){
intervalID = setInterval(function(){next()},2000)
},5000)//timeoutEnd	
}//change end


$(".next").click(function(){
if(flag==1){//깃발이 꽂혀 있다라면...
test()
n ++
$(".img_container").animate({'left': (n-1)*-300 },function(){//도착이 완료됬을때 할일 
if(n>5){//6번째 칸이라면
n = 1//1번칸으로 목적지 변경
$(".img_container").css('left',(n-1)*-300)
}//if end
change()
})//animate end
auto()
}//if flage end
})//next click end

$(".prev").click(function(){
if(flag==1){//깃발이 꽂혀 있다라면...
test()
n -- 
$(".img_container").animate({'left': (n-1)*-300 },function(){//도착이 완료됬을때 할일 
if(n<1){//0번째 칸이라면
n = 5//5번칸으로 목적지 변경
$(".img_container").css('left',(n-1)*-300)
}//if end
change()
})//animate end
auto()
}//if flage end
})//prev click end

$(".paging button").click(function(){
if(flag==1){//깃발이 꽂혀 있다라면...
if(n == 1){
$("#a").css("transform","scale(1)");

}else if (n == 2) {

$("#b").css("transform","scale(1.5)");
$("#a,#c,#e,#f").css("transform","scale(1)");
setTimeout(function(){ 
$(".wrapper").css({
"opacity" : 1,
"background-image": "url(https://media.giphy.com/media/tIeCLkB8geYtW/giphy.gif)"
});
}, 300);


}else if(n == 3){

$("#c").css("transform","scale(1.5)");
$("#a,#e,#f,#b").css("transform","scale(1)");


}else if(n == 4){

$("#e").css("transform","scale(1.5)");
$("#c,#b,#a,#f").css("transform","scale(1)");


}
n = $(this).attr("data-n")
$(".img_container").animate({'left': (n-1)*-300 },function(){//도착이 완료됬을때 할일 
change()
})//animate end
auto()
}//if flage end
})//paging button click end

})//jQuery end


