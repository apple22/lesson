document.write("<br/>", "==== example02.js ====", "<br/>");


var walk = prompt("당신의 롤 티어는", "0")

if (752 <= walk <= 873){
    document.write("브론즈");
}else if(874 <= walk <= 1200){
    document.write("실버");
}else if(1201 <= walk <= 1600){
    document.write("골드");
}else if(1601 <= walk <= 1900){
    document.write("플래티넘");
}else if(1901 <= walk <= 2000){
    document.write("다이아");
}else if(2001 <= walk <= 3500){
    document.write("마스터");
}else if(3501 <= walk <= 3600){
    document.write("챌린저");
}else if(752 > walk || 3601 < walk){
    document.write("예외");
}