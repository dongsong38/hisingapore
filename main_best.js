$(window).load(function(){

    var $bestTitle=$(".best_title")
    var $bestCon=$(".best_list").children()
    var bestConNum=$bestCon.size()
    var grayLayer=$("<div class='gray_layer'><a href='/theme/custom/html/triptheme/theme_detail.php'><span><img src='/images/plus_btn.png' alt='자세히보기버튼'></span></a></div>")

    onBestReset()
    bestEvent()
    onBestAni()

    function bestEvent(){
        $bestCon.on("mouseenter",onBestConOver)
        $bestCon.on("mouseleave",onBestConOut)
        $(window).on("resize",onBestReset)
        $(document).on("scroll",onBestAni)
    }

    function onBestReset(){
        grayLayer.css({"height":$bestCon.find("img").innerHeight()})
    }

    function onBestConOver(){
        grayLayer.appendTo($(this))
        
        $(this).children(".gray_layer").stop()
        $(this).children(".gray_layer").animate({"opacity":1},500,"easeOutCubic")
    }

    function onBestConOut(){
        $(this).children(".gray_layer").stop()
        $(this).children(".gray_layer").css({"opacity":0})
    }

    function onBestAni(){
        if($(document).scrollTop()>100){
            $bestTitle.animate({"top":0,"opacity":1},700,"easeOutBack")

            for(var i=0; i<bestConNum; i++){
                $bestCon.eq(i).animate({"top":0,"opacity":1},700+(i*200),"easeOutCubic")
            }

        }
    }

})