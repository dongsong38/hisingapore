$(document).ready(function(){

    var $inforTitle
    var $inforConLi
    var $inforCon // a태그
    var $detailText
    var $lineBottom
    var inforConNum

    inforInit()
    inforEvent()
    onInforAni()

    function inforInit(){
        $inforTitle=$(".infor_title")
        $inforConLi=$("#infor_list").children()
        $inforCon=$inforConLi.children() // a태그
        $detailText=$(".detail_text") 
        $lineBottom=$(".line_bottom")
        inforConNum=$inforConLi.size()
    }

    function inforEvent(){
        $inforCon.on("mouseenter",onInforConOver)
        $inforCon.on("mouseleave",onInforConOut)
        $(document).on("scroll",onInforAni)
    }

    function onInforConOver(){
        $inforCon.removeClass("selected") 
        $(this).addClass("selected") // 위에 선 굵게

        $(this).children(".titile_text").css({"top":15}) // 타이틀 고정
        
        $(this).children(".detail_text").stop()
        $(this).children(".detail_text").animate({"opacity":1,"top":40},300,"easeOutCubic")  

        $(this).children(".line_bottom").stop()
        $(this).children(".line_bottom").animate({"opacity":1,"top":70},300,"easeOutCubic")
    }

    function onInforConOut(){
        $inforCon.removeClass("selected")

        $(this).children(".titile_text").css({"top":20}) // 타이틀 고정

        $detailText.stop()
        $detailText.animate({"opacity":0,"top":20},300,"easeOutCubic")

        $lineBottom.stop()
        $lineBottom.animate({"opacity":0,"top":0},300,"easeOutCubic")
    }

    function onInforAni(){
        if($(document).scrollTop()>1200){
            $inforTitle.animate({"top":0,"opacity":1},700,"easeOutBack")

            for(var i=0; i<inforConNum; i++){
                $inforConLi.eq(i).animate({"top":0,"opacity":1},1000+(i*200),"easeOutBack")
            }
            
        }
    }

})
