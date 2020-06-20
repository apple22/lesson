<?php include 'header.php';?>
<link rel="stylesheet" href="./css/index.css" />
<link rel="stylesheet" href="./css/modal.css" />
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
<style>
.textbox {position: relative;}
.textbox label {
  position: absolute;
  top: 1px;  /* input 요소의 border-top 설정값 만큼 */
  left: 1px;  /* input 요소의 border-left 설정값 만큼 */
  padding: .8em .5em;  /* input 요소의 padding 값 만큼 */
  color: #999;
  cursor: text;
}
.textbox input[type="text"] {
    margin-top:30px;
    margin-bottom:30px;
    width: 265px;
    height: auto;  /* 높이값 초기화 */
    line-height : normal;  /* line-height 초기화 */
    padding: .8em .5em; /* 원하는 여백 설정, 상하단 여백으로 높이를 조절 */
    font-family: inherit;  /* 폰트 상속 */
    border: 1px solid #e9e9e9;
    border-radius: 0;  /* iSO 둥근모서리 제거 */
}

.vessel-title{
    position:relative;
    top:12px;
    width: 116px;
    height: 16px;
    font-size: 13px;
    font-weight: 500;
    padding:18px 0px 0px 35px;
    margin-top:30px;
    color: #171717;
}

.oil-container{
    position:relative;
    top:12px;
    right:5px;
    width: 116px;
    height: 16px;
    font-size: 13px;
    font-weight: 500;
    opacity: 0.35;
    padding:18px 0px 0px 35px;
    margin-top:30px;
    color: #171717;
}

.vessel-name{
    margin-bottom:8px;
    background-color:#eeeef2;
    width: 278px;
    height: 48px;
    border-radius: 6px;
}
.addBtn{
    color:white;
    width: 709px;
    height: 44px;
    border-radius: 8px;
    box-shadow: 0 12px 24px 0 rgba(0, 0, 0, 0.16);
    border: solid 1px #c6c6cb;
    background-color: #3095f8;
}

.mapSection{
    position:relative;
    left:305px;
    top:-500px;
    border-radius: 8px;
    background-color:#3095f8;
    width:400px;
    height:440px;
}
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    $(document).ready(function(){
        function cardMouseOver(obj,color,value){
            obj.css("box-shadow", value + " " + color.substring(color.indexOf("rgb"),color.length)).css("transition","all 1s");
        }
        // 리스트 hover시 해당 아이템의 obj를 할당
        var hdnaleLiTag;
        //리스트 part
        $(".ship-item").mouseover(function(){
            hdnaleLiTag = $(this).children(":first").children(":first").children(":first");
            if(hdnaleLiTag.attr("src") === '../img/icon-eye-on.png'){
                $("#eyeState").text("OFF");
            }else{
                $("#eyeState").text("ON");
            }
            $(this).css("background-color","#D5D5D5");
            $(".popup").css("display","block")
            .css("left",$(this).offset().left + 200)
            .css("top",$(this).offset().top + 20);
        }).mouseleave(function(){
            $(this).css("background-color","");

        })

        $(".ship-card").mouseover(function() {
            cardMouseOver($(this),$(this).css("border"),"0px 0px 20px 1px");
        }).mouseleave(function(){
            cardMouseOver($(this),$(this).css("border"),"0px 0px 0px 0px");
        });

        $(".popup").mouseover(function() {
        }).mouseleave(function(){
            $(this).css("display","none");
        })

        $(".eye-icon").click(function(){
            if($("#eyeState").text() === "OFF")
            {
                hdnaleLiTag.attr("src","../img/icon-eye-on_2.png");
                $("#eyeState").text("ON");
                $("#vesselEyeImg").attr("src","../img/icon-eye-on.png");
            }else{
                hdnaleLiTag.attr("src","../img/icon-eye-on.png");
                $("#eyeState").text("OFF");
                $("#vesselEyeImg").attr("src","../img/icon-eye-on_2.png");
            }
        })

        $(".search-icon").click(function(){
            openModal("modal1");
            function openModal(modalname){
                document.get;
                $("."+modalname).show();
                $("#modal").show();
            }
        });

        $(".close").on('click',function(){
            $(".pop_bg-copy").hide();
            $("#modal").hide();
        });
    })
</script>
<div id="modal">
    <div class="modal1 pop_bg-copy">
        <span class="JH-4">JH-4</span>
        <span style="float:right; cursor:pointer"><img class="close" src="../img/close.png"/></span>
        <div class="VESSEL-SEARCH">
            VESSEL SEARCH
        </div>
        <div class="textbox">
        <label for="ex_input"></label>
            <input type="text" id="ex_input" placeholder="Search for vessels...">
            <img src="../img/search.png" style="position:relative;left:-35px;"/>
        </div>
        <div class="vessel-name">
            <span class="vessel-title">VESSEL NAME HERE</span>
            <span class="oil-container">Oil Container</span>
        </div>
        <div class="vessel-name">
            <span class="vessel-title">VESSEL NAME HERE</span>
            <span class="oil-container">Oil Container</span>
        </div>
        <div class="vessel-name">
            <span class="vessel-title">VESSEL NAME HERE</span>
            <span class="oil-container">Oil Container</span>
        </div>
        <div class="vessel-name">
            <span class="vessel-title">VESSEL NAME HERE</span>
            <span class="oil-container">Oil Container</span>
        </div>
        <div class="vessel-name">
            <span class="vessel-title">VESSEL NAME HERE</span>
            <span class="oil-container">Oil Container</span>
        </div>
        <div class="vessel-name">
            <span class="vessel-title">VESSEL NAME HERE</span>
            <span class="oil-container">Oil Container</span>
        </div>
        <div class="vessel-name">
            <span class="vessel-title">VESSEL NAME HERE</span>
            <span class="oil-container">Oil Container</span>
        </div>
        <div>
            <input class="addBtn" type="button" value="추가하기"/>
        </div>
        <div class="mapSection">
            <!-- 이미지 영역 -->
        </div>
    </div>
</div>
<div class="popup">
    <div class="popup-item eye-icon" style="cursor:pointer"><img id="vesselEyeImg" style="width:20px; margin-right:5px" src="../img/icon-eye-on_2.png"><span id="eyeState">OFF</span></div>
    <div class="popup-item search-icon" style="cursor:pointer"><img style="width:20px; margin-right:5px; position: relative; margin-top:3px;" src="../img/search.png">Vessel Search</div>
</div>
<div class="container">
<aside>
        <div class="ship-list-board">
            <div class="list-title">
                <div class="info-text">전체선석리스트</div>
                <div class="ship-count-text">
                    총 <span class="list-count">4</span>개의 선석
                </div>
            </div>
            <ul id="ship-list">
                <li class="ship-item" style="cursor:pointer">
                    <div class="icon-name-container">
                        <div class="icon"><img src="../img/icon-eye-on.png"></div>
                        <div class="ship-name">4-1</div>
                    </div>
                    <div class="ship-status pob">POB</div>
                </li>
                <li class="ship-item" style="cursor:pointer">
                    <div class="icon-name-container">
                        <div class="icon"><img src="../img/icon-eye-on.png"></div>
                        <div class="ship-name">4-2</div>
                    </div>
                    <div class="ship-status out">OUT</div>
                </li>
                <li class="ship-item" style="cursor:pointer">
                    <div class="icon-name-container">
                        <div class="icon"><img src="../img/icon-eye-on.png"></div>
                        <div class="ship-name">SILO</div>
                    </div>
                    <div class="ship-status lay">LAY</div>
                </li>
                <li class="ship-item" style="cursor:pointer">
                    <div class="icon-name-container">
                        <div class="icon"><img src="../img/icon-eye-on.png"></div>
                        <div class="ship-name">JH-4</div>
                    </div>
                    <div class="ship-status emt">EMT</div>
                </li>
            </ul>
            <button class="more-btn">더 보기</button>
        </div>
        <div id="map-board">
            <div class="map-top">
                <div class="ecdis">ECDIS</div>
                <div class="current-location">현재위치: 울산광역시</div>
            </div>
            <div class="map">
                <div class="size-control-btns">
                    <button class="btn expansion">+</button>
                    <button class="btn shrink">-</button>
                </div>
                <div class="locate-btn">
                    <button class="btn find-current-location-btn">✔</button>
                    <div class="locate-text">LOCATE</div>
                </div>
            </div>
        </div>
    </aside>
    <main>
        <div class="main-menu">
            <select name="ship-type" id="ship-type">
                <option value="all">전체선석보기</option>
            </select>
            <div class="ecdis">
                <div></div>
                <div>ECDIS</div>
            </div>
        </div>
        <div class="ship-card-list-grid">
            <!-- POB 선박 카드-->
            <div class="ship-card ship-pob">
                <div class="card-top">
                    <div class="ship-info-board">
                        <div class="ship-speed pob">
                            <div class="b-speed">
                                <div>
                                    <!--이미지 넣는 곳-->
                                </div>
                                <div>54<span>cm/s</span></div>
                            </div>
                            <div class="s-speed">
                                <div>
                                    <!--이미지 넣는 곳-->
                                </div>
                                <div>32<span>cm/s</span></div>
                            </div>
                        </div>
                        <div class="ship-distance pob">
                            <div>102<span>m</span></div>
                            <div>102<span>m</span></div>
                        </div>
                    </div>
                    <div class="top-ship-info">
                        <div class="zone">4-1</div>
                        <div class="direction-wind">
                            <div>북동북</div>
                            <div>2.8</div>
                        </div>
                    </div>
                </div>
                <div class="card-bottom">
                    <div class="ship-status">
                        <div class="status pob">POB</div>
                        <div class="ship-warnings">
                            <div class="fire-icon warning"><img src="../img/off_4.png"></div>
                            <div class="smoke-icon warning"><img src="../img/off_5.png"></div>
                            <div class="crush-icon warning"><img src="../img/off_7.png"></div>
                        </div>
                    </div>
                    <div class="date">
                        <div class="calendar">2020/06/02</div>
                        <div class="time">20:00</div>
                        <div>SR(30)</div>
                    </div>
                    <div class="bottom-ship-info">
                        <div class="ship-icon"><img src="../img/container-ship.png"></div>
                        <div>
                            <div class="ship-name">VESSEL NAME HERE</div>
                            <div class="ship-type">Oil Container</div>
                            <div>H. 000 xW. 000 x L. 0000</div>
                        </div>
                    </div>
                    <div class="dock-info">
                        <div class="zone-text">ZONE</div>
                        <div class="zone-number">1</div>
                    </div>
                </div>
            </div>

            <!-- OUT 선박 카드-->
            <div class="ship-card ship-out">
                <div class="card-top">
                    <div class="top-ship-info">
                        <div class="zone">4-2</div>
                        <div class="direction-wind">
                            <div>북동북</div>
                            <div>2.8</div>
                        </div>
                    </div>
                </div>
                <div class="card-bottom">
                    <div class="ship-status">
                        <div class="status out">OUT</div>
                        <div class="ship-warnings">
                            <div class="fire-icon warning"><img src="../img/off.png"></div>
                            <div class="smoke-icon warning active"><img src="../img/on_2.png"></div>
                            <div class="crush-icon warning"><img src="../img/off_10.png"></div>
                        </div>
                    </div>
                    <div class="date">
                        <div class="calendar">2020/06/02</div>
                        <div class="time">20:00</div>
                        <div>GD(32)</div>
                    </div>
                    <div class="bottom-ship-info">
                        <div class="ship-icon"><img src="../img/container-ship.png"></div>
                        <div>
                            <div class="ship-name">VESSEL NAME HERE</div>
                            <div class="ship-type">Oil Container</div>
                            <div>H. 000 xW. 000 x L. 0000</div>
                        </div>
                    </div>
                    <div class="dock-info">
                        <div class="zone-text">ZONE</div>
                        <div class="zone-number">3</div>
                    </div>
                </div>
            </div>

            <!-- LAY 선박 카드-->
            <div class="ship-card ship-lay">
                <div class="card-top">
                    <div class="top-ship-info">
                        <div class="zone">SILO</div>
                        <div class="direction-wind">
                            <div>북동북</div>
                            <div>2.8</div>
                        </div>
                    </div>
                </div>
                <div class="card-bottom">
                    <div class="ship-status">
                        <div class="status lay">LAY</div>
                        <div class="ship-warnings">
                            <div class="fire-icon warning"><img src="../img/off.png"></div>
                            <div class="smoke-icon warning"><img src="../img/off_5.png"></div>
                            <div class="crush-icon warning active"><img src="../img/on.png"></div>
                        </div>
                    </div>
                    <div class="date">
                        <div class="label">MOORING TIME</div>
                        <div class="calendar">2020/06/01 11:00</div>
                        <div class="time">3<span>hrs.</span></div>
                    </div>
                    <div class="bottom-ship-info">
                        <div class="ship-icon"><img src="../img/container-ship.png"></div>
                        <div>
                            <div class="ship-name">VESSEL NAME HERE</div>
                            <div class="ship-type">Oil Container</div>
                        </div>
                        <div class="working">
                            <span>✔</span>
                            AVISS 작업자 감지기능이 작동중입니다. Object Detection in
                            operation.
                        </div>
                    </div>
                    <div class="dock-info">
                        <div class="count">
                            <div class="count-text">COUNT</div>
                            <div class="count-number">5</div>
                        </div>
                        <div class="count-bar">
                            <!-- 카운트 바 이미지 넣는 곳 -->
                        </div>
                    </div>
                </div>
            </div>

            <!-- EMT 선박 카드-->
            <div class="ship-card ship-emt">
                <div class="card-top">
                    <div class="top-ship-info">
                        <div class="zone">JH-4</div>
                        <div class="direction-wind">
                            <div>북동북</div>
                            <div>2.8</div>
                        </div>
                    </div>
                </div>
                <div class="card-bottom">
                    <div class="ship-status">
                        <div class="status emt">EMT</div>
                        <div class="ship-warnings">
                            <div class="fire-icon warning"><img src="../img/off_4.png"></div>
                            <div class="smoke-icon warning"><img src="../img/off_5.png"></div>
                            <div class="crush-icon warning"><img src="../img/off_7.png"></div>
                        </div>
                    </div>
                    <div class="date">
                        <div class="label">NEXT SCHEDULE</div>
                        <div class="calendar">2020/06/05</div>
                        <div class="time">05:00</div>
                    </div>
                    <div class="bottom-ship-info">
                        <div class="ship-icon"><img src="../img/container-ship.png"></div>
                        <div>
                            <div class="ship-name">VESSEL NAME HERE</div>
                            <div class="ship-type">Oil Container</div>
                        </div>
                        <div class="working">
                            <span>✔</span>
                            AVISS 감시기능 작동중입니다. AVISS in operation.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>
