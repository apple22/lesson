$(function () {
    $(".box1").clone().appendTo(".img_container")
    $(".box5").clone().prependTo(".img_container")
    n = 1
    flag = 1
    intervalID = setInterval(function () {
        next()
    }, 2000)

    function change() {
        $(".paging button").removeClass("active")
        $(".btn" + n).addClass("active")
        flag = 1 // 목적지 도착시 깃발을 다시 꽂는다
    } //change end


    function next() {
        if (flag == 1) { //깃발이 꽂혀 있다라면...
            n++
            $(".img_container").animate({
                'left': (n - 1) * -300
            }, function () { //도착이 완료됬을때 할일
                if (n > 5) { //6번째 칸이라면
                    n = 1 //1번칸으로 목적지 변경
                    $(".img_container").css('left', (n - 1) * -300)
                } //if end
                change()
            }) //animate end
            flag = 0 // 출발시 깃발을 뽑는다
        } //if flage end
    } //next end

    function auto() {
        flag = 0 // 출발시 깃발을 뽑는다
        clearInterval(intervalID)
        setTimeout(function () {
            intervalID = setInterval(function () {
                next()
            }, 2000)
        }, 5000) //timeoutEnd
    } //change end


    $(".next").click(function () {
        if (flag == 1) { //깃발이 꽂혀 있다라면...
            n++
            $(".img_container").animate({
                'left': (n - 1) * -300
            }, function () { //도착이 완료됬을때 할일
                if (n > 5) { //6번째 칸이라면
                    n = 1 //1번칸으로 목적지 변경
                    $(".img_container").css('left', (n - 1) * -300)
                } //if end
                change()
            }) //animate end
            auto()
        } //if flage end
    }) //next click end

    $(".prev").click(function () {
        if (flag == 1) { //깃발이 꽂혀 있다라면...
            n--
            $(".img_container").animate({
                'left': (n - 1) * -300
            }, function () { //도착이 완료됬을때 할일
                if (n < 1) { //0번째 칸이라면
                    n = 5 //5번칸으로 목적지 변경
                    $(".img_container").css('left', (n - 1) * -300)
                } //if end
                change()
            }) //animate end
            auto()
        } //if flage end
    }) //prev click end

    $(".paging button").click(function () {
        if (flag == 1) { //깃발이 꽂혀 있다라면...
            n = $(this).attr("data-n")
            $(".img_container").animate({
                'left': (n - 1) * -300
            }, function () { //도착이 완료됬을때 할일
                change()
            }) //animate end
            auto()
        } //if flage end
    }) //paging button click end

}) //jQuery end
