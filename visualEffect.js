$(window).load(function(){

    var $visualList
    var $visualLi
    var $visualImg
    var $visualWrap
    var visualImgNum
    var $btn
    var visualWidth
    var currentIndex=0
    var nextIndex
    var timer

    visualInit() 
    onVisualChange() 
    onVisualReset() 
    visualEvent()
    onPlay() 

    function visualInit(){ 
        $visualList=$("#visual_list")
        $visualLi=$visualList.children()
        $visualImg=$(".mainvisual")
        $visualWrap=$("#visual_wrap")
        visualImgNum=$visualLi.size()
        $btn=$(".visual_btn")
    }

    function visualEvent(){
        $(window).on("resize",onVisualChange)
        $(window).on("resize",onVisualReset)
        $("#visual_btn_next").on("click",onVisualNext)
        $("#visual_btn_prev").on("click",onVisualPrev)
        $btn.on("mouseenter",onVisualBtnOver)
        $btn.on("mouseleave",onVisualBtnOut)
    }

    function onVisualReset(){ 
        visualWidth=$(window).innerWidth()
        $visualLi.css({"width":visualWidth})
        $visualImg.css({"width":visualWidth})
        
        if(visualWidth<=380){
            $visualWrap.css({"height":340})
        }else if(visualWidth<=480){            
            $visualWrap.css({"height":440})
        }else{
            $visualWrap.css({"height":$visualImg.innerHeight()})
        }

        $visualLi.css({"opacity":0})
        $visualLi.eq(currentIndex).css({"opacity":1})
    }

    function onVisualChange(){
        if($(window).innerWidth()<=480){
            for(var i=0; i<visualImgNum; i++){
                $visualImg.eq(i).attr("src","/images/visual_mobile_0"+i+".jpg")
            }                   
        }else{
            for(var i=0; i<visualImgNum; i++){
                $visualImg.eq(i).attr("src","/images/visual_0"+i+".jpg")
            }
        }
    }

    function onVisualNext(){
        nextIndex=currentIndex+1
        if(nextIndex>=visualImgNum){
            nextIndex=0
        }
        $visualLi.eq(currentIndex).stop()
        $visualLi.eq(currentIndex).animate({"opacity":0},1500,"easeOutCubic")
        $visualLi.eq(nextIndex).stop()
        $visualLi.eq(nextIndex).animate({"opacity":1},1500,"easeOutCubic")
        currentIndex=nextIndex
    }

    function onVisualPrev(){
        nextIndex=currentIndex-1
        if(nextIndex<0){
            nextIndex=visualImgNum-1
        }
        $visualLi.eq(currentIndex).stop()
        $visualLi.eq(currentIndex).animate({"opacity":0},1500,"easeOutCubic")
        $visualLi.eq(nextIndex).stop()
        $visualLi.eq(nextIndex).animate({"opacity":1},1500,"easeOutCubic")
        currentIndex=nextIndex
    }

    function onPlay(){
        timer=setInterval(onVisualNext,2000)
    }

    function onStop(){
        clearInterval(timer)
    }

    function onVisualBtnOver(){
        onStop()
        $(this).children().addClass("selected")
    }

    function onVisualBtnOut(){
        onPlay()
        $btn.children().removeClass("selected")
    }


    // 모바일 사이즈에서 비주얼 스와이퍼 사용 
    var swiper = new Swiper('.swiper-container', {
        scrollbar: {
            el: '.swiper-scrollbar',
            hide: true,
        },
    });
    // 비주얼 스와이퍼 끝 
    
})

